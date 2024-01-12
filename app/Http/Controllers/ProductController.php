<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

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

    public function update(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::findOrFail($productId);
    
        // Validate only the fields that are being updated
        $request->validate([
            'editProductName' => 'required|string|max:255',
            'editProductDescription' => 'required|string',
            'editProductQuantity' => 'required|integer|min:0',
            'editProductPrice' => 'required|numeric|min:0',
            'editProductCategory' => 'required|exists:categories,id',
            // Add validation rules for other attributes
        ]);
    
        // Update only the fields that are being changed
        $product->update([
            'Nom' => $request->input('editProductName'),
            'Description' => $request->input('editProductDescription'),
            'quantite' => $request->input('editProductQuantity'),
            'Prix' => $request->input('editProductPrice'),
            'category_id' => $request->input('editProductCategory'),
            // Add other attributes
        ]);
    
        return redirect()->back()->with('success', 'Produit mis à jour avec succès');
    }
    public function destroy(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::findOrFail($productId);
    
        // Perform any additional checks or logic before deleting if needed
    
        $product->delete();
    
        return redirect()->back()->with('success', 'Produit supprimé avec succès');
    }
}
