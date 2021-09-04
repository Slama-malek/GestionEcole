<!DOCTYPE html>
<!-- 
Template Name: Marvin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Inscription</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{asset('adm/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                   
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                  
                                </a>
                <form action="{{route('register-admin')}}" method="post">
                    @csrf   
                    <h1 class="display-4 mb-10 text-center">S'inscrire</h1>
                    <input type="hidden" name="usertype" id="usertype" value="admin">
                    <div class="form-group">
                        
                        <input id="name" class="form-control" placeholder="Nom"type="text" class="name @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <div class="clearfix">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <input id="email" class="form-control" placeholder="Email"type="email" class="name @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <div class="clearfix">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <input id="password" class="form-control" placeholder="Mot de passe" type="password" class="password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <div class="clearfix">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                       
                        <input id="password-confirm" class="form-control" placeholder="Confirm mot de passe"type="password" class="password" name="password_confirmation" required autocomplete="new-password">
                        <div class="clearfix">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>
                    </div>
                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">{{ __("S'inscrire") }}</button>
                    
                    <div class="clearfix"></div>
                </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{asset('adm/vendors/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('adm/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('adm/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('adm/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('adm/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{asset('adm/dist/js/feather.min.js')}}"></script>

    <!-- Toggles JavaScript -->
    <script src="{{asset('adm/vendors/jquery-toggles/toggles.min.js')}}"></script>
    <script src="{{asset('adm/dist/js/toggle-data.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('adm/dist/js/init.js')}}"></script>
</body>

</html>