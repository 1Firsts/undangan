<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        return view('vcoba.index');
    }
}
