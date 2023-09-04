<?php
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

Route::get('/sales', [SalesController::class,'index'])->name('director.sales');

Route::post('/addsales', [SalesController::class, 'store'])->name('sales.addrecord');


Route::get('/allsales', [SalesController::class, 'allSales'])->name('sales.allsales');

Route::get('/sales/{id}/edit', [SalesController::class, 'edit'])->name('sales.edit');

Route::put('/sales/{id}', [SalesController::class, 'update'])->name('sales.update');

Route::get('/sales/generate-monthly-pdf', [PDFController::class,'generateMonthlyPDF'])->name('sales.generate-monthly-pdf');

Route::get('/allusers', [UserController::class, 'drallUsers'])->name('dr.users');


Route::get('/edit/{id}/', [DirectorController::class, 'edit'])->name('user.edit');
Route::put('/edit/{user}/', [DirectorController::class, 'update'])->name('user.update');

Route::get('delete/{user}', [DirectorController::class,'destroy'])->name('user.delete');
