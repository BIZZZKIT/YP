<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StatementController;
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
Route::get('/', [StatementController::class, 'statementViewNotAdmin'])->name('main');;

Route::view('register', 'users.register')->name('register');
Route::post('register', [UserController::class, 'register']);
Route::view('login', 'users.authorisation')->name('login');
Route::post('login', [UserController::class, 'authorisation']);
Route::middleware(['auth'])->group(function () {
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::view('statementpage', 'users.statementpage')->name('statementpage');
    Route::post('statementpage', [StatementController::class, 'createStatement']);
});

Route::middleware('role')->group(function () {
    Route::get('admin', [StatementController::class, 'statementViewAdmin'])->name('admin_panel');
    Route::put('updateStatus/{statement}', [AdminController::class, 'editStatus'])->name('updateStatus');
});
