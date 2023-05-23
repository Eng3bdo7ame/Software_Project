@extends('layouts.all_layout_proj')
@vite(["resources/css/student_dashbord.css"])
@section('Admin_dash')
<section class="Student_dash">
    <div class="containerr">
        <div class="row">
            <div class="col-9">
                @yield('Doctor_liberary')
                @yield('add_subject')
                @yield('Add_New_Section')
                @yield('welecome_Admin_message')

            </div>
            <div class="aside_div col-3">
                <aside>
                    <div class="logo">
                        <img src="imges/Programming-pana.png    " alt="student" />
                    </div>
                    <div class="info">
                        <p class="username">Abdoooooo EL-Rahman Fareed Hathout</p>
                        <p class="email">generalmody200@gmail.com</p>
                    </div>
                    <div class="subj_libr">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ url('/Create_doctor')}}">Create Doctor Account</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ url('/Create_student')}}">Create Student Account</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ url('/Add_New_Subject')}}">Add New Subject</a>
                            </li>

                            <li class="list-group-item">
                                <a href="{{ url('/Add_New_section')}}">Add New Section</a>
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