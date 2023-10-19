<?php

namespace App\Http\Controllers;

use App\Models\MateriPelatihan;
use App\Models\SubMateriPelatihan;
use Illuminate\Http\Request;

class SubMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $materi)
    {
        $materinya = MateriPelatihan::find($materi);
        $submaterinya = MateriPelatihan::find($materi)->sub_materi()->get();
        // dd($submaterinya);
        return view('admin.subMateriPelatihan.index',[
            'materinya' => $materinya,
            'submaterinya' =>$submaterinya
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'materi_pelatihan_id' => 'required',
            'sub_materi' => 'required|string|max:255',
        ]);
        $submateri = new SubMateriPelatihan();
        $submateri->materi_pelatihan_id = $request->materi_pelatihan_id;
        $submateri->sub_materi = $request->sub_materi;
        $submateri->save();
        return redirect()->route('admin.subMateri.index',['materi'=> $request->materi_pelatihan_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $submaterinya = SubMateriPelatihan::find($id);
        $materinya    = $submaterinya->materi_pelatihan_id;
        $submaterinya->delete();
        return
        redirect()->route('admin.subMateri.index', ['materi' => $materinya]);
    }
}
