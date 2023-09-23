<?php

namespace App\Http\Controllers;

use App\Models\Seeorder;
use App\Models\Tema;

use Illuminate\Http\Request;

class SeeorderController extends Controller
{
    public function index()
    {
        return view('feature/seeorder');
    }

    public function show_seeorder1()
    {
        return view('posts/show1');
    }

    public function delete_seeorder1(Request $request, $id)
    {
        $seeorders1 = Tema::find($id);

        if ($seeorders1) {
            $seeorders1->delete();

            return redirect()->route('orders')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('orders')->with('error', 'Order not found.');
        }
    }
}
