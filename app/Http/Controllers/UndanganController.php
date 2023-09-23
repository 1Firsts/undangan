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

class UndanganController extends Controller
{
    public function index()
    {
        $undangans = Undangan::all(); // Retrieve all records from the 'Undangan' model
        $dataLinks = Link::all(); // Retrieve all records from the 'Undangan' model
        
        return view('vundangan', [
            'undangans' => $undangans,
            'dataLinks' => $dataLinks,
        ]); // Pass the data to the view
    }

    public function buat_tema_1(Request $request)
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
        $imagePath = $request->file('foto')->store('storage/uploads/tema1', 'public');

        // Create a new theme record in the database
        $tema1 = new Tema();
        $tema1->nama_lengkap = $request->input('nama_lengkap');
        $tema1->nama_panggilan = $request->input('nama_panggilan');
        $tema1->foto = $imagePath;
        $tema1->media_sosial = $request->input('media_sosial');
        $tema1->hari_tgl = $request->input('hari_tgl');
        $tema1->waktu = $request->input('waktu');
        $tema1->lokasi = $request->input('lokasi');
        $tema1->tema_pernikahan = $request->input('tema_pernikahan');
        $tema1->link_undangan = $request->input('link_undangan');
        $tema1->tema_category = $request->input('tema_category');

        // Save the theme data to the database
        $tema1->save();
        dd($tema1);

        return view('feature/table');
    }
}
