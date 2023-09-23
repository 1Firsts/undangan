<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'data_undangan'; // Specify the table name

    protected $fillable = [
        'nama_lengkap', 
        'nama_panggilan',
        'foto',
        'media_sosial',
        'hari_tgl',
        'waktu',
        'lokasi',
        'tema_pernikahan',
        'link_undangan',
        'tema_category'
    ]; 
}
