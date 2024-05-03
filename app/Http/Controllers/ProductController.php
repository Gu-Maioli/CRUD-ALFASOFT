<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUpdateProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $products = $product->getAll();

        return view('product/index', compact('products'));
    }

    public function details(string|int $id, Product $product)
    {
        if (!$product = $product->getById($id)) {
            return back();
        }

        return view('product/details', compact(['product']));
    }

    public function store()
    {
        return view('product/create');
    }

    public function create(CreateUpdateProduct $request, Product $product)
    {

        $product->addProduct($request->validated());

        return redirect()->route('product.index');
    }

    public function edit(string|int $id, Product $product)
    {
        if (!$product = $product->getById($id)) {
            return back();
        }

        return view('product/edit', compact(['product']));
    }

    public function update(CreateUpdateProduct $request, string|int $id, Product $product)
    {
        if (!$product = $product->getById($id)) {
            return back();
        }

        $product->updateProduct($request->validated());

        return redirect()->route('product.index');
    }

    public function delete(string|int $id, Product $product)
    {
        if (!$product = $product->find($id)) {
            return back();
        }

        $product->delete();
        return redirect()->route('product.index');
    }
}
