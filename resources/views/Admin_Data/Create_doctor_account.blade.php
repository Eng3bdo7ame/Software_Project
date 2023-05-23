@extends('Admin_Data.Admin_dashpord_layout')
@vite(["resources/css/student_create_account.css"])
@section('Student_create_account')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<section class="login_sectinon">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="{{ url('/Create_doctor')}}">
        @csrf
        <h3>create accont</h3>

        <label for=" section">Select the section:</label>
        <input type="text" name="section" placeholder="cs..It..Is">

        <label for="username">Username</label>
        <input type="text" name="name" placeholder="username">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email or Phone">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">

        <button type="submit" class="login_btn">Create</button>
    </form>
</section>


@endsection