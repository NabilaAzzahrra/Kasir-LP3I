<?php

namespace App\Http\Controllers;

use App\Models\ProdukJual;
use Illuminate\Http\Request;

class ProdukJualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProdukJual::where('status', 'BELUM')->paginate(5);
        return view('page.produkJual.index')->with([
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
        //
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
        //
    }

    public function getProduk($id)
    {
        $produk = ProdukJual::where('kode_produk', $id)->first();

        return $produk
            ? response()->json(['produk' => $produk])
            : response()->json(['message' => 'Produk tidak ditemukan'], 404);
    }
}
