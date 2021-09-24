<?php

use Illuminate\Support\Facades\Cache;
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

Route::get('/', function () {
    if(!Cache::has('theme')) {
        Cache::forever('theme', 'light');
    }
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('Pages.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/theme', function() {
    $data = request()->data;

    Cache::forever('theme', $data['theme']);
    return response()->json([
        'success' => 'theme changed to ' . Cache::get('theme')
    ]);
});

Route::get('/admin/quotes', function() {
    return view('Pages.Admin.quotes');
})->name('admin/quotes');