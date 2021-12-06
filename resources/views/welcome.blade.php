@extends('layouts.app')
@section('title', 'Accueil')

@section('content')

    <section id="accueil" class="relative overflow-hidden">
        <nav class="flex justify-between items-center py-8 px-4 xl:px-10">
            <a href="#">
                <img class="h-12" src="/img/logo.png" alt="Sobar">
            </a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center p-3 hover:bg-gray-50 rounded">
                    <svg class="block h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden lg:flex lg:ml-auto lg:mr-12 lg:items-center lg:w-auto lg:space-x-12">
                <li><a class="text-sm font-medium" href="#accueil">Accueil</a></li>
                <li><a class="text-sm font-medium" href="#apropos">A propos</a></li>
                <li><a class="text-sm font-medium" href="#portfolio">Portfolio</a></li>
            </ul>
            <div class="hidden lg:block"><a
                    class="inline-block py-4 px-8 text-sm leading-normal font-medium bg-sobar-light hover:bg-sobar hover:text-white text-black rounded transition duration-200"
                    href="#contact">Contact</a></div>
        </nav>
        <section class="relative overflow-hidden"><img class="hidden lg:block absolute inset-0 w-full"
                src="atis-assets/background/lines.svg" alt="">
            <div class="relative pt-12 lg:pt-20 pb-12 md:pb-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                            <div class="w-full text-center lg:text-left">
                                <div class="max-w-md mx-auto lg:mx-0">
                                    <h2 class="mb-3 text-4xl lg:text-5xl font-bold font-heading">
                                        <span>Société d’exploitation de la <span class="text-sobar-dark">Barytine</span>
                                            de Farès</span>
                                    </h2>
                                </div>
                                <div class="max-w-sm mx-auto lg:mx-0">
                                    <p class="mb-6 text-gray-400 leading-loose">Exploitation mécanisée du gisement filonien
                                        de Barytine
                                        à ciel ouvert.</p>
                                    <div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-sobar hover:bg-sobar-dark text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200"
                                            href="#contact">Contactez-Nous</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                            <div class="relative" style="z-index: 0;">
                                <img class="h-128 w-full max-w-lg object-cover  rounded-3xl md:rounded-br-none"
                                    src="img/background.jpg" alt=""><img class="hidden md:block absolute"
                                    style="top:-2rem; right: 3rem; z-index: -1;"
                                    src="atis-assets/elements/green-dark-up.svg" alt=""><img
                                    class="hidden md:block absolute" style="bottom:-2rem; right: -2rem; z-index: -1;"
                                    src="atis-assets/elements/wing-green-down.svg" alt=""><img
                                    class="hidden md:block absolute" style="top:3rem; right: -3rem; z-index: -1;"
                                    src="atis-assets/elements/bullets-gray-right.svg" alt=""><img
                                    class="hidden md:block absolute" style="bottom:2.5rem; left: -4.5rem; z-index: -1;"
                                    src="atis-assets/elements/bullets-gray-left.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-lg font-semibold leading-none" href="#">
                        <img class="h-7" src="/img/logo.png" alt="" width="auto">
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded"
                                href="#accueil">Accueil</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded"
                                href="#apropos">A propos</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-medium text-gray-900 hover:bg-gray-50 rounded"
                                href="#portfolio">Portfolio</a></li>


                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6"><a
                            class="block py-3 text-center text-sm leading-normal rounded bg-sobar-light hover:bg-sobar hover:text-white text-black font-semibold transition duration-200"
                            href="#contact">Contact</a></div>
                    <p class="mt-6 mb-4 text-sm text-center text-gray-500">
                        <span>Tous droits réservés © Sarl Sobar 2021</span>
                    </p>
                </div>
            </nav>
        </div>
    </section>

    <section class="font-normal  text-white py-8 2xl:pt-20 2xl:pb-5">
        <div class="container px-4 mx-auto">
            <div class="mb-28">

                <h2 class="font-heading font-medium text-center uppercase text-7xl text-black md:text-7xl xl:text-7xl leading-tight">Fiche téchnique de la baryte de forage</h2>
            </div>
            <div class="flex flex-wrap overflow-hidden xl:-mx-3">

            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
                <div class="overflow-x-auto text-center ">
                    <div class="inline-block rounded-5xl overflow-hidden border border-gray-100 ">
                        <table class="table-auto w-full mx-auto ">
                            <thead>
                                <tr class="border-b border-gray-100 text-body text-black">
                                    <th
                                        class="min-w-max pr-24 h-20 flex items-center text-left pl-8 lg:pl-16 bg-gray-50 text-lg font-semibold uppercase">

                                        <span>PROPERTY</span>
                                    </th>
                                    <th class="h-20 bg-gray-50 text-lg font-semibold uppercase pr-5">SPECIFICATIONS</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center pt-5">

                                            <span>Specific Gravity, g/cm3  </span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        <p class="pt-5">4,10 min</p>
                                    </td>

                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Water soluble alkaline earth metals (as calcium)</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">180 ppm</td>

                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Mercury (Hg)</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">0,6 ppm</td>


                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Cadmium (Cd)</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        1,5 ppm
                                    </td>

                                </tr>
                                <tr>
                                    <td class="pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Extractible Carbonates- wet measurement</span>
                                        </div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        2,3 mg/l
                                    </td>


                                </tr>
                                <tr>
                                    <td class="pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Moisture </span>
                                        </div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        1%
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
                <div class="overflow-x-auto text-center">
                    <div class="inline-block max-w-5xl rounded-5xl overflow-hidden border border-gray-100">
                        <table class="table-auto w-full mx-auto ">
                            <thead>
                                <tr class="border-b border-gray-100 text-body text-black">
                                    <th
                                        class="min-w-max pr-24 h-20 flex items-center text-left pl-8 lg:pl-16 bg-gray-50 text-lg font-semibold uppercase">

                                        <span>Chimical composition</span>
                                    </th>
                                    <th class="h-20 bg-gray-50 text-lg font-semibold uppercase pr-5">% weight</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center pt-5">

                                            <span>BaSO4</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        <p class="pt-5"> 90,92</p>
                                    </td>

                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Sr SO4</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">2,39</td>

                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Si O2</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">1.54</td>


                                </tr>
                                <tr class="border-b border-gray-100 border-opacity-10">
                                    <td class="relative pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Fe2 O3</span>
                                        </div>
                                        <div class="absolute -bottom-px left-0 w-10 h-px "></div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        1,01
                                    </td>

                                </tr>
                                <tr>
                                    <td class="pl-8 lg:pl-16 font-medium text-lg h-24">
                                        <div class="flex items-center">

                                            <span>Ca F2</span>
                                        </div>
                                    </td>
                                    <td class="text-center px-5 py-5 text-lg text-black h-24">
                                        0.14
                                    </td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <p class="text-black container-fluid mx-auto">
                <span class="font-bold"> Product Description</span><br>

                Grey barite with specific gravity
                > 4,10 g/cm3 and low trace elements, particularly for Hg and Cd, to meet API specifications for Oil Drilling Grade

               <br> <span class="font-bold">Product Form</span> <br>

                Bulk- Lump size, 0-150 mm (95%)

            </p>
          </div>

        </div>

    </section>

    <section id="portfolio" class="relative py-10">

        <div class="container mx-auto px-4">
            <div class="max-w-lg mx-auto mb-6 lg:mb-12 text-center">
                <h2 class="mt-8 text-4xl font-semibold">PHOTOS</h2>
            </div>
            <div x-data="{
                                    openTab: 1,
                                    activeClasses: 'border-b-2 border-sobar-dark text-gray-900',
                                    inactiveClasses: ''
                                  }">
                <div class="mb-12 lg:mb-16 lg:text-center max-w-max mx-auto lg:border-b">
                    <ul class="flex">
                        <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }"> <button
                                :class="openTab === 1 ? activeClasses : inactiveClasses"
                                class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-gray-500 hover:text-gray-900">
                                <a>Extraction</a> </button> </li>
                        <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }"> <button
                                :class="openTab === 2 ? activeClasses : inactiveClasses"
                                class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-gray-500 hover:text-gray-900 "><a>
                                    Stock </a></button> </li>
                        <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }"> <button
                                :class="openTab === 3 ? activeClasses : inactiveClasses"
                                class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-gray-500 hover:text-gray-900"><a>
                                    Chargement </a></button> </li>
                        <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }"> <button
                                :class="openTab === 4 ? activeClasses : inactiveClasses"
                                class="px-4 lg:px-8 py-4 pb-4 text-sm font-semibold text-gray-500 hover:text-gray-900"><a>
                                    Exposition </a></button> </li>

                    </ul>
                </div>
                <div x-show="openTab === 1">
                    <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg object-top" src="/img/first/1.jpg"
                                    alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/first/2.jpg" alt="">
                            </div>
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/first/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/first/4.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/first/5.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover bg-bottom rounded-lg" src="/img/first/6.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div x-show="openTab === 2">
                    <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg object-top" src="/img/second/3.jpg"
                                    alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/second/2.jpg" alt="">
                            </div>
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/second/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/second/6.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/second/5.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover bg-bottom rounded-lg" src="/img/second/4.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div x-show="openTab === 3">
                    <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg object-top" src="/img/third/1.jpg"
                                    alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/third/2.jpg" alt="">
                            </div>
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/third/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/third/4.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/third/5.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover bg-bottom rounded-lg" src="/img/third/6.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div x-show="openTab === 4">
                    <div class="flex flex-wrap mb-6 lg:mb-14 -mx-3">
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg object-center" src="/img/fourth/1.jpg"
                                    alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/fourth/2.jpg" alt="">
                            </div>
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/fourth/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-full md:w-1/2 lg:h-screen">
                            <div class="w-full h-64 lg:h-2/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/fourth/4.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover rounded-lg" src="/img/fourth/5.jpg" alt="">
                            </div>
                            <div class="w-full lg:w-1/2 h-64 lg:h-1/3 p-3">
                                <img class="w-full h-full object-cover bg-bottom rounded-lg" src="/img/fourth/6.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section id="contact" class="py-10">
        <div class="container px-4 mx-auto mb-12 md:mb-24">
            <div class="flex flex-wrap items-center -m-4">
                <div class="w-full md:w-1/3 px-4 text-center p-4">
                    <svg class="mb-8 mx-auto" width="48" height="48" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="white" stroke="#DEE4E9"></rect>
                        <path
                            d="M29.5 22C29.5 26.5 24 31.5 24 31.5C24 31.5 18.5 26.5 18.5 22C18.5 20.5413 19.0795 19.1424 20.1109 18.1109C21.1424 17.0795 22.5413 16.5 24 16.5C25.4587 16.5 26.8576 17.0795 27.8891 18.1109C28.9205 19.1424 29.5 20.5413 29.5 22V22Z"
                            stroke="#838EA4" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M24 24.5C25.3807 24.5 26.5 23.3807 26.5 22C26.5 20.6193 25.3807 19.5 24 19.5C22.6193 19.5 21.5 20.6193 21.5 22C21.5 23.3807 22.6193 24.5 24 24.5Z"
                            stroke="#838EA4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>

                    <p class="text-gray-500"> 38, Rue M’hamed Boukhirane
                        BP 74 Bis</p>
                    <p class="text-gray-500">42021 Sidi Ghilès,
                        Tipaza</p>
                </div>
                <div class="w-full md:w-1/3 px-4 text-center p-4">
                    <svg class="mb-8 mx-auto" width="48" height="48" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="white" stroke="#DEE4E9"></rect>
                        <path
                            d="M30.5 30.5H17.5C16.948 30.5 16.5 30.052 16.5 29.5V18.5C16.5 17.948 16.948 17.5 17.5 17.5H30.5C31.052 17.5 31.5 17.948 31.5 18.5V29.5C31.5 30.052 31.052 30.5 30.5 30.5Z"
                            stroke="#838EA4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.5 20.5L24 25L29.5 20.5" stroke="#838EA4" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <p class="text-gray-500"> <a href="mailto:contact@sobar.dz">contact@sobar.dz</a> </p>
                </div>
                <div class="w-full md:w-1/3 px-4 text-center p-4">
                    <svg class="mb-8 mx-auto" width="48" height="48" viewBox="0 0 48 48" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" fill="white" stroke="#DEE4E9"></rect>
                        <path
                            d="M26.514 25.764L25.292 27.292C23.3984 26.1794 21.8205 24.6015 20.708 22.708L22.236 21.486C22.4151 21.3426 22.5417 21.144 22.596 20.9211C22.6502 20.6982 22.6292 20.4636 22.536 20.254L21.143 17.117C21.0431 16.8922 20.8666 16.7101 20.645 16.6034C20.4234 16.4966 20.1711 16.472 19.933 16.534L17.281 17.221C17.0336 17.2858 16.8186 17.439 16.6765 17.6517C16.5345 17.8643 16.4752 18.1216 16.51 18.375C16.9753 21.6887 18.5068 24.7609 20.8729 27.127C23.2391 29.4932 26.3112 31.0247 29.625 31.49C29.8782 31.5249 30.1355 31.4657 30.348 31.3236C30.5605 31.1815 30.7135 30.9664 30.778 30.719L31.466 28.068C31.5279 27.8299 31.5033 27.5776 31.3966 27.356C31.2898 27.1343 31.1078 26.9579 30.883 26.858L27.746 25.465C27.5364 25.372 27.302 25.351 27.0792 25.405C26.8564 25.4591 26.6577 25.5853 26.514 25.764V25.764Z"
                            stroke="#838EA4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="text-gray-500"> <a href="tel:+213 555 04 04 30">+213 555 04 04 30</a></p>
                </div>
            </div>
        </div>
        <div>
            <div class="container px-4 mx-auto">

                <div class="max-w-3xl -mt-64 lg:-mt-32 mx-auto p-6 lg:py-10 lg:px-20 bg-white rounded-xl text-center">
                    <h2 class="mt-8 mb-14 text-4xl font-semibold font-heading">Contactez-Nous
                    </h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                    @endif
                    <form action="{{ route('mailContactForm') }}" method="post">
                        @csrf
                        <div class="relative flex flex-wrap mb-6">
                            <input class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded" name="name"
                                type="text" placeholder="Nom & Prénom">
                            <span
                                class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">Nom</span>
                        </div>
                        <div class="relative flex flex-wrap mb-6">
                            <input class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded" name="email"
                                type="email" placeholder="e.g example@sobar.dz">
                            <span
                                class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">E-mail</span>
                        </div>
                        <div class="relative flex flex-wrap mb-6">
                            <textarea class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded resize-none"
                                name="message" id="1" type="message" cols="30" rows="10"
                                placeholder="Message..."></textarea>
                            <span
                                class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">Votre
                                message</span>
                        </div>

                        <div class="relative flex flex-wrap mb-6">
                            <div class="captcha">
                                <span>{!! captcha_img() !!}</span>

                            </div>
                            <div style="margin-left: 10px">
                                <button type="button" id="reload">
                                    ↻
                                </button>
                            </div>
                        </div>
                        <div class="relative flex flex-wrap mb-6">
                            <input class="relative mb-2 md:mb-0 w-full py-4 pl-4 text-sm border rounded" name="captcha"
                                id="captcha" type="text" placeholder="Captcha">
                            <span
                                class="absolute top-0 left-0 ml-4 -mt-2 px-1 inline-block bg-white text-gray-500 text-xs">Captcha</span>
                        </div>


                        <button
                            class="w-full inline-block px-6 py-4 text-sm text-black hover:text-white bg-sobar-light  hover:bg-sobar-dark rounded transition duration-200"
                            type="submit">Envoyer</button>
                    </form>
                </div>
                <a href="https://www.google.com/maps/place/36%C2%B028'36.9%22N+2%C2%B004'54.3%22E/@36.4794247,2.0785618,13.75z/data=!4m6!3m5!1s0!7e2!8m2!3d36.4769278!4d2.0817617"
                    target="_blank">
                    <img src="/img/map.png" alt="" class="mx-auto"></a>

            </div>

    </section>

    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between items-center -mx-4">
                <div class="w-full lg:w-2/6 px-4">
                    <a class="inline-block mb-6 text-gray-900 text-lg font-semibold" href="#accueil">
                        <img class="h-12" src="img/logo.png" alt="">
                    </a>
                    <p class="hidden lg:block text-sm text-gray-500">Tous droits réservés © Sarl Sobar 2021</p>
                </div>
                <div class="w-full lg:w-4/6 px-4">
                    <div class="flex flex-wrap items-center justify-end">
                        <ul class="w-full lg:w-auto inline-flex flex-wrap mb-4 lg:mb-0 md:mr-6 lg:mr-12">
                            <li class="mr-12 mb-2 md:mb-0"><a class="text-sm font-medium" href="#accueil">Accueil</a></li>
                            <li class="mr-12 mb-2 md:mb-0"><a class="text-sm font-medium" href="#apropos">A propos</a>
                            </li>
                            <li class="mr-12 mb-2 md:mb-0"><a class="text-sm font-medium" href="#portfolio">Portfolio</a>
                            </li>
                        </ul>
                        <a class="inline-block mr-auto lg:mr-0 py-4 px-8 text-sm font-medium leafing-normal text-black hover:text-white bg-sobar-light  hover:bg-sobar-dark  rounded"
                            href="#contact">Contact</a>
                    </div>
                    <p class="mt-6 lg:hidden text-sm text-gray-500">Tous droits réservés © Sarl Sobar 2021</p>
                </div>
            </div>
        </div>
    </section>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection
@endsection
