<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function ShowEmployees()
    {
        $employees = DB::table('employees')->get();
        return view('welcome', ['employees' => $employees]);
    }
}
