@extends('Admin_Data.Admin_dashpord_layout')
@vite(["resources/css/student_create_account.css"])
@section('Student_create_account')

<section class="login_sectinon">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form class="section_form" method="post" action="{{ url('/Create_section') }}">
        @csrf
        <div>
            <h3 class="md-3">Add New Section</h3>

            <label for="username">Section_Name:</label>
            <input name="name" type="text" placeholder="Enter Section Name" value="">

            <label for="code">Section_Code:</label>
            <input name="code" type="text" placeholder="Enter Section Code" value="">

            <button class="login_btn">Create Now</button>
        </div>
    </form>
</section>

@endsection