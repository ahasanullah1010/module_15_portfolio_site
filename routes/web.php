<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Pages Routes
Route::get('/', [PortfolioController::class, 'homePage'])->name('home');
Route::get('/about', [PortfolioController::class, 'aboutPage'])->name('about');
Route::get('/services', [PortfolioController::class, 'servicesPage'])->name('services');
Route::get('/portfolio', [PortfolioController::class, 'portfolioPage'])->name('portfolio');
Route::get('/contact', [PortfolioController::class, 'contactPage'])->name('contact');
