<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    use HasFactory;
    protected $table = 'tour';
    protected $fillable = [
        'image',
        'namaagen', 
        'judul', 
        'durasi', 
        'highlight', 
        'harga',
        'tanggalberangkat',
        'tanggalberakhir',
        'kuota',
        'description',
    ];
}
