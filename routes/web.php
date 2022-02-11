<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('welcome');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('pages.checkout');
Route::get('/success', function () {
    return view('pages.success_checkout');
})->name('success');

// socialite route
Route::get('sign-in-google',[UserController::class , 'google'])->name('user.login.google');
Route::get('auth/google/callback',[UserController::class , 'handleProviderCallback'])->name('user.google.callback');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
