<?php

namespace App\Http\Controllers;

use App\Models\Seeorder;
use Illuminate\Http\Request;

class SeeorderController extends Controller
{
    public function index()
    {
        return view('feature/seeorder.index');
    }
}
