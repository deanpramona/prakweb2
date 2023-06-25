<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategoriproduk.kategoriproduk', ['kategori_produk' => $kategori_produk->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan seluruh data kategori produk
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategoriproduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // buat class dengan nama table yang mau kita tambahkan datanya (produk)
         $kategori_produk = new KategoriProduk();

         // ambil data yang diinputkan user dengan parameter request,
           // lalu masukan ke dalam kolom table (produk)
         $kategori_produk->nama = $request->nama;
         // save data inputan user menggunakan method save
         $kategori_produk->save();
 
         // lalu kembalikan ke tampilan produk setelah user mengklik tombol simpan
         return redirect('admin/kategoriproduk');
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
          // buka table produk
        // cari data yg ingin dihapus berdasarkan id
        // hapus data menggunakan method delete
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('admin/kategoriproduk');
    }
}
