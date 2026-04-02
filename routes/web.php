<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('homeView');


Route::controller(EmployeeController::class)->group(function () {
    // These should be accessible to both admin AND employee
    Route::get('/employess', 'showEmployees')->name('employees.index'); // Accept multiple roles
    // Route::get('/employess', 'showEmployees')->name('employees.index')->middleware('isAuthenticated:employee, admin'); // Accept multiple roles

    Route::get('/show/{id}', 'showEmployee')->name('employees.show');

    // These should be admin only
    Route::post('/add', 'AddEmployee')->name('employees.add')->middleware('isAuthenticated:admin');
    Route::post('/update/{id}', 'UpdateEmployee')->name('employees.update')->middleware('isAuthenticated:admin');
    Route::get('/updatepage/{id}', 'UpdatePage')->name('employees.page')->middleware('isAuthenticated:admin');
    Route::get('/delete/{id}', 'DeleteEmployee')->name('employees.delete')->middleware('isAuthenticated:admin');
});


Route::controller(UserController::class)->group(function () {

    Route::get('openform', 'formPage')->name('openForm')->middleware("isAuthenticated:admin");
    Route::post('registerSave', 'register')->name('registerSave');
    Route::post('loginCheck',  'login')->name('loginCheck');
    Route::get('logout',  'logout')->name('logout');
});


Route::get('/register', function () {
    return view('admin.register');
})->name('getRegister');


Route::get('/login', function () {
    return view('admin.login');
})->name("loginPage");
