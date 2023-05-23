<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    //Home viewing
    function home()
    {
        return view('home');
    }

    /**************************************** */
    //student viewing
    function student_dash()
    {
        return view('Student_Data.Student_dashpord_layout');
    }
    function Student_liberary()
    {
        return view('Student_Data.Student_liberary');
    }

    function Student_Material()
    {
        return view('Student_Data.Material_registration');
    }

    function Student_lib_2()
    {
        return view('Student_Data.Student_lib_2');
    }

    function Student_welecom_message()
    {
        return view('/Student_Data.welecom_message');
    }

    /*************************************************** */

    //Doctor viewing
    function Doctor_dash()
    {
        return view('Doctor_Data.Doctor_dashpord_layout');
    }

    function Doctor_add_subjects()
    {
        return view('Doctor_Data.Doctor_add_subjects');
    }

    function Doctor_liberary()
    {
        return view('Doctor_Data.Doctor_liberary');
    }

    function Doctor_welecom_message()
    {
        return view('Doctor_Data.welecom_message');
    }

    /******************************************************** */
    function Admin_dash()
    {
        return view('Admin_Data.Admin_dashpord_layout');
    }
    function Add_New_section()
    {
        return view('Admin_Data.Add_New_section');
    }

    function Add_New_Subject()
    {
        return view('Admin_Data.Add_New_Subject');
    }

    function Create_doctor()
    {
        return view('Admin_Data.Create_doctor_account');
    }

    function Create_student()
    {
        return view('Admin_Data.Create_student_account');
    }
    function Admin_welecom_message()
    {
        return view('Admin_Data.welecom_message');
    }

    /*************************************************** */
    //Login Form View

    function Admin_login()
    {
        return view('login.Admin_login');
    }

    function Student_login()
    {
        return view('login.Student_login');
    }

    function Doctor_login()
    {
        return view('login.Doctor_login');
    }
}
