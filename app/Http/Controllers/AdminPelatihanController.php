<?php

namespace App\Http\Controllers;

use App\Models\MateriPelatihan;
use Illuminate\Http\Request;

class AdminPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiPelatihan = MateriPelatihan::all();
        return view('pelatihan.index',[
            'materiPelatihan'=>$materiPelatihan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'materi_pelatihan' => 'required|string|max:255|unique:materi_pelatihan',
        ]);
        $materiPelatihan = new MateriPelatihan();
        $materiPelatihan->materi_pelatihan = $request->materi_pelatihan;
        $materiPelatihan->save();
        return redirect()->route('admin.pelatihan.index')->with('success','Materi pelatihan berhasil ditambahkan [silahkan ini sub-materi]');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pelatihan.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatihan = MateriPelatihan::find($id);
        return view('pelatihan.edit',[
            'pelatihan' => $pelatihan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $materiPelatihan = MateriPelatihan::find($id);
        $validatedData = $request->validate([
            'materi_pelatihan' => 'required|string|max:255|unique:materi_pelatihan',
        ]);
        $materiPelatihan->materi_pelatihan = $request->materi_pelatihan;
        $materiPelatihan->save();
        return redirect()->route('admin.pelatihan.index')->with('success', 'Materi pelatihan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materiPelatihan = MateriPelatihan::find($id);
        $materiPelatihan->sub_materi()->delete();
        $materiPelatihan->delete();
        return redirect()->route('admin.pelatihan.index')->with('success', 'Materi pelatihan berhasil dihapus');
    }
}
