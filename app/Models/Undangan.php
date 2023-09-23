<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $table = 'undangans'; // Specify the table name

    protected $fillable = ['judul', 'deskripsi', 'quote', 'file']; 

    // Define any relationships here if needed
}
