<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function stor(Request $request)
    {
        $Student = new Student();
        $Student->name = $request->name;
        $Student->email = $request->email;
        $Student->password = Hash::make($request->password);
        $Student->section = $request->section;
        $Student->save();
        return (back()->with('success', 'Register successfully'));
    }

    function login(Request $request)
    {
        $Student_Data = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        if (Auth::attempt($Student_Data)) {
            return redirect('Student_welecom_message')->with('success', 'Register successfully');
        } else
            return redirect('')->with('error', 'Error in one of the data');
    }
}
