<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        // $value = session()->all();
        $value = session()->except(["_previous", "_flash"]);
        echo "<pre>";
        print_r($value);
        echo "</pre>";

        // $value = session(['name', 'fatherName', 'age']);
        // echo ($value);
        // return redirect()->route('index');
    }

    public function store()
    {
        session([
            "name" => "Zohaib ",
            "fatherName" => " Aslam",
            "age" => "23",
        ]);

        // session()->regenerate();   This will Regenate and change the Token in Session
        session()->regenerateToken();
        return redirect()->route('sessionIndex');
    }

    public function delete()
    {
        // session()->forget(['name', 'fatherName', 'age']);
        session()->flush();
        return redirect()->route('sessionIndex');
    }
}
