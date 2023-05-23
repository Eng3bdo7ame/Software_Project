@extends('layouts.all_layout_proj')
@vite(["resources/css/student_dashbord.css"])
@section('Student_dash')

<section class="Student_dash">
    <div class="containerr">
        <div class="row">
            <div class="col-9">
                @yield('Student_liberary')
                @yield('Material_registration')
                @yield('welecome_message')
                @yield('Student_lib_2')

            </div>
            <div class="aside_div col-3">
                <aside>
                    <div class="logo">
                        <img src="imges/Programming-pana.png    " alt="student" />
                    </div>
                    <div class="info">
                        <p class="username">Abd EL-Rahman Fareed Hathout</p>
                        <p class="email">generalmody200@gmail.com</p>
                    </div>
                    <div class="subj_libr">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="Student_welecom_message">welecom Page</a>
                            </li>
                            <li class="list-group-item">
                                <a href="Student_Material">Material registration</a>
                            </li>
                            <li class="list-group-item">
                                <a href="Student_liberary">My library
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>

        </div>
    </div>

</section>


@endsection