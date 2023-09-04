<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\UserController;
use App\Models\Attendance;

Route::get('/addingusers', function () { return view('hr.addingusers');})->middleware('auth')->name('hr.addingusers');
Route::post('/addingusers', [UserController::class, 'store'])->name('user.store');

Route::get('/allusers', [UserController::class, 'allUsers'])->name('hr.users');
// Route::get('/allattendance', [UserController::class, 'allUsers'])->name('hr.users');

Route::get('/edit/{id}/', [UserController::class, 'edit'])->name('user.edit');
Route::put('/edit/{user}/', [UserController::class, 'update'])->name('user.update');

Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

Route::get('/users/attendance', [AttendanceController::class, 'showAllUsersWithAttendance'])->name('hr.usersattendance');


Route::get('/salaries', [SalaryController::class,'index'])->name('hr.addsalaries');
Route::post('/addsalaries', [SalaryController::class,'store'])->name('hr.addsalary');

Route::get('/allsalaries', [SalaryController::class,'allSalaries'])->name('hr.allsalaries');



