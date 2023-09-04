<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SalaryController;

Route::post('/mark-attendance',[AttendanceController::class,'markAttendance'])->name('mark-attendance');
Route::get('/attendance', [AttendanceController::class,'showAttendance'])->name('employee.attendance');

Route::get('/empsalary', [SalaryController::class,'showEmpSalary'])->name('employee.salary');

Route::get('/generate-slip/{userId}/{month}', [PDFController::class,'generateSlip'])->name('generate.slip');

