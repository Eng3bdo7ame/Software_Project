<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subjects;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class SubjectController extends Controller
{
    function subject_stor(Request $request)
    {
        $Subjects = new Subjects();
        $Subjects->name = $request->name;
        $Subjects->code = $request->code;
        $Subjects->section = $request->section;
        $Subjects->Doctor_name = $request->Doctor_name;
        $Subjects->materials = json_encode($request->materials);
        $Subjects->save();
        return (back()->with('success', 'Register successfully'));
    }
}
