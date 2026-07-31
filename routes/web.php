<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/umkm/store', [HomeController::class, 'storeUmkm'])->name('umkm.store');
Route::post('/complaint/store', [HomeController::class, 'storeComplaint'])->name('complaint.store');
Route::get('/report/pdf', [HomeController::class, 'reportPdf'])->name('report.pdf');
