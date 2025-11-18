<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    $editId = $request->input('edit'); // ambil ID dari URL jika sedang edit

    // Ambil produk untuk edit jika ada
    $editProduct = null;
    if ($editId) {
        $editProduct = Product::find($editId);
    }

    $products = Product::when($search, function ($query, $search) {
        return $query->where('nama', 'like', "%{$search}%")
                     ->orWhere('deskripsi', 'like', "%{$search}%");
    })
    ->orderBy('created_at', 'desc')
    ->paginate(6);

    $products->appends(['search' => $search]);

    return view('buku_tamu', compact('products', 'search', 'editProduct'));
}

    public function indexOld()
    {
        // Ambil data dari tabel products dengan pagination (5 per halaman)
        $products = Product::orderBy('id', 'desc')->paginate(6);

        return view('buku_tamu', [
            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload gambar jika ada
        $namaGambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaGambar = time() . '_' . $file->getClientOriginalName();

            if (!file_exists(public_path('uploads'))) {
                mkdir(public_path('uploads'), 0755, true);
            }

            $file->move(public_path('uploads'), $namaGambar);
        }

        // Simpan ke database
        Product::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'gambar' => $namaGambar,
        ]);

        return redirect()->route('buku_tamu')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'nama' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Update gambar jika ada file baru
    if ($request->hasFile('gambar')) {
        if ($product->gambar && file_exists(public_path('uploads/' . $product->gambar))) {
            unlink(public_path('uploads/' . $product->gambar));
        }

        $file = $request->file('gambar');
        $namaGambar = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads'), $namaGambar);
        $product->gambar = $namaGambar;
    }

    $product->nama = $request->nama;
    $product->deskripsi = $request->deskripsi;
    $product->save();

    return redirect()->route('buku_tamu')->with('success', 'Data berhasil diperbarui!');
}


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->gambar && file_exists(public_path('uploads/' . $product->gambar))) {
            unlink(public_path('uploads/' . $product->gambar));
        }

        $product->delete();

        return redirect()->route('buku_tamu')->with('success', 'Data berhasil dihapus!');
    }
}
