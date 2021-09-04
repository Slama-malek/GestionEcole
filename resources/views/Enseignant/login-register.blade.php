<!DOCTYPE html>
<!-- 
Template Name: Marvin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="{{asset('adm/dist/css/style.css ')}}"rel="stylesheet" type="text/css">
    
</head>

<body>
    
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex text-white auth-brand" href="#">
                 
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="{{url('/')}}" class="btn btn-outline-secondary">Acceuil</a>
                    
                   
            </header>
        <br> <br> <br>
       
		
            <div class="container-fluid">
                <div class="row">
                
                    <div class="col-xl-6  pa-5">
                   
                <br>
               
			<div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                           
                            <form action="{{ route('login') }}" method="post">

                                @csrf
                                <h1 class="display-4 text-center mb-10">Se connecter</h1>
                                <br>
                                <br>
                                <br>
                                <br>
										<p class="text-center mb-30"></p> 
                                <input type="hidden" name="usertype" id="usertype" value="enseignant">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="votre e-mail" class="@error('name') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                    @error('email')
                                        <span style="color:#b8242a">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password"  class="form-control" name="password" placeholder="mot de passe" class="@error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password" autofocus/>
                                    @error('password')
                                        <span style="color:#b8242a">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                           
                                        </div>
                                        
                                        <a href="#" class="forget-pwd">Mot de passe oublié?</a>
                                    </div>
                                </div>
                                <br>
                               
                                
                                <button class="btn btn-primary btn-block" type="submit">se connecter</button>
										
                                
                                    
                            </form>
                      
                    </div>
					</div>
					</div>
                    <div class="col-xl-6 pa-0">
							<br> 
		
		
		
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                            <br>
                            <br>
                               
                   
                            <form action="{{ route('registerEnseignant') }}" method="post">
                                @csrf
                                <h1 class="display-4 mb-10">Créer un compte</h1>
                               
                                    <p class="mb-30"></p>
                                <div class="form-group">
                                    <input type="hidden" name="usertype" id="usertype" value="enseignant">
                                    <input type="text" id="_name" class="form-control" placeholder="nom complet" class="@error('_name') is-invalid @enderror" name="_name" value="{{ old('_name') }}" required autocomplete="_name" autofocus/>
                                    @error('_name')
                                        <span style="color:#b8242a">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" id="_email" class="form-control" name="_email" placeholder="votre e-mail" class="@error('_name') is-invalid @enderror"  value="{{ old('_email') }}" required autocomplete="_email" autofocus/>
                                    @error('_email')
                                        <span style="color:#b8242a">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                    
                                <div class="form-group">
                                            <input type="password" id="_password" class="form-control" name="_password" placeholder="mot de passe" class="@error('_password') is-invalid @enderror" value="{{ old('_password') }}" required autocomplete="_password" autofocus/>
                                            @error('_password')
                                                <span style="color:#b8242a">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                            <input type="password" id="password_confirm" class="form-control" name="password_confirm" placeholder="confirmer mot de passe" class="@error('password_confirm') is-invalid @enderror" value="{{ old('password_confirm') }}" required autocomplete="password" autofocus/>
                                            @error('password_confirm')
                                                <span style="color:#b8242a">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    
                           
                                 <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">J'ai lu et j'accepte  <a href=""><u>les termes et conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                   
                                 
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

    <!-- Init JavaScript -->
    <script src="{{asset('adm/dist/js/init.js')}}"></script>

</body>

</html>