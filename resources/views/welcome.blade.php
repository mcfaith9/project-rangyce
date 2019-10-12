<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/ionicons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/owl.theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('landing_page_assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('global/plugins/sweetalert/sweetalert.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('global/css/form-lable-float.css')}}">
    </head>
    <body id="home">
        <div id="preloader"></div>      

        <div class="modal fade in" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close p-absolute top-9px left-90p" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        </div>
                        <form class="form-signin p-relative p-0" method="POST" action="{{ route('login') }}" style="background-color: #fff;">
                            {{ csrf_field() }}       
                            <div class="form-label-group">
                                <input  type="text" 
                                        id="username" 
                                        name="username"
                                        class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }} border-rad-none" 
                                        value="{{ old('username') }}"
                                        placeholder="Username" 
                                        required autofocus>
                                @if ($errors->has('username'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </div>
                                @endif
                                <label for="username">Username</label>
                            </div>
                            <div class="form-label-group">
                                <input  type="password" 
                                        id="password" 
                                        name="password" 
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} border-rad-none" 
                                        placeholder="Password" 
                                        required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                                
                                <label for="password">Password</label>
                            </div>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block border-rad-none">Sign in</button>
                            <div class="row m-5p">
                                <div class="col-md-6">
                                    <a class="btn btn-link" href="javascript:void(0);" data-toggle="modal" data-target="#register" data-dismiss="modal">
                                        I don't have account.
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-link" href="javascript:void(0);" data-toggle="modal" data-target="#reset-password" data-dismiss="modal">
                                        Forgot Password?
                                    </a>
                                </div>    
                                <div class="col-md-12 text-center">
                                    <a class="btn btn-primary border-rad-none m-0" href="#"><i class="ion-social-facebook"></i>&nbsp;Facebook Login</a>      
                                    <button class="btn btn-primary border-rad-none m-0"><i class="ion-social-github"></i>&nbsp;Github Login</button>
                                </div>                
                            </div>                                                 
                        </form>
                    </div> 
                    <div class="modal-footer">
                        <p class="mt-5 mb-3 text-muted text-center">&copy; rangyCE</p>
                    </div>
                </div>           
            </div>
        </div>

        <div class="modal fade in" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close p-absolute top-9px left-90p" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-3 font-weight-normal">Create Account</h1>
                        </div>
                        <form class="form-signin p-relative p-0" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}    
                            <div class="form-label-group">   
                                <input  id="username-register"
                                        type="text"
                                        class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} border-rad-none"
                                        name="username"
                                        value="{{ old('name') }}"
                                        placeholder="Username" 
                                        required autofocus>
                                @if ($errors->has('username'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </div>
                                @endif
                                <label for="username-register">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input  id="email" 
                                        type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} border-rad-none"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Email Address" 
                                        required>

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                                <label for="email">E-Mail Address</label>
                            </div>

                            <div class="form-label-group">
                                <input  id="password-register" 
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} border-rad-none"
                                        name="password"
                                        placeholder="Password" 
                                        required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                                <label for="password-register">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input  id="confirm-password" 
                                        type="password"
                                        class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} border-rad-none"
                                        name="password_confirmation"
                                        placeholder="Confirm Password" 
                                        required>
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                                <label for="confirm-password">Confirm Password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block border-rad-none" type="submit">Register</button>
                            <div class="row">
                                <div class="col-md-12 text-center m-5p">
                                    <a class="btn btn-link" href="javascript:void(0);" data-toggle="modal" data-target="#login" data-dismiss="modal">
                                        Already have an account
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div> 
                    <div class="modal-footer">
                        <p class="mt-5 mb-3 text-muted text-center">&copy; rangyCE</p>
                    </div>           
                </div>
            </div>
        </div>

        <div class="modal fade in" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="reset-password" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close p-absolute top-9px left-90p" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-3 font-weight-normal">Forgot Password</h1>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-signin p-relative p-0" method="POST" action="{{ url('/password/email') }}" style="background-color: #fff;">
                            {{ csrf_field() }}       
                            <div class="form-label-group">
                                <input  type="email" 
                                        id="resetPassword" 
                                        name="email"
                                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} border-rad-none" 
                                        value="{{ old('email') }}"
                                        placeholder="Email Address" 
                                        required autofocus>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                                <label for="resetPassword">Email Address</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block border-rad-none" type="submit">Reset Password</button>
                        </form>
                    </div> 
                    <div class="modal-footer">
                        <p class="mt-5 mb-3 text-muted text-center">&copy; rangyCE</p>
                    </div>           
                </div>
            </div>
        </div>

        <header class="sticky" id="header" style="z-index: 5;">
            <section class="container">
                <section class="row" id="logo_menu">
                    <section class="col-xs-7">
                        <a class="logo" href="">rangyCE</a>
                    </section>
                    <section class="col-xs-5">
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}" class="custom-btn toggle wow rotateIn" data-wow-delay="1s">
                                    HOME
                                </a>
                            @else
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#register" class="wow rotateIn custom-btn" data-wow-delay="1s">
                                    SIGNUP
                                </a>                    
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#login" class="wow rotateIn custom-btn" data-wow-delay="1s">
                                    LOGIN
                                </a>          
                            @endauth
                        </div>
                    </section>
                </section>
            </section>
        </header>

        <section id="banner" >
            <section class="container">
                <section class="row">
                    <div class="col-md-6">
                        <div class="headings">
                            <h1 class="wow animated fadeInDown">The future is here!</h1>
                            <p class="wow animated fadeInLeft">asdasdasdlk hasd/.landlkasnd las;nd las/;ndal s'nd a'sldlaks /ndasl/' dnasd naskdl; nasdk asnd;k asd'/ as</p>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div>
                                        <a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-android"></i> Play Store</a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-5">
                                    <div>
                                        <a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-apple"></i> App Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-xs hidden-sm">
                        <div class="hand-container">
                        <img class="iphone-hand img_res wow animated bounceInUp" data-wow-duration="1.2s" src="{{asset('images/subpopup.png')}}"></img>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
            </section>
        </section>   
        {{-- <script src="{{asset('landing_page_assets/js/jquery-2.1.3.min.js')}}"></script> --}}
        <script src="{{asset('global/js/jquery-1.11.1.min.js')}}"></script> 
        <script src="{{asset('global/plugins/bootstrap/js/bootstrap.js')}}"></script> 
        <script src="{{asset('global/plugins/sweetalert/sweetalert.min.js')}}"></script>
        <script src="{{asset('landing_page_assets/js/wow.min.js')}}"></script>
        <script src="{{asset('landing_page_assets/js/owl.carousel.js')}}"></script>
        <script src="{{asset('landing_page_assets/js/script.js')}}"></script>   
    </body>
</html>
