<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\UserController;
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
Route::get("/create", function() {
    return view("createForm");
})->name('announce.createForm');

Route::post("/announce/create", [AnnounceController::class, 'create'])->name('announce.create');
Route::get("/announce/{id}", [AnnounceController::class, 'show'])->name('announce.show');
Route::get("/mon-compte", [UserController::class, 'index'])->name('userProfil');


