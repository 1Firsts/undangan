<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'data_link'; // Specify the table name

    protected $fillable = ['link', 'title']; 
}
