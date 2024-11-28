<?php

namespace App\Http\Controllers;

use App\Models\DetailKonsinyasi;
use App\Models\ProdukJual;
use Illuminate\Http\Request;

class DetailKonsinyasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'kode_konsinyasi_detail' => $request->input('kode_konsinyasi_detail'),
            'produk' => $request->input('produk'),
            'harga' => $request->input('harga'),
            'harga_jual' => $request->input('harga_jual'),
            'qty' => $request->input('qty'),
            'tgl_masuk' => date('Y-m-d'),
            'status' => 'BELUM',
        ];

        $dataProdukJual = [
            'kode_produk' => $request->input('kode_konsinyasi_detail'),
            'produk' => $request->input('produk'),
            'harga_jual' => $request->input('harga_jual'),
            'qty' => $request->input('qty'),
            'status' => 'BELUM',
        ];

        DetailKonsinyasi::create($data);
        ProdukJual::create($dataProdukJual);

        return back()->with('message_delete', 'Data Sudah ditambahkan');
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
            'status' => $request->input('status'),
        ];

        $detail = DetailKonsinyasi::where('id', $id)->first();
        $kodeKonsinyasiDetail = $detail->kode_konsinyasi_detail;

        $produkJual = ProdukJual::where('kode_produk', $kodeKonsinyasiDetail)->first();

        $dataProdukJual = [
            'status' => $request->input('status'),
        ];

        $produkJual->update($dataProdukJual);

        $datas = DetailKonsinyasi::findOrFail($id);
        $datas->update($data);
        return back()->with('message_delete', 'Data Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
