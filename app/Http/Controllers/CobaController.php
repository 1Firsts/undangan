<?php

namespace App\Http\Controllers;

use App\Helpers\CountNewCustomersHelper;
use App\Helpers\CountSelesaiCustomersHelper;
use App\Helpers\CountDikerjakanCustomersHelper;
use App\Helpers\CountJumlahCustomersHelper;

use App\Models\Coba;
use App\Models\Order;
use App\Models\Link;
use App\Models\Undangan;

use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class CobaController extends Controller
{   
    public function updateLink(Request $request, Link $dataLink)
    {
        $dataLink->update($request->only(['link', 'title']));
        return view('feature/main-create')->with('success', 'Link updated successfully.');
    }
    
    public function store_theme(Request $request)
    {
        $imageManager = new ImageManager([
            'driver' => 'gd',
        ]);

        // Validate the request data
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'category' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules
        ]);

        // Resize and crop the uploaded image
        $image = $imageManager->make($request->file('file'))->resize(673, 517)->crop(673, 517);

        // Save the image to the `uploads` directory
        $imagePath = $request->file('file')->store('storage/uploads', 'public');

        // Create a new theme record in the database
        $coba = new Coba();
        $coba->judul = $request->input('judul');
        $coba->deskripsi = $request->input('deskripsi');
        $coba->category = $request->input('category');
        $coba->file = $imagePath;

        // Save the theme data to the database
        $coba->save();

        return view('feature/main-theme');
    }

    public function index()
    {
        // Chart laporan
        $selesaiCount = DB::table('data_order')->where('status', 'Selesai')->count();
        $dikerjakanCount = DB::table('data_order')->where('status', 'Dikerjakan')->count();
        // @dd($selesaiCount, $dikerjakanCount);

        // Progress Bar
        $newCustomerCount = CountNewCustomersHelper::countNewCustomersInLastMonth();
        $selesaiOrdersCount = CountSelesaiCustomersHelper::countSelesaiCustomers();
        $jumlahOrdersCount = CountJumlahCustomersHelper::countJumlahCustomers();
        $dikerjakanOrdersCount = CountDikerjakanCustomersHelper::countDikerjakanCustomers();

        $maxCount = 1000; // Replace with the maximum value for your progress bar

        $progressNewCustomer = ($newCustomerCount / $maxCount) * 100;
        $progressSelesaiOrders = ($selesaiOrdersCount / $maxCount) * 100;
        $progressJumlahOrders = ($jumlahOrdersCount / $maxCount) * 100;
        $progressDikerjakanOrders = ($dikerjakanOrdersCount / $maxCount) * 100;

        $orders = Order::latest()->paginate(5);

        return view('vcoba', [
            'orders' => $orders,

            // Chart Laporan
            'selesaiCount' => $selesaiCount,
            'dikerjakanCount' => $dikerjakanCount,
        
            // Progress Bar
            'newCustomerCount' => $newCustomerCount,
            'selesaiOrdersCount' => $selesaiOrdersCount,
            'jumlahOrdersCount' => $jumlahOrdersCount,
            'dikerjakanOrdersCount' => $dikerjakanOrdersCount,
            'progressNewCustomer' => $progressNewCustomer,
            'progressSelesaiOrders' => $progressSelesaiOrders,
            'progressJumlahOrders' => $progressJumlahOrders,
            'progressDikerjakanOrders' => $progressDikerjakanOrders,
        ]);
    }
    
    public function main_theme()
    {
        return view('feature/main-theme');
    }

    public function create_theme()
    {
        return view('feature/main-create');
    }

    public function delete_theme(Request $request, $id)
    {
        try {
            // Find the coba theme with the given ID.
            $coba = Coba::find($id);

            // Delete the coba theme from the database.
            $coba->delete();

            // Redirect to the success page.
            Session::flash('success', 'Undangan theme deleted successfully.');
            return redirect()->route('undangans');
        } catch (\Exception $e) {
            // Display the error message.
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}