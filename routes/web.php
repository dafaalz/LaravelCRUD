<?php
use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaguController;

Route::get('/lagu-test', [LaguController::class, 'index'])->name('lagu.index');
Route::post('/lagu-test', [LaguController::class, 'store'])->name('lagu.store');
Route::post('/lagu-test/{id}/update', [LaguController::class, 'update'])->name('lagu.update');
Route::get('/lagu-test/{id}/delete', [LaguController::class, 'destroy'])->name('lagu.destroy');
Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaController::class);
