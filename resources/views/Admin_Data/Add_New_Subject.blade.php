@extends('Admin_Data.Admin_dashpord_layout')
@vite(["resources/css/student_create_account.css"])
@section('Student_create_account')

<section class="login_sectinon">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class="subject_rejester" method="post" action="{{url('/Create_subject')}}">
        @csrf

        <h3>Add_New_Subject</h3>
        <label for="username">Subject_Name:</label>
        <input name="name" type="text" placeholder="Enter Section Name" value="">

        <label for="code">Subject_Code:</label>
        <input name="code" type="text" placeholder="Enter Section Code" value="">

        <label for="Doctor_name">Doctor_Name:</label>
        <input name="Doctor_name" type="text" placeholder="Enter Doctor Name">

        <label for=" section">Select the section:</label>
        <input type="text" name="section" placeholder="cs..It..Is">
        <label>This Subject Depend :</label>
        <div class="select_section">
            <label> softwate1</label>
            <input type="checkbox" name="materials[]" value="softwate1">
            <label> softwate2</label>
            <input type="checkbox" name="materials[]" value="softwate2">
            <label> Programing</label>
            <input type="checkbox" name="materials[]" value="Programing">
            <label> operating system</label>
            <input type="checkbox" name="materials[]" value="Programing">
        </div>


        <button class="login_btn">create Now</button>

    </form>
</section>


@endsection