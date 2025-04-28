<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// Anglická verze
Route::prefix('en')
    ->group(function () {
        Route::get('/', [WebController::class, 'index'])->name('home.en');
        // Další routy pro anglickou verzi
});

// TODO: prekontrolovat pro aj/cs verzi
// Česká verze (výchozí)
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/kariera', function () {
    return view('career');
});
Route::get('/dotacni-programy', function () {
    return view('programs');
});

