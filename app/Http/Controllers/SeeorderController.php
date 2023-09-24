<?php

namespace App\Http\Controllers;

use App\Models\Seeorder;
use App\Models\Tema;

use Illuminate\Http\Request;

class SeeorderController extends Controller
{
    public function mseeorder1()
    {
        $seeorders1 = Tema::latest()->paginate(5);
                                    
        return view('feature.seeorder.seeorder1', compact('seeorders1'));
    }

    public function show_seeorder1($id)
    {
        $seeorders1 = Tema::find($id);
        
        return view('posts.show1', compact('seeorders1'));
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
