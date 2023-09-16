<?php

namespace App\Http\Controllers;

use App\Models\Create;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {
        return view('feature/create.index');
    }
}
