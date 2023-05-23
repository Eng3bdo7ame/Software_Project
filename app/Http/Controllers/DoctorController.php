<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{

    function doctor_stor(Request $request)
    {
        $Doctor = new Doctor();
        $Doctor->name = $request->name;
        $Doctor->email = $request->email;
        $Doctor->password = Hash::make($request->password);
        $Doctor->section = $request->section;
        $Doctor->save();
        return (back()->with('success', 'Register successfully'));
    }

    function Doctor_login(Request $request)
    {
        $Doctor_Data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($Doctor_Data)) {
            return redirect('/Doctor_welecom_message')->with('success', 'Login successfully');
        }
        return back()->with('error', 'Error  in one of the data');
    }
}
