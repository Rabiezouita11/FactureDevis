<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::paginate(5);

        return view('Categorie.index', ['categories' => $categories]);
    }
  

    public function addCategory(Request $request)
    {
        // Step 1: Validation
        $validator = Validator::make($request->all(), [
            'categoryName' => 'required|string|max:255|unique:categories,Nom',
        ]);
    
        // Step 2: Check for validation failure
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Step 3: Create a new category instance
        $category = Categorie::create([
            'Nom' => $request->input('categoryName'),
        ]);
    
        // Step 4: Set a session message
       
        // Step 5: Redirect back to the previous page
        return redirect()->back()->with('success', 'Votre catégorie a été ajoutée avec succès.');
    }
    public function delete($id)
    {
        // Retrieve the category by ID and delete it
        $category = Categorie::find($id);
    
        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'La catégorie a été supprimée avec succès.');
        }
    
        return redirect()->back()->with('error', 'La catégorie n\'a pas pu être trouvée.');
    }

}
