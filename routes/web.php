<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// import controler
use App\Http\Controllers\home_contr;
use App\Http\Controllers\Accueil_contr;
use App\Http\Controllers\naissance_contr;
use App\Http\Controllers\extrait_contr;
use App\Http\Controllers\modification_cont;




// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/',[home_contr::class,'index']);
Route::get('/Accueil',[Accueil_contr::class,'index'])->name('accueil');
Route::get('/Saisie',[Accueil_contr::class,'store']);
Route::get('/Modification',[Accueil_contr::class,'modification']);
Route::get('/Naissance',[naissance_contr::class,'index']);
Route::get('/Extrait',[extrait_contr::class,'index'])->name('Extrait');
Route::get('/Modifications/{id}',[modification_cont::class,'index'])->name('Modifications');


// using controller
// Route::get('/test',[MyControllerProj::class,'MyFctContrP'])->name('Projet.MyFctContrP');


//----------------------------


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
