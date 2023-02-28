<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ViewdatatourController extends Controller
{
    public function index()
    {   
        // mengambil data dari table pegawai
    	$tour = DB::table('tour')->simplepaginate(5);

        return view('dashboard.viewdatatour',['tour' => $tour]);
    }

    public function tambah()
    {
 
	// memanggil view tambah
	return view('dashboard.create-tour');
    }

    public function store(Request $request)
    {
        $validator = $request -> validate([
            'namaagen' => 'required',
            'judul' => 'required',
            'durasi' => 'required',
            'highlight' => 'required',
            'harga' => 'required',
            'tanggalberangkat' => 'required',
            'tanggalberakhir' => 'required',
            'kuota' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:2048,jpeg,png,jpg',  
        ], 
        [
            "namaagen.required" => "Please enter namaagen",
            "judul.required" => "Please enter judul",
            "durasi.required" => "Please enter durasi",
            "highlight.required" => "Please enter highlight",
            "harga.required" => "Please enter harga",
            "tanggalberangkat.required" => "Please enter tanggalberangkat",
            "tanggalberakhir.required" => "Please enter tanggalberakhir",
            "kuota.required" => "Please enter kuota",
            "description.required" => "Please enter description",
        ]);


        $tour = new Tour;
        $tour->namaagen = $request->input('namaagen');
        $tour->judul= $request->input('judul');
        $tour->durasi= $request->input('durasi');
        $tour->highlight= $request->input('highlight');
        $tour->harga= $request->input('harga');
        $tour->tanggalberangkat= $request->input('tanggalberangkat');
        $tour->tanggalberakhir= $request->input('tanggalberakhir');
        $tour->kuota= $request->input('kuota');
        $tour->description= $request->input('description');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = $request->judul.'_'.now()->timestamp.'.'.$extention;
            $file->storeAs('image/tour/',$filename);
            $tour->image = $filename;
        }
       
        $tour->save();

        return redirect('/viewdatatour');
    }

    // method untuk edit data tour
    public function edit($id)
    {

        $tour =  Tour:: find($id);

        return view('dashboard.edit-tour', [
            'method'=> "PUT",
            'action'=> "/viewdatatour/edit/{id}'",
            'tour'=> $tour
        ]);
        
    }

        // update data tour
        public function update(Request $request,$id)
        {
            $tour = Tour::find($id); 
                   
            $validator = $request -> validate([
                'namaagen' => 'required',
                'judul' => 'required',
                'durasi' => 'required',
                'highlight' => 'required',
                'harga' => 'required',
                'tanggalberangkat' => 'required',
                'tanggalberakhir' => 'required',
                'kuota' => 'required',
                'description' => 'required',
                'image' => 'image|file|max:2048,jpeg,png,jpg',  
            ], 
            [
                "namaagen.required" => "Please enter namaagen",
                "judul.required" => "Please enter judul",
                "durasi.required" => "Please enter durasi",
                "highlight.required" => "Please enter highlight",
                "harga.required" => "Please enter harga",
                "tanggalberangkat.required" => "Please enter tanggalberangkat",
                "tanggalberakhir.required" => "Please enter tanggalberakhir",
                "kuota.required" => "Please enter kuota",
                "description.required" => "Please enter description",
            ]);
    
            if($request->hasFile('image')){
                $request->validate([
                    'image' => 'image|file|max:2048,jpeg,png,jpg',
                  ]);
                Storage::delete($tour->image);
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = $request->judul.'_'.now()->timestamp.'.'.$extention;
                $file->storeAs('image/tour/',$filename);
                $tour->image = $filename;
            }
    
    
            $tour->namaagen = $request->input('namaagen');
            $tour->judul= $request->input('judul');
            $tour->durasi= $request->input('durasi');
            $tour->highlight= $request->input('highlight');
            $tour->harga= $request->input('harga');
            $tour->tanggalberangkat= $request->input('tanggalberangkat');
            $tour->tanggalberakhir= $request->input('tanggalberakhir');
            $tour->kuota= $request->input('kuota');
            $tour->description= $request->input('description');
            $tour->save();

            return redirect('viewdatatour');
            
        }

        public function hapus($id)
    {
        $tour = Tour::find($id);
        $path = 'storage/image/tour/'.$tour->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $tour->delete();
        
        return back() -> with('toast_info', "Data berhasil dihapus!");
    }

    public function show($id){

        return $id;
    }
    
}
