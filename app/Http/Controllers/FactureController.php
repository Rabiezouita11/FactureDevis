<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Factures;
use App\Models\UserProduct;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function saveUserProductsFacture(Request $request)
    {
        // Validate the request data (add more validation rules as needed)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
            'quantities' => 'required|array',
            'quantities.*' => 'numeric|min:1', // Adjust the validation rules for quantities
        ]);
    
        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
    
        // Get the selected product IDs and quantities from the request
        $selectedProducts = $request->input('products');
        $quantities = $request->input('quantities');
    
        // Create a new facture for the user
        $facture = Factures::create([
            'user_id' => $user->id,
            'details' => 'Test Facture Details', // You can customize this as needed
        ]);
    
        // Calculate total price for each product and attach to the user with additional pivot data
        foreach ($selectedProducts as $key => $productId) {
            $product = Product::find($productId);
            $quantity = $quantities[$key];
            $totalPrice = $product->Prix * $quantity;
    
            $user->products()->attach(
                $productId,
                [
                    'facture_id' => $facture->id,
                    'quantite' => $quantity,
                    'prix_totale' => $totalPrice,
                ]
            );
        }
    
        // Return a success response
        return response()->json(['message' => 'User, products, and facture saved successfully']);
    }
    
    public function showUserProductsForm()
    {
        // Fetch products from the database to populate the dropdown
        $products = Product::all();
        
        // You can pass additional data if needed
        return view('Facture.index', ['products' => $products]);
    }

}
