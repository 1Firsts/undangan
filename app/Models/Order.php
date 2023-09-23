<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'data_order';

    protected $fillable = ['customer', 'category', 'jumlah', 'status'];
}
