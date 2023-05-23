@extends('layouts.all_layout_proj')
@vite(["resources/css/student_dashbord.css"])
@section('Doctor_dash')
<section class="Student_dash">
    <div class="containerr">
        <div class="row">
            <div class="col-9">
                @yield('Doctor_liberary')
                @yield('add_subject')
                @yield('welecome_Doctor_message')

            </div>
            <div class="aside_div col-3">
                <aside>
                    <div class="logo">
                        <img src="imges/Programming-pana.png    " alt="student" />
                    </div>
                    <div class="info">
                        <p class="username">Dr. Ashraf EL-Sissy</p>
                        <p class="email">ashraf111@gmail.com</p>
                    </div>
                    <div class="subj_libr">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="Doctor_welecom_message">welecom Page</a>
                            </li>
                            <li class="list-group-item">
                                <a href="Doctor_liberary">My Subjects</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>

        </div>
    </div>
    </div>
</section>


@endsection