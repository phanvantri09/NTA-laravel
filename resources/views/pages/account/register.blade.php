<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/viewAdmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/viewAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/viewAdmin/vendor/animsition/animsition.min.css')}}"\ rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('/viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/viewAdmin/css/theme.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{Session::get('success')}}
                                </div>
                            @endif 
                            @if(Session::has('error'))
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> {{Session::get('error')}}
                                </div> 
                            @endif
                            <form action="{{route('bookShop.postRegister')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    @error('userName')
                                        <small class="help-block">{{$message}}</small>
                                    @enderror
                                    <input class="au-input au-input--full" type="text" name="userName" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    @error('email')
                                        <small class="help-block">{{$message}}</small>
                                    @enderror
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    @error('password')
                                        <small class="help-block">{{$message}}</small>
                                    @enderror
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Number Phone</label>
                                    @error('numberPhone')
                                        <small class="help-block">{{$message}}</small>
                                    @enderror
                                    <input class="au-input au-input--full" type="text" name="numberPhone" placeholder="Number Phone">
                                </div>
                                <div class="form-group">
                                    <label>Address: T???nh - Huy???n - Th??nh Ph???</label>
                                    @error('address')
                                        <small class="help-block">{{$message}}</small>
                                    @enderror
                                    <input class="au-input au-input--full" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('/viewAdmin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/viewAdmin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ asset('/viewAdmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('/viewAdmin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('/viewAdmin/js/main.js')}}"></script>
    <script src="{{ asset('/viewAdmin/js/action.js')}}"></script>
</body>

</html>
<!-- end document-->