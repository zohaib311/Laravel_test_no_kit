<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    private function employeePayload(UserRequest $req): array
    {
        return [
            'name' => $req->input('username'),
            'email' => $req->input('useremail'),
            'phone' => $req->input('userphone'),
            'address' => $req->input('useraddress'),
            'city' => $req->input('usercity'),
            'country' => $req->input('usercountry'),
            'position' => $req->input('userposition'),
        ];
    }

    public function ShowEmployees()
    {
        $employees = Employee::query()
            ->leftJoin('cities as c', 'employees.city', '=', 'c.id')
            ->select(['employees.*', 'c.city_name'])
            ->paginate(5, pageName: 'p');

        return view('welcome', ['employees' => $employees]);
    }

    public function AdminEmployees()
    {
        $employees = Employee::query()
            ->leftJoin('cities as c', 'employees.city', '=', 'c.id')
            ->select(['employees.*', 'c.city_name'])
            ->paginate(5, pageName: 'p');

        return view('admin-employes', ['employees' => $employees]);
    }

    // Show Single Employee
    public function ShowEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        dd($employee);
    }

    public function AddEmployee(UserRequest $req)
    {
        $employee = Employee::create($this->employeePayload($req));

        // dd($employee);
        return redirect()->route('employees.index');
    }


    public function UpdatePage($id)
    {
        $employee = Employee::findOrFail($id);
        return view('updateform', ['data' => $employee]);
    }


    public function UpdateEmployee(UserRequest $req, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($this->employeePayload($req));

        return redirect()->route('employees.index');
    }

    public function DeleteEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }

    // Join Use 

    //  public function JoinEmployee(){
    //     $employee = DB::table('employees')
    //     ->join('')
    //  }

}
