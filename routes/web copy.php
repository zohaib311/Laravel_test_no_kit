<?php

use App\Http\Controllers\ChildResourceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::controller(EmployeeController::class)->group(function () {

    Route::get('/',  'showEmployees')->name('employees.index');
    Route::get('/show/{id}', 'showEmployee')->name('employees.show');
    Route::post('/add',  'AddEmployee')->name('employees.add');
    Route::post('/update/{id}', 'UpdateEmployee')->name('employees.update');
    Route::get('/updatepage/{id}', 'UpdatePage')->name('employees.page');
    Route::get('/delete/{id}',  'DeleteEmployee')->name('employees.delete');
});
// Route::view('/openform', 'add');
Route::get('/openform', function () {
    return view('addform');
});



/**
 * Resource Controller All Routes
 */
Route::resource('resource', ResourceController::class)
    ->only(['index', 'create'])
    ->names(['create' => 'resource.build']);


/**
 * Child Resource Controller All Routes
 */
Route::resource('resource.childresource', ChildResourceController::class)->shallow();
