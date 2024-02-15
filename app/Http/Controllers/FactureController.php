<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Factures;
use App\Models\UserProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class FactureController extends Controller
{

    public function showAllFacturesWithUsers()
    {
        // Fetch all factures with associated users and paginate the results
        $products = Product::all();
        $factures = DB::table('factures')
            ->join('users', 'factures.user_id', '=', 'users.id')
            ->select('factures.*', 'users.name as user_name', 'users.email as user_email')
            ->paginate(5); // Adjust the number based on your needs
    
        // Convert created_at from string to Carbon instance
        $factures->getCollection()->transform(function ($facture) {
            $facture->created_at = Carbon::parse($facture->created_at);
            return $facture;
        });
    
        return view('Facture.index2', ['factures' => $factures, 'products' => $products]);
    }
    


    public function saveUserProductsFacture(Request $request)
    {
        // Define the tax rate
        $taxRate = 0.19;
    
        // Validate the request data (add more validation rules as needed)
        $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|email|max:255',
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
    
        // Initialize total prices
    // Initialize total prices
$totalHorsTaxe = 0; // Total price without tax
$totalAvecTaxe = 0; // Total price with tax

// Calculate total price for each product and attach to the user with additional pivot data
foreach ($selectedProducts as $key => $productId) {
    $product = Product::find($productId);
    $quantity = $quantities[$key];
    $prixTotale = $product->Prix * $quantity; // Calculate total price including tax

    // Update total prices
    $totalHorsTaxe += $prixTotale; // Add total price including tax
    $totalAvecTaxe += $prixTotale * (1 + $taxRate); // Add total price with tax

    // Attach the product to the user with facture_id
    $user->products()->attach(
        $productId,
        [
            'facture_id' => $facture->id,
            'quantite' => $quantity,
            'prix_totale' => $prixTotale, // Save total price including tax
        ]
    );
}

// Calculate the tax amount
$tvaAmount = $totalAvecTaxe - $totalHorsTaxe;
$totalAvecTaxe += 1;

// Update the facture with total prices
$facture->update([
    'prix_hors_taxe' => $totalHorsTaxe,
    'prix_avec_taxe' => $totalAvecTaxe,
    'TVA' => $tvaAmount,
]);

    
        // Return a success response
        return redirect()->route('Facture')->with('success', 'Facture ajoutée avec succès');
    }
    
    
    
    public function showUserProductsForm()
    {
        // Fetch products from the database to populate the dropdown
        $products = Product::all();
        
        // You can pass additional data if needed
        return view('Facture.index', ['products' => $products]);
    }

}
