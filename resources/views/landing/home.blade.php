@extends('landing.layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thelema-Marketplace Tour & Travel</title>
        <link
              rel="icon"
              type="image/png"
              sizes="56x56"
              href="images/icon/iconbg.png"
          />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">


        <!-- Jumbotron -->
        <!-- <div  class=" p-12 text-center relative overflow-hidden bg-no-repeat bg-cover "
                style="background-image: url('https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80');
                height: 700px;">
            <div
                class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                style="background-color: rgba(0, 0, 0, 0.6)" >
        
                <div class="flex justify-center items-center h-full">
                    <div class="text-white">
                        <h2 class="font-bold xl:text-7xl md:text-7xl sm:text-5xl mb-4">Explore a new world.</h2>
                        <h4 class="text-gray-400 font-semibold xl:text-xl  mb-6">no matther where in the world you want to go, we can help get your there.</h4>
                        <a
                        class="inline-block px-7 py-3 mb-1 border-2 border-gray-200 text-gray-200 font-medium text-sm leading-snug uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                        href="{{ route('tour.index') }}"
                        role="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        >Jelajah</a
                        >
                    </div>
                </div>
            </div>
        </div>          -->
        <!-- Jumbotron -->

        <!-- hero -->
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font md:text-4xl xl:text-7xl text-5xl mb-8 font-bold text-gray-900">Explore A New <br class="hidden lg:inline-block">World.
                    </h1>
                    <p class="mb-8 lg:text-2xl text-xl text-gray-400">no matther where in the world you want to go, we can help get your there.</p>
                    <a href="#" class="flex justify-center">
                        <button class="inline-flex text-white bg-black border-0 py-2 px-6 hover:shadow-lg rounded-lg text-lg">Jelajah</button>
                    </a>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="images/home/background.png">
                </div>
            </div>
        </section>
        <!-- hero -->

        <!-- card 2 -->
        <section class="text-gray-600 font-inter">
            <div class="container px-24 pb-24 mx-auto">
                <div class="flex flex-wrap -m-4 text-center ">

                    <div class="p-4 md:w-1/3 sm:w-1/1 w-full ">
                        <div class=" px-4 py-6 rounded-lg shadow bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 h-36 inline-block" width="1em" height="1em" viewBox="0 0 24 24"><path fill="black" d="M15 16h3q.425 0 .712-.288Q19 15.425 19 15V9q0-.425-.288-.713Q18.425 8 18 8h-3q-.425 0-.712.287Q14 8.575 14 9v6q0 .425.288.712q.287.288.712.288Zm1-2v-4h1v4Zm-7 2h3q.425 0 .713-.288Q13 15.425 13 15V9q0-.425-.287-.713Q12.425 8 12 8H9q-.425 0-.712.287Q8 8.575 8 9v6q0 .425.288.712Q8.575 16 9 16Zm1-2v-4h1v4Zm-5 2h2V8H5Zm-3 4V4h20v16Z"/></svg>
                        <h2 class="title-font font-semibold text-xl mb-3 text-gray-900">Harga Tour Kompetitif</h2>
                            <p class="leading-relaxed text-gray-400">Lorem Ipsum is simply dummy text of 
                                the printing and typesetting.</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 sm:w-1/1 w-full ">
                        <div class=" px-4 py-6 rounded-lg shadow bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 h-36 inline-block" width="1em" height="1em" viewBox="0 0 24 24"><path fill="black" d="M12 20c-4.4 0-8-3.6-8-8s3.6-8 8-8s8 3.6 8 8s-3.6 8-8 8m0-18C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m-1 12h2v3h3v-5h2l-6-5l-6 5h2v5h3v-3"/></svg>
                            <h2 class="title-font font-semibold text-xl mb-3 text-gray-900">Agen Resmi</h2>
                            <p class="leading-relaxed text-gray-400">Lorem Ipsum is simply dummy text of 
                                the printing and typesetting.</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 sm:w-1/1 w-full ">
                        <div class=" px-4 py-6 rounded-lg shadow bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 h-36 inline-block" width="1em" height="1em" viewBox="0 0 16 16"><path fill="black" d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59c-.125.36-.479 1.013-1.04 1.639c-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545c1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484c.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464c.201-.263.38-.578.488-.901c.11-.33.172-.762.004-1.149c.069-.13.12-.269.159-.403c.077-.27.113-.568.113-.857c0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362a1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272c-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05a9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164c-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868c-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65c1.095-.3 1.977-.996 2.614-1.708c.635-.71 1.064-1.475 1.238-1.978c.243-.7.407-1.768.482-2.85c.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725a.5.5 0 0 0 .595.644l.003-.001l.014-.003l.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164c.175.058.45.3.57.65c.107.308.087.67-.266 1.022l-.353.353l.353.354c.043.043.105.141.154.315c.048.167.075.37.075.581c0 .212-.027.414-.075.582c-.05.174-.111.272-.154.315l-.353.353l.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353l.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/></svg>
                            <h2 class="title-font font-semibold text-xl mb-3 text-gray-900">Terpercaya</h2>
                            <p class="leading-relaxed text-gray-400">Lorem Ipsum is simply dummy text of 
                                the printing and typesetting.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class=""></div>
        </section>
        <!-- card 2 -->

        <!-- xxxx -->
        <!-- <section class="text-gray-600 body-font">
            <div class="container px-24 pt-10 pb-16 mx-auto">
            <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-semibold text-gray-900">PAKET TOUR INDONESIA</h1>
                            <p class="mb-4 leading-relaxed  text-gray-400">TOUR DOMESTIK</p>
                        </div>
                    </div>
                <div class="flex flex-wrap -m-2 mx-auto">
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="images/background/bali.jpg">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                        <div class="h-full flex items-center bg-white p-4 rounded-lg">
                            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            <div class="flex-grow">
                                <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                                <p class="text-gray-500">UI Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- xxxx -->

        <!-- Card -->
        <section class="font-inter" >
            <div class="container px-24 pb-24 mx-auto">
                <div class="flex flex-wrap w-full mb-10">
                    <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                        <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-semibold text-gray-900">PAKET TOUR INDONESIA</h1>
                            <p class="mb-4 leading-relaxed  text-gray-400">TOUR DOMESTIK</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-4 font-inter">
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <span class="text-lg font-bold text-yellow-600 ">IDR 1.000.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <span class="text-lg font-bold text-yellow-600 ">IDR 1.000.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <span class="text-lg font-bold text-yellow-600 ">IDR 1.000.000</span>
                                </div>
                            </div>
                        </div>
                        <div class="xl:w-1/4 md:w-1/2 sm:w-1/1 p-4 mx-auto">                           
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{ route('detail-tour.index') }}">
                                    <div class="relative overflow-hidden bg-no-repeat bg-cover">
                                        <img class=" rounded w-full object-cover hover:scale-110 transition duration-300 ease-in-out  object-center  " src="images/background/paket.jpg" alt="content">
                                    </div>
                                </a>
                                <div class="p-5">
                                    <a href="{{ route('detail-tour.index') }}">
                                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 hover:text-gray-400 dark:text-white">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h5>
                                    </a>
                                    <p class="flex items-center text-gray-600 mb-2">
                                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center text-black  flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M14.55 16.55L11 13V8h2v4.175l2.95 2.95ZM11 6V4h2v2Zm7 7v-2h2v2Zm-7 7v-2h2v2Zm-7-7v-2h2v2Zm8 9q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Zm0-2q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4Q8.65 4 6.325 6.325Q4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
                                        </span>4 Hari - 3 Malam
                                    </p>
                                    <p class="mb-2 font-normal text-gray-400 dark:text-gray-400">Start From</p>
                                    <span class="text-lg font-bold text-yellow-600 ">IDR 1.000.000</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a href ="{{ route('tour.index') }}" class="flex mx-auto mt-10 text-gray-900 bg-transparent border border-gray-900 py-2 px-8 focus:outline-none hover:text-white hover:bg-gray-900 rounded-2xl text-lg">Jelajah Lainnya</a>
                </div>
            </div>
        </section>
        <!-- Card -->

    </body>
</html>
@endsection
