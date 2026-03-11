<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function ShowEmployees()
    {
        $employees = DB::table('employees')->orderBy('id')->cursorPaginate(5);

        return view('welcome', ['employees' => $employees]);
    }

    // Show Single Employee
    public function ShowEmployee($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();
        dd($employee);
    }

    public function AddEmployee(Request $req)
    {
        // $data = $req->validate([
        //     'username'     => ['required', 'string', 'max:255'],
        //     'useremail'    => ['required', 'email', 'max:255'],
        //     'userphone'    => ['required', 'string', 'max:20'],
        //     'useraddress'  => ['required', 'string', 'max:255'],
        //     'usercity'     => ['required', 'string', 'max:255'],
        //     'usercountry'  => ['required', 'string', 'max:255'],
        //     'userposition' => ['required', 'string', 'max:255'],
        // ]);

        DB::table('employees')->insert([
            'name'     => $req['username'],
            'email'    => $req['useremail'],
            'phone'    => $req['userphone'],
            'address'  => $req['useraddress'],
            'city'     => $req['usercity'],
            'country'  => $req['usercountry'],
            'position' => $req['userposition'],
        ]);

        return redirect()->route('employees.index');
    }


    public function UpdatePage($id)
    {
        $employee = DB::table('employees')
            ->find($id);
        // return $employee;
        return view('updateform', ['data' => $employee]);
    }


    public function UpdateEmployee(Request $req, $id)
    {
        $employee = DB::table('employees')
            ->where('id', $id)
            ->update([
                'name'     => $req['username'],
                'email'    => $req['useremail'],
                'phone'    => $req['userphone'],
                'address'  => $req['useraddress'],
                'city'     => $req['usercity'],
                'country'  => $req['usercountry'],
                'position' => $req['userposition'],
            ]);

        if ($employee) {
            return redirect()->route('employees.index');
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
