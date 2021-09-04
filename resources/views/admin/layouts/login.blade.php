<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Vitanet</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('cli/img/favicon..ico')}}" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>S'authentifier</h2>
        <form method="POST" action="{{ route('login') }}">
			@csrf
			
			<input type="hidden" name="usertype" id="usertype" value="admin">
			<div class="username">
				<span class="username">{{ __('Adresse e-mail') }}</span>
				<input  id="email" type="email"
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
			<div class="password-agileits">
				<span class="username">{{ __('Mot de passe') }}</span>
				<input  id="password" type="password"
                        class="password{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required>
				<div class="clearfix">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Se souvenir de moi<br>
				<a href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a><br>
			</div>
			<div class="login-w3">
                <button type="submit" >

                    {{ __('se connecter') }}

                </button>
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="{{url('/home')}}">Retour à la page d'accueil</a>
				</div>
				<div class="footer">
					<p>&copy; 2020 Pooled . All Rights Reserved | Design by <a href="">Optimatech</a></p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>