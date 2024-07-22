<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class AdminController extends Controller
{
    // Fungsi Pengelolaan produk

    public function produkIndex()
    {
        $produks = Produk::all();
        return view('admin.produk.produk', compact('produks'));
    }

    public function produkCreate()
    {
        return view('admin.produk.create');
    }

    public function produkStore(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $produk = new Produk();
        $produk->nama = $request->nama;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $produk->gambar = $imageName;
        }
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('admin.produk.index')->with('success', 'produk berhasil ditambahkan.');
    }

    public function produkEdit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.editproduk', compact('produk'));
    }

    public function produkUpdate(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|numeric',
        ]);

        $produk = Produk::find($id);
        $produk->nama = $request->nama;
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $produk->gambar = $imageName;
        }
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('admin.produk.index')->with('success', 'produk berhasil diupdate.');
    }

    public function produkDestroy($id)
    {
        $produk = Produk::find($id);
        if ($produk) {
            $produk->delete();
            return redirect()->route('admin.produk.index')->with('success', 'produk berhasil dihapus.');
        } else {
            return redirect()->route('admin.produk.index')->with('error', 'produk tidak ditemukan.');
        }
    }
}
