<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     protected $data;

     public function __construct($data=[])
    {
        $this->data = $data;
    }


    public function build(Request $request){
        return $this->from([
            'address' => $request->email,
            'name' => $request->name
        ])
            ->to( env('APP_ADMIN_CONTACT') )
            ->subject( 'Message de la part de: ' . $request->name )
            ->view('emails.contactform')
            ->with([
                'contactName' => $request->name,
                'contactEmail' => $request->email,
                'contactMessage' => $request->message
            ]);




    }
}
