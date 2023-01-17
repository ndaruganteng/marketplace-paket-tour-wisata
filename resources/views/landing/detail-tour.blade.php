@extends('landing.layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thelema-Marketplace Tour & Travel</title>
      <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
        />
</head>
<body>

    <section class="text-gray-600 font-inter">
        <div class="container mx-auto flex px-24 pt-24 pb-6 items-center justify-center flex-col">
            <img class="lg:w-2/9 md:w-3/6 w-5/6 mb-12 object-cover object-center " alt="hero" src="images/background/paket.jpg">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900">Open Trip Tour Wisata Beautiful of Labuan Bajo</h1>
                <p class="mb-8 leading-relaxed">Highlight : Sailling Pulau Kelor, Pulau Manjarite, Pulau Kalong, Explore pulau Padar, Snorkelling Pulau Sebayur</p>
            </div>
        </div>
    </section>

    <section class="font-inter" >
        <div class="container px-40 pb-20 mx-auto ">      
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>TOUR PRICE</span>
                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">    
                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                            List item one
                            <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>You might feel like you are being really "organized" o</li>
                                <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
                                <li>Nesting tons of folders in your source code is also not helpful.</li>
                            </ol>
                        </li>
                        <li>
                            List item two
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>I'm not sure if we'll bother styling more than two levels deep.</li>
                                <li>Two is already too much, three is guaranteed to be a bad idea.</li>
                                <li>If you nest four levels deep you belong in prison.</li>
                            </ul>
                        </li>
                        <li>
                            List item three
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Again please don't nest lists if you want</li>
                                <li>Nobody wants to look at this.</li>
                                <li>I'm upset that we even have to bother styling this.</li>
                            </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                    <span>INCLUDE & EXCLUDE</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">       
                        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Password requirements:</h2>
                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>
                                At least 10 characters (and up to 100 characters)
                            </li>
                            <li>
                                At least one lowercase character
                            </li>
                            <li>
                                Inclusion of at least one special character, e.g., ! @ # ?
                            </li>
                        </ul>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                    <span>ITINERARY</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        
                    <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Password requirements:</h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                            At least 10 characters (and up to 100 characters)
                        </li>
                        <li>
                            At least one lowercase character
                        </li>
                        <li>
                            Inclusion of at least one special character, e.g., ! @ # ?
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 pb-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="sm:text-4xl text-3xl font-bold title-font mb-2 text-gray-900">BOOKING TOUR !</h1>
            </div>
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">               
                <form>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                        </div>
                        <div>
                            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
                        </div>  
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                            <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div>
                        <div>
                            <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                        </div>
                        <div>
                            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per month)</label>
                            <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                    </div>
                    <div class="mb-6">                   
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                    </div> 
                    <button type="submit" class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>
    </section>




</body>
</html>
@endsection
