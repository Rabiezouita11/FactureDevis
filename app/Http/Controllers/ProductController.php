<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(4);
        $categories = Categorie::all();
    
        return view('Product.index', ['products' => $products, 'categories' => $categories]);
    }
    
    public function addProduct(Request $request)
    {
        $request->validate([
            'productName' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'productQuantity' => 'required|integer',
            'productPrice' => 'required|integer',
            'productCategory' => 'required|exists:categories,id',
        ]);

        $product = Product::create([
            'Nom' => $request->input('productName'),
            'Description' => $request->input('productDescription'),
            'quantite' => $request->input('productQuantity'),
            'Prix' => $request->input('productPrice'),
            'category_id' => $request->input('productCategory'),
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully!');
    }
}
