<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


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

Route::get("/", [AnnounceController::class, 'index'])->name('home');
Route::get('/annonces', [AnnounceController::class, 'list'])->name('announce.list');

Route::get("/inscription", function () {
    return view("auth.Signin");
})->name('signin');

Route::get("/connexion", function () {
    return view("auth.Login");
})->name('login');

// Route::resource("user", UserController::class);
Route::post("/user/create", [UserController::class, 'store'])
    ->name('user.create');

Route::middleware('auth')->group(function () {
    Route::get("/create", function () {
        return view("annonces.Create");
    })->name('announce.createForm');
    Route::post("/announce/create", [AnnounceController::class, 'create'])->name('announce.create');
    Route::get("/announce/{id}", [AnnounceController::class, 'show'])->name('announce.show');
    Route::get("/mon-compte", [UserController::class, 'index'])->name('userProfil');
});

