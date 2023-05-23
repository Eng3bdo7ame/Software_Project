@extends('layouts.all_layout_proj')
@vite(["resources/css/login.css"])
@section('Student_login_sectinon')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{ Session::get('error') }}
</div>
@endif
<section class="login_sectinon">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="get" /*action="{{ url('/Student_welecom_message')}}" * />
    @csrf

    <h3>Login Here</h3>

    <label for="email">Email</label>
    <input name="email" type="email" placeholder="Email">

    <label for="password">Password</label>
    <input name="password" type="password" placeholder="Password" value="">

    <button class="login_btn"><a href="Student_welecom_message"> Log In</a></button>
    <div class="remember_me">
        <div class="check_btn">
            <input type="checkbox" class="checkbox" />
            <span class="remember">Remember me</span>
        </div>
        <div>
            <span class="forgotten"><a href=""> Forgotten password</a></span>
        </div>
    </div>
    </form>
</section>


@endsection