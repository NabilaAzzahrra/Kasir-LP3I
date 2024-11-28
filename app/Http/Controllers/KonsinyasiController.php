<?php

namespace App\Http\Controllers;

use App\Models\DetailKonsinyasi;
use App\Models\Konsinyasi;
use Illuminate\Http\Request;

class KonsinyasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Konsinyasi::paginate(5);
        $kodeKonsinyasi = Konsinyasi::createCode();
        return view('page.konsinyasi.index', compact('kodeKonsinyasi'))->with([
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
            'kode_konsinyasi' => $request->input('kode_konsinyasi'),
            'nama_konsinyasi' => $request->input('nama_konsinyasi'),
        ];

        Konsinyasi::create($data);

        return back()->with('message_delete', 'Data Sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kode_konsinyasi = Konsinyasi::where('kode_konsinyasi', $id)->first();
        $data = DetailKonsinyasi::where('kode_konsinyasi', $id)->paginate(5);
        $kodeKonsinyasiDetail = DetailKonsinyasi::createCode();
        return view('page.konsinyasi.show', compact('kodeKonsinyasiDetail'))->with([
            'data' => $data,
            'kode_konsinyasi' => $kode_konsinyasi,
        ]);
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
            'kode_konsinyasi' => $request->input('kode_konsinyasi'),
            'nama_konsinyasi' => $request->input('nama_konsinyasi'),
        ];

        $datas = Konsinyasi::findOrFail($id);
        $datas->update($data);
        return back()->with('message_delete', 'Data Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Konsinyasi::findOrFail($id);
        $data->delete();
        return back()->with('message_delete','Data Sudah dihapus');
    }
}
