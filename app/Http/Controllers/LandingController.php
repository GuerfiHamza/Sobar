<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function mailContactForm(Request $request)
    {

        $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'captcha' => 'required|captcha'

     ]);
        $data = [

        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        ];

        \Mail::to(env('RECIPIENT_EMAIL'))->send(new \App\Mail\ContactMail($data));

        return redirect()->back();
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
