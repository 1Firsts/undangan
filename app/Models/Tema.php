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
        'foto_pasangan1',
        'foto_pasangan2',
        'foto_galeri1',
        'foto_galeri2',
        'foto_galeri3',
        'foto_galeri4',
        'foto_galeri5',
        'foto_galeri6',
        'foto_galeri7',
        'foto_galeri8',
        'foto_galeri9',
        'foto_galeri10',
        'media_sosial',
        'hari_tgl',
        'waktu',
        'lokasi',
        'tema_pernikahan',
        'link_undangan',
        'tema_category'
    ]; 
}
