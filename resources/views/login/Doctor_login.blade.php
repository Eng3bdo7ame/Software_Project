@extends('layouts.all_layout_proj')
@vite(["resources/css/login.css"])
@section('Doctor_login_sectinon')

<section class="login_sectinon">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" /*action="{{ url('/Doctor_login')}}*/">
        @csrf

        <h3>Login Here</h3>

        <label for="email">Email</label>
        <input name="email" type="email" placeholder="Email" value="">

        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Password" value="">

        <button class="login_btn"><a href="Doctor_welecom_message"> Log In</a></button>
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