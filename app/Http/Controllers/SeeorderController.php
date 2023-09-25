<?php

namespace App\Http\Controllers;

use App\Models\Seeorder;
use App\Models\Tema;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SeeorderController extends Controller
{
    // Seeorder 1
    public function seeorder1()
    {
        $seeorders1 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 1')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder1', [
            'seeorders1' => $seeorders1,
        ]);
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

            return redirect()->route('feature.seeorder.seeorder1')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder1')->with('error', 'Order not found.');
        }
    }

    // Seeorder 2
    public function seeorder2()
    {
        $seeorders2 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 2')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder2', [
            'seeorders2' => $seeorders2,
        ]);
    }

    public function show_seeorder2($id)
    {
        $seeorders2 = Tema::find($id);
        
        return view('posts.show2', compact('seeorders2'));
    }

    public function delete_seeorder2(Request $request, $id)
    {
        $seeorders2 = Tema::find($id);

        if ($seeorders2) {
            $seeorders2->delete();

            return redirect()->route('feature.seeorder.seeorder2')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder2')->with('error', 'Order not found.');
        }
    }

    // Seeorder 3
    public function seeorder3()
    {
        $seeorders3 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 3')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder3', [
            'seeorders3' => $seeorders3,
        ]);
    }

    public function show_seeorder3($id)
    {
        $seeorders3 = Tema::find($id);
        
        return view('posts.show3', compact('seeorders3'));
    }

    public function delete_seeorder3(Request $request, $id)
    {
        $seeorders3 = Tema::find($id);

        if ($seeorders3) {
            $seeorders3->delete();

            return redirect()->route('feature.seeorder.seeorder3')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder3')->with('error', 'Order not found.');
        }
    }

    // Seeorder 4
    public function seeorder4()
    {
        $seeorders4 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 4')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder4', [
            'seeorders4' => $seeorders4,
        ]);
    }

    public function show_seeorder4($id)
    {
        $seeorders4 = Tema::find($id);
        
        return view('posts.show4', compact('seeorders4'));
    }

    public function delete_seeorder4(Request $request, $id)
    {
        $seeorders4 = Tema::find($id);

        if ($seeorders4) {
            $seeorders4->delete();

            return redirect()->route('feature.seeorder.seeorder4')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder4')->with('error', 'Order not found.');
        }
    }

    // Seeorder 5
    public function seeorder5()
    {
        $seeorders5 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 5')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder5', [
            'seeorders5' => $seeorders5,
        ]);
    }

    public function show_seeorder5($id)
    {
        $seeorders5 = Tema::find($id);
        
        return view('posts.show5', compact('seeorders5'));
    }

    public function delete_seeorder5(Request $request, $id)
    {
        $seeorders5 = Tema::find($id);

        if ($seeorders5) {
            $seeorders5->delete();

            return redirect()->route('feature.seeorder.seeorder5')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder5')->with('error', 'Order not found.');
        }
    }

    // Seeorder 6
    public function seeorder6()
    {
        $seeorders6 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 6')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder6', [
            'seeorders6' => $seeorders6,
        ]);
    }

    public function show_seeorder6($id)
    {
        $seeorders6 = Tema::find($id);
        
        return view('posts.show6', compact('seeorders6'));
    }

    public function delete_seeorder6(Request $request, $id)
    {
        $seeorders6 = Tema::find($id);

        if ($seeorders6) {
            $seeorders6->delete();

            return redirect()->route('feature.seeorder.seeorder6')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder6')->with('error', 'Order not found.');
        }
    }

    // Seeorder 7
    public function seeorder7()
    {
        $seeorders7 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 7')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder7', [
            'seeorders7' => $seeorders7,
        ]);
    }

    public function show_seeorder7($id)
    {
        $seeorders7 = Tema::find($id);
        
        return view('posts.show7', compact('seeorders7'));
    }

    public function delete_seeorder7(Request $request, $id)
    {
        $seeorders7 = Tema::find($id);

        if ($seeorders7) {
            $seeorders7->delete();

            return redirect()->route('feature.seeorder.seeorder7')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder7')->with('error', 'Order not found.');
        }
    }

    // Seeorder 8
    public function seeorder8()
    {
        $seeorders8 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 8')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder8', [
            'seeorders8' => $seeorders8,
        ]);
    }

    public function show_seeorder8($id)
    {
        $seeorders8 = Tema::find($id);
        
        return view('posts.show8', compact('seeorders8'));
    }

    public function delete_seeorder8(Request $request, $id)
    {
        $seeorders8 = Tema::find($id);

        if ($seeorders8) {
            $seeorders8->delete();

            return redirect()->route('feature.seeorder.seeorder8')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder8')->with('error', 'Order not found.');
        }
    }

    // Seeorder 9
    public function seeorder9()
    {
        $seeorders9 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 9')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder9', [
            'seeorders9' => $seeorders9,
        ]);
    }

    public function show_seeorder9($id)
    {
        $seeorders9 = Tema::find($id);
        
        return view('posts.show9', compact('seeorders9'));
    }

    public function delete_seeorder9(Request $request, $id)
    {
        $seeorders9 = Tema::find($id);

        if ($seeorders9) {
            $seeorders9->delete();

            return redirect()->route('feature.seeorder.seeorder9')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder9')->with('error', 'Order not found.');
        }
    }

    // Seeorder 10
    public function seeorder10()
    {
        $seeorders10 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 10')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder10', [
            'seeorders10' => $seeorders10,
        ]);
    }

    public function show_seeorder10($id)
    {
        $seeorders10 = Tema::find($id);
        
        return view('posts.show10', compact('seeorders10'));
    }

    public function delete_seeorder10(Request $request, $id)
    {
        $seeorders10 = Tema::find($id);

        if ($seeorders10) {
            $seeorders10->delete();

            return redirect()->route('feature.seeorder.seeorder10')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder10')->with('error', 'Order not found.');
        }
    }
}
