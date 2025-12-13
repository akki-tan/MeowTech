<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function show()
    {
        return view('toko', [
            'title' => 'Mari Lengkapi kebutuhan anabulmu!',
            'products' => Product::all()
        ]);
    }
    public function adminProduk()
    {
        return view('tambahproduk', [
            'products' => Product::latest()->get()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $path,
        ]);

        return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan!');
    }
    public function edit($id)
    {
        return view('editproduk', [
            'product' => Product::findOrFail($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect('/admin/produk')->with('success', 'Produk berhasil diupdate!');
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect('/admin/produk')->with('success', 'Produk & gambar berhasil dihapus!');
    }
}
