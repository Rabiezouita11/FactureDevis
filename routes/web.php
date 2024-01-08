<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategorieController;


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
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/Categorie', [CategorieController::class, 'index'])->name('Categorie');
Route::post('/add-category', [CategorieController::class, 'addCategory'])->name('add.category');
Route::delete('/categories/delete/{id}', [CategorieController::class, 'delete'])->name('delete.category');

