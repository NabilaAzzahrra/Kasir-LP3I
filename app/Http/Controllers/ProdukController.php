<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukJual;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::paginate(5);
        $kodeProduk = Produk::createCode();
        return view('page.produk.index', compact('kodeProduk'))->with([
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
            'kode_produk' => $request->input('kode_produk'),
            'produk' => $request->input('produk'),
            'harga' => $request->input('harga'),
            'harga_jual' => $request->input('harga_jual'),
            'qty' => $request->input('qty'),
            'tgl_masuk' => date('Y-m-d'),
            'status' => 'BELUM',
        ];

        $dataProdukJual = [
            'kode_produk' => $request->input('kode_produk'),
            'produk' => $request->input('produk'),
            'harga_jual' => $request->input('harga_jual'),
            'qty' => $request->input('qty'),
            'status' => 'BELUM',
        ];

        Produk::create($data);
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

        $produk = Produk::where('id', $id)->first();
        $kodeKonsinyasiDetail = $produk->kode_produk;

        $produkJual = ProdukJual::where('kode_produk', $kodeKonsinyasiDetail)->first();

        $dataProdukJual = [
            'status' => $request->input('status'),
        ];

        $produkJual->update($dataProdukJual);

        $datas = Produk::findOrFail($id);
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
