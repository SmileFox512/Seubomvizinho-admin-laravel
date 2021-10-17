@inject('lang', 'App\Lang')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/markets.css" rel="stylesheet">
    @include('bsb.style', array())


    <style>
        div.form-wrapper {
            height: 100%;
            border-left: 1px solid white;
            justify-content: center;
            align-items: center;
            display: flex;
            padding-left: 80px;
            font-size: 20pt !important;
        }
        div.logo-wrapper {
            padding-right: 80px;
        }
        @media screen and (max-width: 768px) {
            .login {
                display: block !important;
              }
            div.logo-wrapper {
                padding-right: 15px;
            }
            div.form-wrapper {
                height: auto;
                border-left: 0px solid white;
                justify-content: center;
                align-items: center;
                display: flex;
                padding-left: 15px;
            }
        }
        body::after {
            content: "";
            /* background: url('./images/background.jpg'); */
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-size: cover;
            background-position: center center;
            position: absolute;
            z-index: -1;
        }
    </style>
</head>

<body class="q-login d-flex" >

    <div class="container-fluid d-flex flex-vertical-center justify-content-around" style="width: 100vw;min-height:500px;">

        <div class="login d-flex row align-items-center" style="justify-content:center;"  class="h250">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 logo-wrapper align-items-center">
                <div class="d-flex align-items-center q-mb20 q-mt20" style="justify-content:center; ">
                    <img class="" src="img/logo-new.png" height="200px">
                    <!-- <div class="d-flex" style="color: #9dc4d4; font-size:40px;">
                        OneOutlet <span style='font-size:20px'>®</span>
                    </div> -->
                </div>

            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 form-wrapper" >
                <form method="POST" action="{{ route('login') }}" >
                @csrf

                <div class="d-flex justify-content-around q-mb20 q-font-bold" style="color: #ffffff">
                    {{ $lang->get(569)}} {{--Sign in to start your session--}}
                    {{-- <br>
                    sfder --}}
                </div>

                <div class="d-flex justify-content-around q-mb20 q-font-bold" style="color: #9dc4d4">
                    <input id="email" type="email" style="min-width: 300px;" class="q-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                @error('email')
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="d-flex justify-content-around q-mb20 q-font-bold" style="color: #9dc4d4">
                    <input id="password" type="password" style="min-width: 300px;" class="q-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="d-flex q-mb20 q-font-bold" style="color: white">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-right: 10px">
                    {{$lang->get(570)}} {{--Remember Me--}}
                </div>

                <div class="d-flex q-mb20 " >
                    <button type="submit" class="q-btn-all q-color-warning waves-effect q-font-bold q-font-20" style="background-color: yellow!important; width: 100%; color: #484948">
                        {{$lang->get(571)}} {{--Login--}}
                    </button>
                </div>

    {{--            <a href="{{route('password.request')}}">Forgot Password?</a>--}}

                </form>
            </div>
        </div>
    </div>

</div>


<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="js/markets.js"></script>

</body>

</html>
