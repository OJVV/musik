<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\HomeLayout;
use App\Livewire\ShowEvent;
use App\Livewire\ShowPortfolio;
use App\Livewire\ShowServicesPage;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
// });

Route::get('/',HomeLayout::class)->name('home');
Route::get('/services',ShowServicesPage::class)->name('services');
Route::get('/portfolio',ShowPortfolio::class)->name('portfolio');
Route::get('/event',ShowEvent::class)->name('event');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
