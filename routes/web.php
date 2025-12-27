<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileeController;
use App\Http\Controllers\ShowCarController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SignupController::class, 'create']);

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user/{username}', function (string $username) {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::controller(CarController::class)->group(function () {
//   Route::get('/car', 'index');
//   Route::get('/my-cars', 'myCars');
// });

Route::get('/car/invokable', [CarController::class]);
Route::get('/car', [CarController::class, 'index']);
Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
