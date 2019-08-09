<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;

class ProdukController extends Controller
{
    public function index()
    {
        $data['produks'] = new Barang();

        if(@request()->kategori){
            $kategori = request()->kategori;
            $data['produks'] = $data['produks']->where('kategori_id', 'like', '%'.$kategori.'%');
        }

        if(@request()->search){
            $q = request()->search;
            $data['produks'] = $data['produks']->where('nama_barang', 'like', '%'.$q.'%');
        }

        $data['produks'] = $data['produks']->paginate(10);
        $data['kategoris'] = Kategori::orderBy('nama_kategori')->get();
        return view('produk', $data);
    }

    public function show($id)
    {
        $data['produk'] = Barang::findOrFail($id);
        $kategori = explode(',', $data['produk']->kategori_id);
        $data['kategoris'] = Kategori::whereIn('id', $kategori)->orderBy('nama_kategori')->get();

        return view('produk-detail', $data);
    }
}
