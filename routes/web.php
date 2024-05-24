<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [RecipeController::class, 'index'])->name('dashboard');
    Route::post('/recipes', [RecipeController::class, 'store']);
    Route::get('/recipes/create', [RecipeController::class, 'create']);
    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');



});


require __DIR__.'/auth.php';
