<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));

    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
