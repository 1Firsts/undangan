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
        $validatedData = $request->validate([
            'nama_pelanggan' => 'required',
            'nama_lengkap_wanita' => 'required',
            'nama_panggilan_wanita' => 'required',
            'nama_lengkap_pria' => 'required',
            'nama_panggilan_pria' => 'required',
            'media_sosial' => 'required|url',
            'hari_tgl' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required',
            'tema_pernikahan' => 'required',
            'link_undangan' => 'sometimes',
            'tema_category' => 'required',
            'foto_pasangan1' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            'foto_pasangan2' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            'foto_galeri.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Initialize an array to store file paths
        $filePaths = [];

        // Handle 'foto_pasangan' image uploads
        for ($i = 1; $i <= 2; $i++) {
            $fieldName = "foto_pasangan{$i}";

            if ($request->hasFile($fieldName)) {
                // Validate and store the image
                $file = $request->file($fieldName);
                $filePath = $file->store("storage/uploads/tema{$themeNumber}", 'public');
                $filePaths[$fieldName] = $filePath;
            }
        }

        // Handle 'foto_galeri' image uploads
        for ($i = 1; $i <= 10; $i++) {
            $fieldName = "foto_galeri{$i}";

            if ($request->hasFile($fieldName)) {
                // Validate and store the image
                $file = $request->file($fieldName);
                $filePath = $file->store("storage/uploads/tema{$themeNumber}", 'public');
                $filePaths[$fieldName] = $filePath;
            }
        }

        // Create a new theme record in the database
        $theme = new Tema();
        $theme->fill($validatedData); // Fill the model with validated data

        // Assign uploaded file paths to the theme model
        foreach ($filePaths as $fieldName => $filePath) {
            $theme->$fieldName = $filePath;
        }

        // Save the theme data to the database
        $theme->save();

        $currentURL = 'http://127.0.0.1:8000/posts/show/'; // Note the trailing slash
        $generatedURLs = []; // Initialize an array to store generated URLs

        // Generate URLs for IDs from 1 to 45
        for ($i = 1; $i <= 45; $i++) {
            $id = $theme->id; // Assuming you have a theme object with an ID

            $generatedURL = "{$currentURL}{$i}/{$id}";
            $generatedURLs[] = $generatedURL;
        }

        return view('feature.table');
    }
}
