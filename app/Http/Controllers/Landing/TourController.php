<?php

namespace App\Http\Controllers\Landing;

use App\Models\tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TourController extends Controller
{
    // public function index()
    // {
    //     return view('landing.tour');
    // }


     public function index()
     {
         // mengambil data dari table pegawai
         $tour = DB::table('tour')->get();
  
         // mengirim data pegawai ke view index
         return view('landing.tour',['tour' => $tour]);
     }
}
