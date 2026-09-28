<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prodcategC;

Route::get('/', [prodcategC::class, 'index'])->name('accueil');
Route::get('/all', [prodcategC::class, 'index'])->name('all'); 
Route::get('/ajouter', [prodcategC::class, 'newp'])->name('ajouter');
Route::post('/ajoutersave', [prodcategC::class, 'newsave'])->name('newsave');