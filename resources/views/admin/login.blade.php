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
		<title>Authentification</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="{{asset('adm/vendors/jquery-toggles/css/toggles.css')}}"rel="stylesheet" type="text/css">
		<link href="{{asset('adm/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="{{asset('adm/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
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
									<form method="POST" action="{{ route('login') }}" >
									@csrf
										<h1 class="display-4 text-center mb-10"></h1>
										<p class="text-center mb-30"></p> 
										<div class="form-group">
										<input type="hidden" name="usertype" id="usertype" value="admin">
											
												
												<input class="form-control"  id="email" type="email"
														class="name{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
														value="{{ old('email') }}" required autofocus>
												<div class="clearfix">
													@if ($errors->has('email'))
													<span class="invalid-feedback">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
													@endif
												</div>
											
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Password" type="password"
										
										class="password{{ $errors->has('password') ? ' is-invalid' : '' }}"
										name="password" required>
								      <div class="clearfix">
								      	@if ($errors->has('password'))
									  	<span class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									   @endif
								         </div>
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										<div class="custom-control custom-checkbox mb-25">
											
											<label  for="same-address"><a href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a>
											</label> 

										</div>
										<button class="btn btn-primary btn-block" type="submit">{{ __('se Connecter') }}</button>
										
										<p class="text-center">Avez-vous déjà un compte? <a href="{{ route('register-admin') }}">S'inscrire</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



	

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