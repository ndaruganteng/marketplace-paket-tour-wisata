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
<body class="bg-gray-100">
    
    <section class="font-inter" >   
        <div class="container px-24 pb-24 pt-16 mx-auto">
            <div class="flex flex-wrap w-full mb-10">
                <div class="container mx-auto flex flex-col px-5 ustify-center items-center">
                    <div class="w-full md:w-2/3 flex flex-col mb-10 items-center text-center">
                        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-semibold text-gray-900">PAKET TOUR INDONESIA</h1>
                        <p class="mb-4 leading-relaxed  text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, dolore at animi ad inventore cupiditate.</p>
                    </div>
                </div>
                <div class="flex flex-wrap my-3-m-4 font-inter">
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
                <div class="flex flex-wrap my-3-m-4 font-inter">
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
                <div class="flex flex-wrap my-3-m-4 font-inter">
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
                <div class="flex flex-wrap my-3-m-4 font-inter">
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
                
            </div>
        </div>
    </section>
 

</body>
</html>
@endsection
