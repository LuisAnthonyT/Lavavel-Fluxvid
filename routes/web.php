<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('directors/nationality', [DirectorController::class, 'getDirectorsFromNationality'])->name('directors.nationality');


Route::resource('movies', MovieController::class)
    ->parameters(['movie' => 'slug'])
    ->missing(function (Request $request) {
        return Redirect::route('movies.index');
    });

Route::resource('directors', DirectorController::class);

Route::get('signup', [LoginController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('account', function() {
    return view('users.account');
})->name('users.account')
->middleware('auth');





