<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function ShowEmployees()
    {
        $employees = DB::table('employees')->get();

        return view('welcome', ['employees' => $employees]);
    }

    public function ShowEmployee($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();
        dd($employee);
    }

    public function AddEmployee()
    {
        $employee = DB::table('employees')
            ->insertOrIgnore([
                'name' => 'Zohaib aslam',
                'email' => 'akram@gmail.com',
                'phone' => '12345678910',
                'address' => 'This is address line',
                'city' => 'City name',
                'country' => 'Country Name',
                'position' => 'Employee Positon',
            ]);
        if ($employee) {
            echo '<h1>Employee Successfully added.</h1>';
            dd($employee);
        } else {
            echo '<h1> Email arleady Exsist</h1>';
            dd($employee);
        }
    }

    public function UpdateEmployee()
    {
        $employee = DB::table('employees')
            ->where('id', 5)
            ->update([
                'city' => 'MALTA ',
            ]);
        if ($employee) {
            echo '<h1>Employee Successfully Updated.</h1>';
            dd($employee);

            return view('welcome', ['employees' => $employees]);
        } else {
            echo '<h1> Error to Update</h1>';
            dd($employee);
        }
    }

    public function DeleteEmployee($id)
    {
        $employee = DB::table('employees')
            ->where('id', $id)
            ->delete();
        if ($employee) {
            echo 'Employee Deleted successfully';

            return view('welcome', ['employees' => $employees]);
        } else {
            echo 'Error in Deletion';
        }

    }
}
