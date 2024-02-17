<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(6);
        $categories = Categorie::all();

        return view('Product.index', ['products' => $products, 'categories' => $categories]);
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'productName' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'productQuantity' => 'required|integer',
            'productPrice' => 'required|numeric|regex:/^\d*(\.\d{1,3})?$/',
            // 'productCategory' => 'required|exists:categories,id',
            'productImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
        ]);
    
        // Handle image upload
        $imagePath = null;
    
        if ($request->hasFile('productImage')) {
            $image = $request->file('productImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('product_images', $imageName, 'public'); // Store image in the public storage under 'product_images' folder
        }
    
        // Create product with image
        $product = Product::create([
            'Nom' => $request->input('productName'),
            'Description' => $request->input('productDescription'),
            'quantite' => $request->input('productQuantity'),
            'Prix' => $request->input('productPrice'),
            // 'category_id' => $request->input('productCategory'),
            'image' => $imagePath, // Save image path to the 'image' attribute
        ]);
    
        return redirect()->route('products')->with('success', 'Product added successfully!');
    }

    public function update(Request $request)
    {
        $productId = $request->input('productId');
        $product = Product::findOrFail($productId);
    
        // Validate fields
        $request->validate([
            'editProductName' => 'required|string|max:255',
            'editProductDescription' => 'required|string',
            'editProductQuantity' => 'required|integer|min:0',
            'editProductPrice' => 'required|numeric|regex:/^\d*(\.\d{1,3})?$/',

            // 'editProductCategory' => 'required|exists:categories,id',
            'editProductImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation
        ]);
    
        // Delete old image
        if ($request->hasFile('editProductImage') && $product->image) {
            Storage::disk('public')->delete($product->image);
        }
    
        // Update other fields
        $data = [
            'Nom' => $request->input('editProductName'),
            'Description' => $request->input('editProductDescription'),
            'quantite' => $request->input('editProductQuantity'),
            'Prix' => $request->input('editProductPrice'),
            // 'category_id' => $request->input('editProductCategory'),
        ];
    
        // Update image if provided
        if ($request->hasFile('editProductImage')) {
            $data['image'] = $request->file('editProductImage')->store('product_images', 'public');
        }
    
        $product->update($data);
    
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


    // In your controller
    public function searchProducts(Request $request)
    {
        $search = $request->input('search');
    
        // Perform your search logic and eager load the 'category'
        $products = Product::with('category')
            ->where('Nom', 'like', '%' . $search . '%')
            ->get();

        // Return a consistent JSON response, even if there are no search results
        return response()->json(['products' => $products ?? []]);
    }
    
    

}
