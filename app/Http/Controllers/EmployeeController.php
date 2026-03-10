<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function AddEmployee(Request $req)
    {
        $data = $req->validate([
            'username'     => ['required', 'string', 'max:255'],
            'useremail'    => ['required', 'email', 'max:255'],
            'userphone'    => ['required', 'string', 'max:20'],
            'useraddress'  => ['required', 'string', 'max:255'],
            'usercity'     => ['required', 'string', 'max:255'],
            'usercountry'  => ['required', 'string', 'max:255'],
            'userposition' => ['required', 'string', 'max:255'],
        ]);

        DB::table('employees')->insert([
            'name'     => $data['username'],
            'email'    => $data['useremail'],
            'phone'    => $data['userphone'],
            'address'  => $data['useraddress'],
            'city'     => $data['usercity'],
            'country'  => $data['usercountry'],
            'position' => $data['userposition'],
        ]);

        return redirect()->route('employees.index');
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

            return view('welcome', ['employees' => $employee]);
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

            return view('welcome', ['employees' => $employee]);
        } else {
            echo 'Error in Deletion';
        }
    }
}
