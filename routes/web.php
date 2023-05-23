<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;


/*********************All get page view***************************** */

Route::get('/home', [ViewController::class, 'home']);

//All Student Viewing
Route::get('/student_dash', [ViewController::class, 'student_dash']);
Route::get('/Student_liberary', [ViewController::class, 'Student_liberary']);
Route::get('/Student_lib_2', [ViewController::class, 'Student_lib_2']);
Route::get('/Student_Material', [ViewController::class, 'Student_Material']);
Route::get('/Student_welecom_message', [ViewController::class, 'Student_welecom_message']);

/******************************************************** */

//All Doctor Viewing
Route::get('/Doctor_dash', [ViewController::class, 'Doctor_dash']);
Route::get('/Doctor_add_subjects', [ViewController::class, 'Doctor_add_subjects']);
Route::get('/Doctor_liberary', [ViewController::class, 'Doctor_liberary']);
Route::get('/Doctor_welecom_message', [ViewController::class, 'Doctor_welecom_message']);

/******************************************************** */

//All Admin Viewing
Route::get('/Admin_dash', [ViewController::class, 'Admin_dash']);
Route::get('/Add_New_section', [ViewController::class, 'Add_New_section']);
Route::get('/Add_New_Subject', [ViewController::class, 'Add_New_Subject']);
Route::get('/Create_doctor', [ViewController::class, 'Create_doctor']);
Route::get('/Create_student', [ViewController::class, 'Create_student']);
Route::get('/Admin_welecom_message', [ViewController::class, 'Admin_welecom_message']);

/************************************************************ */
//Login Form Viewing
Route::get('/Admin_login', [ViewController::class, 'Admin_login']);
Route::get('/Student_login', [ViewController::class, 'Student_login']);
Route::get('/Doctor_login', [ViewController::class, 'Doctor_login']);

/********************All post page view****************************** */
/************************* post student page************************ */
Route::post('/Create_student', [StudentController::class, 'stor']);
Route::post('/login', [StudentController::class, 'login']);

/************************* post doctor page************************ */
Route::post('/Create_doctor', [DoctorController::class, 'doctor_stor']);
Route::post('/Doctor_login', [DoctorController::class, 'Doctor_login']);

/************************post Subject***************************************/
Route::post('/Create_subject', [SubjectController::class, 'subject_stor']);

/************************post section***************************************/
Route::post('/Create_section', [SectionController::class, 'section_stor']);
