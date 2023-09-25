<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        // Chart laporan
        $selesaiCount = DB::table('data_order')->where('status', 'Selesai')->count();
        $dikerjakanCount = DB::table('data_order')->where('status', 'Dikerjakan')->count();
        // @dd($selesaiCount, $dikerjakanCount);

        $orders = Order::all();;
        
        return view('feature/order', [
            'orders' => $orders,

            // Chart Laporan
            'selesaiCount' => $selesaiCount,
            'dikerjakanCount' => $dikerjakanCount,
        ]);
    }

    public function create_order()
    {
        return view('feature/create-order');
    }

    public function store_order(Request $request)
    {
        // Validate the request data.
        $request->validate([
            'customer' => 'required|string',
            'category' => 'required|string',
            'jumlah' => 'required|integer',
            'status' => 'required|string',
        ]);

        // Create a new order model.
        $order = new Order();
        $order->customer = $request->input('customer');
        $order->category = $request->input('category');
        $order->jumlah = $request->input('jumlah');
        $order->status = $request->input('status');

        // Save the order to the database.
        $order->save();

        // Redirect to the order list page.
        return redirect()->route('orders')->with('success', 'Order created successfully.');
    }

    public function delete_order(Request $request, $id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->delete();

            return redirect()->route('orders')->with('success', 'Order deleted successfully.');
        } else {
            return redirect()->route('orders')->with('error', 'Order not found.');
        }
    }
}
