<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Menampilkan data pegawai
     */
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();

        
         return view('pegawai', compact('pegawai'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role'=> 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);
        // Handle the image upload
        $image = $request->file('foto');
        $imageData = file_get_contents($image->getRealPath());
        $base64Image = base64_encode($imageData);
    
        DB::table('pegawai')->insert([
            'name' => $request->input('name'),
            'foto' => $base64Image,
            'role'=> $request->input('role'),
            'keterangan' => $request->input('keterangan'),
        ]);
    
        return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
    }
    // Method untuk menampilkan form edit
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('id', $id)->first();
        return view('pegawaiaksi', compact('pegawai'));
    }

    // Method untuk mengupdate data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'role'=> 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);


        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageContent = file_get_contents($image->getRealPath());
            $base64Image = base64_encode($imageContent);
        
            // Update the image field
            DB::table('pegawai')->where('id', $id)->update(['foto' => $base64Image]);
        }

        // Update the other fields
        DB::table('pegawai')->where('id', $id)->update([
            'name' => $request->name,
            'role'=> $request->role,
            'keterangan' => $request->keterangan,

        ]);

        return redirect()->route('pegawai.store')->with('success', 'Berita updated successfully');
    }
    public function destroy($id)
    {
        //find berita by ID
        $berita = DB::table('pegawai')->where('id', $id)->first();

        if ($berita) {
            // Delete the berita
            DB::table('pegawai')->where('id', $id)->delete();

            return redirect()->route('pegawai.store')->with('success', 'Berita deleted successfully');
    }
    else {
        return redirect()->route('pegawai.store')->with('error', 'Berita not found');
    }
    }
}