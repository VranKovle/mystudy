<?php

use App\Http\Livewire\Materi;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/regiskan', function () {
    return view('regiskan');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/pdfmateri/{id}', [App\Http\Controllers\exportmateri::class, 'exportPDF'])->name('pdfmateri');


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tugas/{idtugas}', [App\Http\Controllers\HomeController::class, 'lihatTugas'])->name('tugas');
