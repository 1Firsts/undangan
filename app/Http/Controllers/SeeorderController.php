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

    // Seeorder 11
    public function seeorder11()
    {
        $seeorders11 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 11')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder11', [
            'seeorders11' => $seeorders11,
        ]);
    }

    public function show_seeorder11($id)
    {
        $seeorders11 = Tema::find($id);
        
        return view('posts.show11', compact('seeorders11'));
    }

    public function delete_seeorder11(Request $request, $id)
    {
        $seeorders11 = Tema::find($id);

        if ($seeorders11) {
            $seeorders11->delete();

            return redirect()->route('feature.seeorder.seeorder11')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder11')->with('error', 'Order not found.');
        }
    }

    // Seeorder 12
    public function seeorder12()
    {
        $seeorders12 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 12')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder12', [
            'seeorders12' => $seeorders12,
        ]);
    }

    public function show_seeorder12($id)
    {
        $seeorders12 = Tema::find($id);
        
        return view('posts.show12', compact('seeorders12'));
    }

    public function delete_seeorder12(Request $request, $id)
    {
        $seeorders12 = Tema::find($id);

        if ($seeorders12) {
            $seeorders12->delete();

            return redirect()->route('feature.seeorder.seeorder12')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder12')->with('error', 'Order not found.');
        }
    }

    // Seeorder 13
    public function seeorder13()
    {
        $seeorders13 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 13')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder13', [
            'seeorders13' => $seeorders13,
        ]);
    }

    public function show_seeorder13($id)
    {
        $seeorders13 = Tema::find($id);
        
        return view('posts.show13', compact('seeorders13'));
    }

    public function delete_seeorder13(Request $request, $id)
    {
        $seeorders13 = Tema::find($id);

        if ($seeorders13) {
            $seeorders13->delete();

            return redirect()->route('feature.seeorder.seeorder13')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder13')->with('error', 'Order not found.');
        }
    }

    // Seeorder 14
    public function seeorder14()
    {
        $seeorders14 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 14')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder14', [
            'seeorders14' => $seeorders14,
        ]);
    }

    public function show_seeorder14($id)
    {
        $seeorders14 = Tema::find($id);
        
        return view('posts.show14', compact('seeorders14'));
    }

    public function delete_seeorder14(Request $request, $id)
    {
        $seeorders14 = Tema::find($id);

        if ($seeorders14) {
            $seeorders14->delete();

            return redirect()->route('feature.seeorder.seeorder14')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder14')->with('error', 'Order not found.');
        }
    }

    // Seeorder 15
    public function seeorder15()
    {
        $seeorders15 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 15')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder15', [
            'seeorders15' => $seeorders15,
        ]);
    }

    public function show_seeorder15($id)
    {
        $seeorders15 = Tema::find($id);
        
        return view('posts.show15', compact('seeorders15'));
    }

    public function delete_seeorder15(Request $request, $id)
    {
        $seeorders15 = Tema::find($id);

        if ($seeorders15) {
            $seeorders15->delete();

            return redirect()->route('feature.seeorder.seeorder15')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder15')->with('error', 'Order not found.');
        }
    }

    // Seeorder 16
    public function seeorder16()
    {
        $seeorders16 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 16')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder16', [
            'seeorders16' => $seeorders16,
        ]);
    }

    public function show_seeorder16($id)
    {
        $seeorders16 = Tema::find($id);
        
        return view('posts.show16', compact('seeorders16'));
    }

    public function delete_seeorder16(Request $request, $id)
    {
        $seeorders16 = Tema::find($id);

        if ($seeorders16) {
            $seeorders16->delete();

            return redirect()->route('feature.seeorder.seeorder16')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder16')->with('error', 'Order not found.');
        }
    }

    // Seeorder 17
    public function seeorder17()
    {
        $seeorders17 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 17')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder17', [
            'seeorders17' => $seeorders17,
        ]);
    }

    public function show_seeorder17($id)
    {
        $seeorders17 = Tema::find($id);
        
        return view('posts.show17', compact('seeorders17'));
    }

    public function delete_seeorder17(Request $request, $id)
    {
        $seeorders17 = Tema::find($id);

        if ($seeorders17) {
            $seeorders17->delete();

            return redirect()->route('feature.seeorder.seeorder17')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder17')->with('error', 'Order not found.');
        }
    }

    // Seeorder 18
    public function seeorder18()
    {
        $seeorders18 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 18')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder18', [
            'seeorders18' => $seeorders18,
        ]);
    }

    public function show_seeorder18($id)
    {
        $seeorders18 = Tema::find($id);
        
        return view('posts.show18', compact('seeorders18'));
    }

    public function delete_seeorder18(Request $request, $id)
    {
        $seeorders18 = Tema::find($id);

        if ($seeorders18) {
            $seeorders18->delete();

            return redirect()->route('feature.seeorder.seeorder18')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder18')->with('error', 'Order not found.');
        }
    }

    // Seeorder 19
    public function seeorder19()
    {
        $seeorders19 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 19')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder19', [
            'seeorders19' => $seeorders19,
        ]);
    }

    public function show_seeorder19($id)
    {
        $seeorders19 = Tema::find($id);
        
        return view('posts.show19', compact('seeorders19'));
    }

    public function delete_seeorder19(Request $request, $id)
    {
        $seeorders19 = Tema::find($id);

        if ($seeorders19) {
            $seeorders19->delete();

            return redirect()->route('feature.seeorder.seeorder19')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder19')->with('error', 'Order not found.');
        }
    }

    // Seeorder 20
    public function seeorder20()
    {
        $seeorders20 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 20')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder20', [
            'seeorders20' => $seeorders20,
        ]);
    }

    public function show_seeorder20($id)
    {
        $seeorders20 = Tema::find($id);
        
        return view('posts.show20', compact('seeorders20'));
    }

    public function delete_seeorder20(Request $request, $id)
    {
        $seeorders20 = Tema::find($id);

        if ($seeorders20) {
            $seeorders20->delete();

            return redirect()->route('feature.seeorder.seeorder20')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder20')->with('error', 'Order not found.');
        }
    }

    // Seeorder 21
    public function seeorder21()
    {
        $seeorders21 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 21')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder21', [
            'seeorders21' => $seeorders21,
        ]);
    }

    public function show_seeorder21($id)
    {
        $seeorders21 = Tema::find($id);
        
        return view('posts.show21', compact('seeorders21'));
    }

    public function delete_seeorder21(Request $request, $id)
    {
        $seeorders21 = Tema::find($id);

        if ($seeorders21) {
            $seeorders21->delete();

            return redirect()->route('feature.seeorder.seeorder21')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder21')->with('error', 'Order not found.');
        }
    }

    // Seeorder 22
    public function seeorder22()
    {
        $seeorders22 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 22')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder22', [
            'seeorders22' => $seeorders22,
        ]);
    }

    public function show_seeorder22($id)
    {
        $seeorders22 = Tema::find($id);
        
        return view('posts.show22', compact('seeorders22'));
    }

    public function delete_seeorder22(Request $request, $id)
    {
        $seeorders22 = Tema::find($id);

        if ($seeorders22) {
            $seeorders22->delete();

            return redirect()->route('feature.seeorder.seeorder22')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder22')->with('error', 'Order not found.');
        }
    }

    // Seeorder 23
    public function seeorder23()
    {
        $seeorders23 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 23')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder23', [
            'seeorders23' => $seeorders23,
        ]);
    }

    public function show_seeorder23($id)
    {
        $seeorders23 = Tema::find($id);
        
        return view('posts.show23', compact('seeorders23'));
    }

    public function delete_seeorder23(Request $request, $id)
    {
        $seeorders23 = Tema::find($id);

        if ($seeorders23) {
            $seeorders23->delete();

            return redirect()->route('feature.seeorder.seeorder23')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder23')->with('error', 'Order not found.');
        }
    }

    // Seeorder 24
    public function seeorder24()
    {
        $seeorders24 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 24')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder24', [
            'seeorders24' => $seeorders24,
        ]);
    }

    public function show_seeorder24($id)
    {
        $seeorders24 = Tema::find($id);
        
        return view('posts.show24', compact('seeorders24'));
    }

    public function delete_seeorder24(Request $request, $id)
    {
        $seeorders24 = Tema::find($id);

        if ($seeorders24) {
            $seeorders24->delete();

            return redirect()->route('feature.seeorder.seeorder24')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder24')->with('error', 'Order not found.');
        }
    }

    // Seeorder 25
    public function seeorder25()
    {
        $seeorders25 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 25')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder25', [
            'seeorders25' => $seeorders25,
        ]);
    }

    public function show_seeorder25($id)
    {
        $seeorders25 = Tema::find($id);
        
        return view('posts.show25', compact('seeorders25'));
    }

    public function delete_seeorder25(Request $request, $id)
    {
        $seeorders25 = Tema::find($id);

        if ($seeorders25) {
            $seeorders25->delete();

            return redirect()->route('feature.seeorder.seeorder25')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder25')->with('error', 'Order not found.');
        }
    }

    // Seeorder 26
    public function seeorder26()
    {
        $seeorders26 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 26')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder26', [
            'seeorders26' => $seeorders26,
        ]);
    }

    public function show_seeorder26($id)
    {
        $seeorders26 = Tema::find($id);
        
        return view('posts.show26', compact('seeorders26'));
    }

    public function delete_seeorder26(Request $request, $id)
    {
        $seeorders26 = Tema::find($id);

        if ($seeorders26) {
            $seeorders26->delete();

            return redirect()->route('feature.seeorder.seeorder26')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder26')->with('error', 'Order not found.');
        }
    }

    // Seeorder 27
    public function seeorder27()
    {
        $seeorders27 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 27')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder27', [
            'seeorders27' => $seeorders27,
        ]);
    }

    public function show_seeorder27($id)
    {
        $seeorders27 = Tema::find($id);
        
        return view('posts.show27', compact('seeorders27'));
    }

    public function delete_seeorder27(Request $request, $id)
    {
        $seeorders27 = Tema::find($id);

        if ($seeorders27) {
            $seeorders27->delete();

            return redirect()->route('feature.seeorder.seeorder27')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder27')->with('error', 'Order not found.');
        }
    }

    // Seeorder 28
    public function seeorder28()
    {
        $seeorders28 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 28')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder28', [
            'seeorders28' => $seeorders28,
        ]);
    }

    public function show_seeorder28($id)
    {
        $seeorders28 = Tema::find($id);
        
        return view('posts.show28', compact('seeorders28'));
    }

    public function delete_seeorder28(Request $request, $id)
    {
        $seeorders28 = Tema::find($id);

        if ($seeorders28) {
            $seeorders28->delete();

            return redirect()->route('feature.seeorder.seeorder28')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder28')->with('error', 'Order not found.');
        }
    }

    // Seeorder 29
    public function seeorder29()
    {
        $seeorders29 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 29')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder29', [
            'seeorders29' => $seeorders29,
        ]);
    }

    public function show_seeorder29($id)
    {
        $seeorders29 = Tema::find($id);
        
        return view('posts.show29', compact('seeorders29'));
    }

    public function delete_seeorder29(Request $request, $id)
    {
        $seeorders29 = Tema::find($id);

        if ($seeorders29) {
            $seeorders29->delete();

            return redirect()->route('feature.seeorder.seeorder29')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder29')->with('error', 'Order not found.');
        }
    }

    // Seeorder 30
    public function seeorder30()
    {
        $seeorders30 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 30')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder30', [
            'seeorders30' => $seeorders30,
        ]);
    }

    public function show_seeorder30($id)
    {
        $seeorders30 = Tema::find($id);
        
        return view('posts.show30', compact('seeorders30'));
    }

    public function delete_seeorder30(Request $request, $id)
    {
        $seeorders30 = Tema::find($id);

        if ($seeorders30) {
            $seeorders30->delete();

            return redirect()->route('feature.seeorder.seeorder30')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder30')->with('error', 'Order not found.');
        }
    }

    // Seeorder 31
    public function seeorder31()
    {
        $seeorders31 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 31')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder31', [
            'seeorders31' => $seeorders31,
        ]);
    }

    public function show_seeorder31($id)
    {
        $seeorders31 = Tema::find($id);
        
        return view('posts.show31', compact('seeorders31'));
    }

    public function delete_seeorder31(Request $request, $id)
    {
        $seeorders31 = Tema::find($id);

        if ($seeorders31) {
            $seeorders31->delete();

            return redirect()->route('feature.seeorder.seeorder31')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder31')->with('error', 'Order not found.');
        }
    }

    // Seeorder 32
    public function seeorder32()
    {
        $seeorders32 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 32')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder32', [
            'seeorders32' => $seeorders32,
        ]);
    }

    public function show_seeorder32($id)
    {
        $seeorders32 = Tema::find($id);
        
        return view('posts.show32', compact('seeorders32'));
    }

    public function delete_seeorder32(Request $request, $id)
    {
        $seeorders32 = Tema::find($id);

        if ($seeorders32) {
            $seeorders32->delete();

            return redirect()->route('feature.seeorder.seeorder32')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder32')->with('error', 'Order not found.');
        }
    }

    // Seeorder 33
    public function seeorder33()
    {
        $seeorders33 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 33')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder33', [
            'seeorders33' => $seeorders33,
        ]);
    }

    public function show_seeorder33($id)
    {
        $seeorders33 = Tema::find($id);
        
        return view('posts.show33', compact('seeorders33'));
    }

    public function delete_seeorder33(Request $request, $id)
    {
        $seeorders33 = Tema::find($id);

        if ($seeorders33) {
            $seeorders33->delete();

            return redirect()->route('feature.seeorder.seeorder33')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder33')->with('error', 'Order not found.');
        }
    }

    // Seeorder 34
    public function seeorder34()
    {
        $seeorders34 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 34')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder34', [
            'seeorders34' => $seeorders34,
        ]);
    }

    public function show_seeorder34($id)
    {
        $seeorders34 = Tema::find($id);
        
        return view('posts.show34', compact('seeorders34'));
    }

    public function delete_seeorder34(Request $request, $id)
    {
        $seeorders34 = Tema::find($id);

        if ($seeorders34) {
            $seeorders34->delete();

            return redirect()->route('feature.seeorder.seeorder34')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder34')->with('error', 'Order not found.');
        }
    }

    // Seeorder 35
    public function seeorder35()
    {
        $seeorders35 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 35')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder35', [
            'seeorders35' => $seeorders35,
        ]);
    }

    public function show_seeorder35($id)
    {
        $seeorders35 = Tema::find($id);
        
        return view('posts.show35', compact('seeorders35'));
    }

    public function delete_seeorder35(Request $request, $id)
    {
        $seeorders35 = Tema::find($id);

        if ($seeorders35) {
            $seeorders35->delete();

            return redirect()->route('feature.seeorder.seeorder35')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder35')->with('error', 'Order not found.');
        }
    }

    // Seeorder 36
    public function seeorder36()
    {
        $seeorders36 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 36')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder36', [
            'seeorders36' => $seeorders36,
        ]);
    }

    public function show_seeorder36($id)
    {
        $seeorders36 = Tema::find($id);
        
        return view('posts.show36', compact('seeorders36'));
    }

    public function delete_seeorder36(Request $request, $id)
    {
        $seeorders36 = Tema::find($id);

        if ($seeorders36) {
            $seeorders36->delete();

            return redirect()->route('feature.seeorder.seeorder36')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder36')->with('error', 'Order not found.');
        }
    }

    // Seeorder 37
    public function seeorder37()
    {
        $seeorders37 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 37')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder37', [
            'seeorders37' => $seeorders37,
        ]);
    }

    public function show_seeorder37($id)
    {
        $seeorders37 = Tema::find($id);
        
        return view('posts.show37', compact('seeorders37'));
    }

    public function delete_seeorder37(Request $request, $id)
    {
        $seeorders37 = Tema::find($id);

        if ($seeorders37) {
            $seeorders37->delete();

            return redirect()->route('feature.seeorder.seeorder37')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder37')->with('error', 'Order not found.');
        }
    }

    // Seeorder 38
    public function seeorder38()
    {
        $seeorders38 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 38')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder38', [
            'seeorders38' => $seeorders38,
        ]);
    }

    public function show_seeorder38($id)
    {
        $seeorders38 = Tema::find($id);
        
        return view('posts.show38', compact('seeorders38'));
    }

    public function delete_seeorder38(Request $request, $id)
    {
        $seeorders38 = Tema::find($id);

        if ($seeorders38) {
            $seeorders38->delete();

            return redirect()->route('feature.seeorder.seeorder38')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder38')->with('error', 'Order not found.');
        }
    }

    // Seeorder 39
    public function seeorder39()
    {
        $seeorders39 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 39')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder39', [
            'seeorders39' => $seeorders39,
        ]);
    }

    public function show_seeorder39($id)
    {
        $seeorders39 = Tema::find($id);
        
        return view('posts.show39', compact('seeorders39'));
    }

    public function delete_seeorder39(Request $request, $id)
    {
        $seeorders39 = Tema::find($id);

        if ($seeorders39) {
            $seeorders39->delete();

            return redirect()->route('feature.seeorder.seeorder39')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder39')->with('error', 'Order not found.');
        }
    }

    // Seeorder 40
    public function seeorder40()
    {
        $seeorders40 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 40')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder40', [
            'seeorders40' => $seeorders40,
        ]);
    }

    public function show_seeorder40($id)
    {
        $seeorders40 = Tema::find($id);
        
        return view('posts.show40', compact('seeorders40'));
    }

    public function delete_seeorder40(Request $request, $id)
    {
        $seeorders40 = Tema::find($id);

        if ($seeorders40) {
            $seeorders40->delete();

            return redirect()->route('feature.seeorder.seeorder40')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder40')->with('error', 'Order not found.');
        }
    }

    // Seeorder 41
    public function seeorder41()
    {
        $seeorders41 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 41')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder41', [
            'seeorders41' => $seeorders41,
        ]);
    }

    public function show_seeorder41($id)
    {
        $seeorders41 = Tema::find($id);
        
        return view('posts.show41', compact('seeorders41'));
    }

    public function delete_seeorder41(Request $request, $id)
    {
        $seeorders41 = Tema::find($id);

        if ($seeorders41) {
            $seeorders41->delete();

            return redirect()->route('feature.seeorder.seeorder41')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder41')->with('error', 'Order not found.');
        }
    }

    // Seeorder 42
    public function seeorder42()
    {
        $seeorders42 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 42')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder42', [
            'seeorders42' => $seeorders42,
        ]);
    }

    public function show_seeorder42($id)
    {
        $seeorders42 = Tema::find($id);
        
        return view('posts.show42', compact('seeorders42'));
    }

    public function delete_seeorder42(Request $request, $id)
    {
        $seeorders42 = Tema::find($id);

        if ($seeorders42) {
            $seeorders42->delete();

            return redirect()->route('feature.seeorder.seeorder42')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder42')->with('error', 'Order not found.');
        }
    }

    // Seeorder 43
    public function seeorder43()
    {
        $seeorders43 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 43')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder43', [
            'seeorders43' => $seeorders43,
        ]);
    }

    public function show_seeorder43($id)
    {
        $seeorders43 = Tema::find($id);
        
        return view('posts.show43', compact('seeorders43'));
    }

    public function delete_seeorder43(Request $request, $id)
    {
        $seeorders43 = Tema::find($id);

        if ($seeorders43) {
            $seeorders43->delete();

            return redirect()->route('feature.seeorder.seeorder43')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder43')->with('error', 'Order not found.');
        }
    }

    // Seeorder 44
    public function seeorder44()
    {
        $seeorders44 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 44')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder44', [
            'seeorders44' => $seeorders44,
        ]);
    }

    public function show_seeorder44($id)
    {
        $seeorders44 = Tema::find($id);
        
        return view('posts.show44', compact('seeorders44'));
    }

    public function delete_seeorder44(Request $request, $id)
    {
        $seeorders44 = Tema::find($id);

        if ($seeorders44) {
            $seeorders44->delete();

            return redirect()->route('feature.seeorder.seeorder44')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder44')->with('error', 'Order not found.');
        }
    }

    // Seeorder 45
    public function seeorder45()
    {
        $seeorders45 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 45')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder45', [
            'seeorders45' => $seeorders45,
        ]);
    }

    public function show_seeorder45($id)
    {
        $seeorders45 = Tema::find($id);
        
        return view('posts.show45', compact('seeorders45'));
    }

    public function delete_seeorder45(Request $request, $id)
    {
        $seeorders45 = Tema::find($id);

        if ($seeorders45) {
            $seeorders45->delete();

            return redirect()->route('feature.seeorder.seeorder45')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder45')->with('error', 'Order not found.');
        }
    }

    // Seeorder 46
    public function seeorder46()
    {
        $seeorders46 = DB::table('data_undangan')
            ->where('tema_category', 'Tema 46')
            ->get(); // Retrieve the data

        return view('feature.seeorder.seeorder46', [
            'seeorders46' => $seeorders46,
        ]);
    }

    public function show_seeorder46($id)
    {
        $seeorders46 = Tema::find($id);
        
        return view('posts.show46', compact('seeorders46'));
    }

    public function delete_seeorder46(Request $request, $id)
    {
        $seeorders46 = Tema::find($id);

        if ($seeorders46) {
            $seeorders46->delete();

            return redirect()->route('feature.seeorder.seeorder46')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('feature.seeorder.seeorder46')->with('error', 'Order not found.');
        }
    }
}
