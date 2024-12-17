<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Konsumen::paginate(5);
        return view('page.konsumen.index')->with([
            'data' => $data,
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
        $data = [
            'nama_konsumen' => $request->input('konsumen'),
            'status' => $request->input('status'),
        ];

        Konsumen::create($data);


        // Simpan pesan ke session
        session()->flash('success', 'Data Konsumen berhasil ditambahkan.');

        return back();
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
        $data = [
            'nama_konsumen' => $request->input('konsumen'),
            'status' => $request->input('status'),
        ];

        $datas = Konsumen::findOrFail($id);
        $datas->update($data);
        return back()->with('message_update', 'Data Konsumen Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Konsumen::findOrFail($id);
        $data->delete();
        // Simpan pesan ke session
        return back()->with('message_delete', 'Data Konsumen sudah dihapus.');
    }
}
