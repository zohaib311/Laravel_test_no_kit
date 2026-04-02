<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(EmployeeController::class)->group(function () {

    Route::get('/',  'showEmployees')->name('employees.index');
    Route::get('/show/{id}', 'showEmployee')->name('employees.show');
    Route::post('/add',  'AddEmployee')->name('employees.add');
    Route::post('/update/{id}', 'UpdateEmployee')->name('employees.update');
    Route::get('/updatepage/{id}', 'UpdatePage')->name('employees.page');
    Route::get('/delete/{id}',  'DeleteEmployee')->name('employees.delete');
});



Route::get('openform', [UserController::class, 'formPage'])->name('openForm');

Route::get('/register', function () {
    return view('admin.register');
});
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');


Route::get('/login', function () {
    return view('admin.login');
})->name("loginPage");

Route::post('loginCheck', [UserController::class, 'login'])->name('loginCheck');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
