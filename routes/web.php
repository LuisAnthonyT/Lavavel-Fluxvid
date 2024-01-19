<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;

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

