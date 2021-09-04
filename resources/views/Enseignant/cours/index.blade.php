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
	<title>Enseignant | cours</title>
	<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap Dropzone CSS -->
	<link href="{{asset('adm/vendors/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Bootstrap Dropzone CSS -->
	<link href="{{asset('adm/vendors/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
	
	<!-- Toggles CSS -->
	<link href="{{asset('adm/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('adm/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="{{asset('adm/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-horizontal-nav">
	
		<!-- Top Navbar -->
		@include('Enseignant.layouts.navbar')
		<!-- Setting Panel -->
	
		<!-- /Setting Panel -->
		
		<!-- Main Content -->
		<div class="hk-pg-wrapper">
			<!-- Breadcrumb -->
			<nav class="hk-breadcrumb" aria-label="breadcrumb">
				<ol class="breadcrumb breadcrumb-light bg-transparent">
					<li class="breadcrumb-item"><a href="#">Cours</a></li>
					<li class="breadcrumb-item active" aria-current="page">Listes des cours</li>
				</ol>
			</nav>
			<!-- /Breadcrumb -->
		
			<!-- Container -->
			<div class="container">
				<!-- Title -->
				<div class="hk-pg-header">
					<h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="book"></i></span></span>Cours</h4>
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
					
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Listes des Cours</h5>
                            <p class="mb-25"></p>
                            <div class="row">
                                <div class="col-sm">
									@foreach ($cours as $cr)
										
									
                                    <div class="media pa-20 border border-2 border-light rounded mb-20">
                                        <img class="align-self-start mr-15 circle d-66" src="{{asset('adm/images/Icon_cours_enligne2-3.png')}}" alt="Generic placeholder image">
                                        <div class="media-body">
										<h6 class="mb-5">{{$cr->nom_co}}</h6>
											<p class=""> {{$cr->description}} </div>
											<a    href="{{asset('storage/cours/'.$cr->file)}}" target="_blank"> Afficher</a>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </section>
                        <section class="hk-sec-wrapper">
							<h5 class="hk-sec-title">Dropzone</h5>
							<p class="mb-40">A lightweight open source library that provides drag’n’drop file uploads with image previews.</p>
							<div  class="row">
								<div class="col-sm">
									
								</div>
							</div>
						</section>
					</div>	
				</div>
				<!-- /Row -->
			</div>
			<!-- /Container -->
			
			<!-- Footer -->
			<div class="hk-footer-wrap container">
				<footer class="footer">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<p>Pampered by<a href="https://hencework.com/" class="text-dark" target="_blank">Hencework</a> © 2019</p>
						</div>
						<div class="col-md-6 col-sm-12">
							<p class="d-inline-block">Follow us</p>
							<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
							<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
							<a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
						</div>
					</div>
				</footer>
			</div>	
			<!-- /Footer -->
		
		</div>
		<!-- /Main Content -->
	
	</div>
	<!-- /HK Wrapper -->
	
	<!-- JavaScript -->
	
	<!-- jQuery -->
	<script src="{{asset('adm/vendors/jquery/dist/jquery.min.js')}}"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="{{asset('adm/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
	<script src="{{asset('adm/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('adm/dist/js/jquery.slimscroll.js')}}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Dropzone JavaScript -->
	<script src="{{asset('adm/vendors/dropzone/dist/dropzone.js')}}"></script>
	
	<!-- Dropify JavaScript -->
	<script src="{{asset('adm/vendors/dropify/dist/js/dropify.min.js')}}"></script>
	
	<!-- Form Flie Upload Data JavaScript -->
	<script src="{{asset('adm/dist/js/form-file-upload-data.js')}}"></script>
	
	<!-- FeatherIcons JavaScript -->
	<script src="{{asset('adm/dist/js/feather.min.js')}}"></script>
	
	<!-- Toggles JavaScript -->
	<script src="{{asset('adm/vendors/jquery-toggles/toggles.min.js')}}"></script>
	<script src="{{asset('adm/dist/js/toggle-data.js')}}"></script>

	<!-- Init JavaScript -->
	<script src="{{asset('adm/dist/js/init.js')}}"></script>
</body>
</html>