<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\Auth\AuthController;
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

// Page d'accueil
Route::get("/", [AnnounceController::class, 'index'])->name('home');

// Annonces
Route::get('/announces', [AnnounceController::class, 'list'])->name('announce.list');

// Authentification
Route::get('/inscription', [AuthController::class, 'signin'])->name('signin');
Route::get('/connexion', [AuthController::class, 'login'])->name('login');

// User routes
Route::resource("user", UserController::class)->only([
    'show', 
    'store'
]);

Route::post('user/logout', [UserController::class, 'logout'])->name('user.logout');
Route::post('user/login', [UserController::class, 'login'])->name('user.login');

// Route visible au utilisateurs connecté
Route::middleware('auth')->group(function () {
    Route::resource('announce', AnnounceController::class)->except('list');
});

