<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/partners', [PageController::class, 'partners'])->name('partners');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submit'])->name('contact.submit');

Route::get('/lang/{locale}', function (string $locale) {
    abort_unless(in_array($locale, ['en', 'sw']), 404);
    session(['locale' => $locale]);
    return back();
})->name('lang.switch');
