<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;    
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view(): View
    {
        $berita = DB::table('berita')->get();

        
         return view('berita', compact('berita'));
        }
    
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'keterangan' => 'required|string',
    ]);
    // Handle the image upload
    $image = $request->file('gambar');
    $imageData = file_get_contents($image->getRealPath());
    $base64Image = base64_encode($imageData);

    DB::table('berita')->insert([
        'judul' => $request->input('judul'),
        'gambar' => $base64Image,
        'keterangan' => $request->input('keterangan'),
    ]);

    return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
}

// Method untuk menampilkan form edit
public function edit($id)
{
    $berita = DB::table('berita')->where('id', $id)->first();
    return view('beritaaksi', compact('berita'));
}

// Method untuk mengupdate data
public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'keterangan' => 'required|string',
    ]);


    if ($request->hasFile('gambar')) {
        $image = $request->file('gambar');
        $imageContent = file_get_contents($image->getRealPath());
        $base64Image = base64_encode($imageContent);
    
        // Update the image field
        DB::table('berita')->where('id', $id)->update(['gambar' => $base64Image]);
    }

    // Update the other fields
    DB::table('berita')->where('id', $id)->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,

    ]);

    return redirect()->route('berita.store')->with('success', 'Berita updated successfully');
}
public function destroy($id)
{
      //find berita by ID
    $berita = DB::table('berita')->where('id', $id)->first();

    if ($berita) {
        // Delete the berita
        DB::table('berita')->where('id', $id)->delete();

        return redirect()->route('berita.store')->with('success', 'Berita deleted successfully');
}
else {
    return redirect()->route('berita.store')->with('error', 'Berita not found');
}
}
}
