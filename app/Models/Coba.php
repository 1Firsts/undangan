<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    protected $table = 'undangans'; // Specify the table name

    protected $fillable = ['judul', 'deskripsi', 'quote', 'file']; 

}
