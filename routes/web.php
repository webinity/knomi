<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Models\OpenPosition;

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

// Česká verze (výchozí)
Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/kariera', function () {
    return view('career', [
        'openPositions' => OpenPosition::all()
    ]);
});
Route::get('/dotacni-programy', function () {
    return view('dotacni-programy');
})->name('dotacni-programy');

// PDF Download routa
// PDF Download route - serve from public
Route::get('/download/{filename}', function ($filename) {
    $filename = basename($filename);

    if (!Str::endsWith($filename, '.pdf')) {
        abort(403, 'Soubor nenalezen.');
    }

    $filePath = public_path("downloads/{$filename}");

    if (!file_exists($filePath)) {
        abort(404);
    }

    return response()->file($filePath);
})->name('downloads.file');


