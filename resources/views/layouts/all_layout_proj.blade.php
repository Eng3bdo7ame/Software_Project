<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    @vite(["resources/css/layout_Nav_home.css"])
</head>

<body>
    <section class="Home">
        <header class="container my_container">
            <!-- <div class="container"> -->
            <div class="row Nav_row">
                <div class="logo col-lg-4 col-md-4">
                    <h2>Computer <span>& Information</span></h2>
                </div>
                <div class="linkes col-lg-6 col-md-8 col-12">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="Student_login">Student</a></li>
                        <li><a href="Doctor_login">Doctor</a></li>
                        <li><a href="Admin_login">Adminstartor</a></li>
                        <li><a href="">Send_Problem</a></li>
                    </ul>
                </div>
                <div class="subscribe col-lg-2">
                    <a class="btn" href="">Description</a>
                </div>
                <div class="icon_bar col-6 col-md-4">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <!-- </div> -->
        </header>
        @yield('content_Home')
        @yield('Student_login_sectinon')
        @yield('Doctor_login_sectinon')
        @yield('Admin_login_sectinon')
        @yield('Student_dash')
        @yield('Student_create_account')
        @yield('Doctor_dash')
        @yield('Admin_dash')
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>