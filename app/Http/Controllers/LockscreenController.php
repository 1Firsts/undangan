<?php

namespace App\Http\Controllers;

use App\Models\Lockscreen;
use Illuminate\Http\Request;

class LockscreenController extends Controller
{
    public function index()
    {
        return view('feature/lockscreen.index');
    }
}
