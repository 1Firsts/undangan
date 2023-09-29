<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use App\Models\Link;
use App\Models\Tema;

use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\URL;

class UndanganController extends Controller
{
    public function index()
    {
        $undangans = Undangan::all(); // Retrieve all records from the 'Undangan' model
        $dataLinks = Link::all(); // Retrieve all records from the 'Undangan' model
        $tables = Tema::all();
        
        return view('vundangan', [
            'undangans' => $undangans,
            'dataLinks' => $dataLinks,
            'tables' => $tables,
        ]); // Pass the data to the view
    }

    public function buat_tema(Request $request, $themeNumber)
    {
        $imageManager = new ImageManager([
            'driver' => 'gd',
        ]);

        // Validate the request data
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'media_sosial' => 'required|url',
            'hari_tgl' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required',
            'tema_pernikahan' => 'required',
            'link_undangan' => 'required',
            'tema_category' => 'required',
        ]);

        // Resize and crop the uploaded image
        $image = $imageManager->make($request->file('foto'))->resize(673, 517)->crop(673, 517);

        // Save the image to the `uploads` directory
        $imagePath = $request->file('foto')->store("storage/uploads/tema{$themeNumber}", 'public');

        // Create a new theme record in the database
        $theme = new Tema();
        $theme->nama_lengkap = $request->input('nama_lengkap');
        $theme->nama_panggilan = $request->input('nama_panggilan');
        $theme->foto = $imagePath;
        $theme->media_sosial = $request->input('media_sosial');
        $theme->hari_tgl = $request->input('hari_tgl');
        $theme->waktu = $request->input('waktu');
        $theme->lokasi = $request->input('lokasi');
        $theme->tema_pernikahan = $request->input('tema_pernikahan');
        $theme->link_undangan = $request->input('link_undangan');
        $theme->tema_category = $request->input('tema_category');

        // Save the theme data to the database
        $theme->save();
        // dd($theme);

        $currentURL = 'http://127.0.0.1:8000/posts/show'; // Define the base URL without ID
        $generatedURLs = []; // Initialize an array to store generated URLs

        // Generate URLs for IDs from 1 to 45
        for ($i = 1; $i <= 45; $i++) {
            $generatedURL = "{$currentURL}{$i}/{$themeNumber}";
            $generatedURLs[] = $generatedURL;
        }

        return view('feature.table', compact('generatedURLs'));
    }
}
