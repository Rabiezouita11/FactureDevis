<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generate-pdf', [PdfController::class, 'generatePDF'])->name('generate.pdf');

// home 
Route::get('/home', [HomeController::class, 'index'])->name('index');
// categorie
Route::get('/Categorie', [CategorieController::class, 'index'])->name('Categorie');
Route::post('/add-category', [CategorieController::class, 'addCategory'])->name('add.category');
Route::delete('/categories/delete/{id}', [CategorieController::class, 'delete'])->name('delete.category');
Route::get('/edit-category/{id}',  [CategorieController::class, 'editCategory'])->name('edit.category');
Route::put('/update-category/{id}',[CategorieController::class, 'updateCategory'] )->name('update.category');


// Produit 
Route::post('/products/add', [ProductController::class, 'addProduct'])->name('add.product');
Route::get('/products', [ProductController::class, 'index'])->name('products');
