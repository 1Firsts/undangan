<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Tema;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TableController extends Controller
{
    public function index()
    {
        // dd('Inside the index method'); // Add this line
        $tables = Tema::all();
        
        return view('feature.table', [
            'tables' => $tables,
        ]);
    }
}
