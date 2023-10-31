<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('app_name') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('landing/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-asset/css/util.css">
    <link rel="stylesheet" type="text/css" href="login-asset/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('login-asset/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <span class="login100-form-title p-b-49">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="name is reauired">
                        <span class="label-input100">name</span>
                        <input class="input100" type="text" name="nama" placeholder="Type your name">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <input type="hidden" name="role" value="peserta" readonly hidden>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="email is reauired">
                        <span class="label-input100">email</span>
                        <input class="input100" type="email" name="email" placeholder="Type your email">
                        <span class="focus-input100" data-symbol="&#xf15a;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Forgot password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>

                    {{-- <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div> --}}

                    <div class="flex-col-c p-t-25">
                        <span class="txt1 p-b-17">
                            Already Have account ? Sign In Using
                        </span>

                        <a href="{{ route('login') }}" class="txt2">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="login-asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/vendor/bootstrap/js/popper.js"></script>
    <script src="login-asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/vendor/daterangepicker/moment.min.js"></script>
    <script src="login-asset/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="login-asset/js/main.js"></script>

</body>

</html>