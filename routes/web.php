<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'showEmployees'])->name('employees.index');
Route::get('/show/{id}', [EmployeeController::class, 'showEmployee'])->name('employees.show');
Route::post('/add', [EmployeeController::class, 'AddEmployee'])->name('employees.add');
Route::get('/update', [EmployeeController::class, 'UpdateEmployee'])->name('employees.update');
Route::get('/delete/{id}', [EmployeeController::class, 'DeleteEmployee'])->name('employees.delete');

// Route::view('/openform', 'add');
Route::get('/openform', function () {
    return view('addform');
});
