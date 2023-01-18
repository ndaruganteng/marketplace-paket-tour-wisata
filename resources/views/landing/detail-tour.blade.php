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
  <body class="bg-white">


    <!-- <section class="text-gray-600 body-font overflow-hidden">
      <div class="container px-5 py-16 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
          <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="images/background/paket.jpg">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">Wisata Alam</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h1>
            <p class="leading-relaxed my-4"> <span class="font-bold">Highlight </span> : Sailling Pulau Kelor, Pulau Manjarite, Pulau Kalong, Explore pulau Padar, Snorkelling Pulau Sebayur</p>
            <span class="text-2xl font-bold text-yellow-600 ">IDR 8.250.000</span>
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                  <tbody>
                      <tr class="  dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class=" py-4 font-medium text-gray-900 text-lg dark:text-white">
                              Kuota
                          </th>
                          <td class=" py-4 text-lg">
                              45 orang
                          </td>
                      </tr>
                  </tbody>
              </table>
            </div>
          <div class="relative mb-4">
            <input type="number" id="visitors" placeholder="jumlah orang" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
          </div>           
            <div class="flex mt-5">
              <button class="text-white bg-black border-0 py-2 px-8 focus:outline-none rounded text-lg">Pesan sekarang</button>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="text-gray-600 font-inter">
        <div class="container mx-auto flex px-24 py-10 items-center justify-center flex-col">
            <img class="lg:w-2/9 md:w-3/6 w-5/6 mb-12 object-cover object-center " alt="hero" src="images/background/paket.jpg">
        </div>
    </section> 

    <section class="text-gray-600 body-font">
      <div class="container px-24 pb-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 bg-white mt-6 lg:mt-0">
              <h1 class="text-gray-900 text-3xl title-font font-medium mb-2">Open Trip Tour Wisata Beautiful of Labuan Bajo - 4D3N</h1>
              <p class="leading-relaxed my-4"> <span class="font-bold">Highlight </span> : Sailling Pulau Kelor, Pulau Manjarite, Pulau Kalong, Explore pulau Padar, Snorkelling Pulau Sebayur</p>          
              <div class="mb-4 border-b border-white dark:border-gray-700">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                      <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Tour Price</button>
                      </li>
                      <li class="mr-2" role="presentation">
                          <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Include & Exclude</button>
                      </li>
                  </ul>
              </div>
              <div id="myTabContent">
                  <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">                   
                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                          Harga Paket Tour :
                            <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Rp. 8.800.000 per pax</li>
                                <li>Harga berlaku untuk minimal 10 orang</li>
                            </ol>
                        </li>
                        <li>
                        Syarat & Ketentuan :
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Harga Berdasarkan peserta 10 orang dewasa</li>
                                <li>Pelunasan paling lambat 14 hari sebelum tanggal keberangkatan.</li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                  <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">
                        <li>
                          INCLUDE :
                            <ol class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Guide Lokal</li>
                                <li>Dokumentasi </li>
                                <li>Makan 3x</li>
                                <li>Menginap di Phinisi 3D 2N</li>

                            </ol>
                        </li>
                        <li>
                          EXCLUDE :
                            <ul class="pl-5 mt-2 space-y-1 list-decimal list-inside">
                                <li>Laundry & Minibar</li>
                            </ul>
                        </li>
                    </ul>
                  </div>
              </div>
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-white shadow rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
          <h2 class="text-gray-900 text-xl mx-auto font-bold title-font mb-5">-Booking-</h2>
          <div class="relative mb-4">
            <input type="number" id="visitors" placeholder="jumlah orang" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
          </div>         
          <div class="relative overflow-x-auto mb-4">
              <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                  <tbody>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Kuota
                          </th>
                          <td class="px-6 py-4">
                              45 orang
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Tersisa
                          </th>
                          <td class="px-6 py-4">
                              40 Orang Tersisa
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Sub Total
                          </th>
                          <td class="px-6 py-4">
                              1x 8.250.000
                          </td>
                      </tr>
                      <tr class=" border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              Total Bayar
                          </th>
                          <td class="px-6 py-4 font-bold text-yellow-700">
                              IDR 8.250.000
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <a href="{{ route('transaksi.index') }}" class="text-white bg-black border-0 py-2 px-8 focus:outline-none text-center rounded text-lg">Pesan sekarang</a>
        </div>
      </div>
    </section> 

    <section class="text-gray-600 body-font">
      <div class="container px-40 pb-10 mx-auto">
        <div class="flex flex-wrap -mx-4 -my-8">
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">DURATION :</h1>
                <p class="leading-relaxed mb-5">4 DAYS - 3 NIGHTS</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">KATEGORI</h1>
                <p class="leading-relaxed mb-5">Wisata Alam</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">TANGGAL BERANGKAT</h1>
                <p class="leading-relaxed mb-5">13 FEBRUARI 2023</p>
              </div>
            </div>
          </div>
          <div class="py-8 px-4 lg:w-1/4">
            <div class="h-full flex items-start">
              <div class="flex-grow pl-6">
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">TANGGAL BERAKHIR</h1>
                <p class="leading-relaxed mb-5">17 FEBRUARI 2023</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>  

  </body>
</html>
@endsection
