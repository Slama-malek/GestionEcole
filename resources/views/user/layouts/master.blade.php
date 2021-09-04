<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Kidko/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 21:47:55 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Kidko</title>

<!-- Stylesheets -->
<link href="{{asset('cli/css/style.css')}}" rel="stylesheet">
<link href="{{asset('cli/css/responsive.css')}}" rel="stylesheet">
<link rel="icon" href="{{asset('cli/images/favicon.ico')}}" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->


    <!-- search-box-layout -->
    <div class="wraper_flyout_search">
        <div class="table">
            <div class="table-cell">
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-layer"></div>
                <div class="flyout-search-close">
                    <span class="flyout-search-close-line"></span>
                    <span class="flyout-search-close-line"></span>
                </div>
                <div class="flyout_search">
                    <div class="flyout-search-title">
                        <h4>Search</h4>
                    </div>
                    <div class="flyout-search-bar">
                        <form role="search" method="get" action="#">
                            <div class="form-row">
                                <input type="search" placeholder="Type to search..." value="" name="s" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-box-layout end -->


    <!-- Main Header -->
    <header class="main-header">

        <div class="header-top">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="social-links pull-left">
                        <ul class="social-list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                    <div class="header-info pull-right">
                        <ul class="info-list">
                           
                            <li>
                                <i class="fas fa-user"></i>
                                @if(Auth::guest())
                                <a href="{{url('login-parent')}}">Espace parent </a>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <a href="{{url('login-enseignant')}}">Espace Enseignant</a>
                                </li>
                                @elseif( Auth::user()->usertype=="parent")

                            <a href="{{url('dashboard-parents')}}" target="_blank"> {{Auth::user()->name}}</a>
                            @elseif(Auth::user()->usertype=="enseignant")
                            <a href="{{url('dashboard-enseignant')}}" target="_blank"> {{Auth::user()->name}}</a>
                            @else
                            <a href="{{url('admin')}}" target="_blank"> {{Auth::user()->name}}</a>
                                @endif
                            </li>
                           
                            <select onChange="location.href='locale/'+this.options[this.selectedIndex].value+''">
                            <option value="">--Language--</option>
                            <option value="en"><a href="locale/en">English</a></option>
                             <option value="fr"><a href="locale/fr">Français</a></option>
    
          </select>
                            

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="{{url('/')}}"><img src="{{asset('cli/images/logo.png')}}" alt=""></a></figure>
                    </div>
                    <div class="nav-outer pull-right clearfix">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix ">
                                    <ul class="navigation clearfix">
                                    <li><a href="{{url('/')}}">{{ __("Accueil") }}</a>
                                            
                                        </li>
                                        <li class="dropdown"><a href="#">{{ __("Notre école") }}</a>
                                        <ul>
                                                <li><a href="{{url('/Programme-prepartoire')}}">Programme Préparatoire</a></li>
                                                <li><a href="{{url('/Programme-primaire')}}">Programme Primaire</a></li>
                                                <li><a href="{{url('/reglement')}}">Réglement interne</a></li>
                                           
                                            </ul>
                                        </li> 
                                        <li><a  href="{{url('/gallerie/photos')}}">{{ __("Gallerie") }}</a>
                                            
                                        </li> 
                                        <li class="dropdown"><a href="#">{{ __("Activités") }}</a>
                                        <ul>
                                                <li><a href="{{url('/clubs')}}">Clubs</a></li>
                                                <li><a href="{{url('/events')}}">Évenements</a></li>
                                                <li><a href="{{url('/sorties')}}">Sorties</a></li>
                                           
                                            </ul>
                                        </li> 
                                       
                                        
                                            
                                        </li>
                                        <li class="dropdown"><a href="#">{{ __("Admission") }}</a>
                                            <ul>
                                                <li><a href="{{url('/inscription')}}">{{ __("Inscription") }}</a></li>
                                                <li><a href="{{url('/Procedures')}}">Procédures</a></li>
                                            </ul>
                                        </li>  
                                                                    
                                        <li><a href="{{url('/contact')}}">Contact</a></li>
                                        

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="outer-box">
                            <ul class="outer-content">
                                <li class="header-flyout-searchbar">
                                    <i class="fa fa-search"></i>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="{{asset('cli/images/small-logo.png')}}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{url('/')}}">{{ __("Accueil") }}</a>
                                    
                                </li>
                                <li class="dropdown"><a href="#">{{ __("Notre école") }}</a>
                                        <ul>
                                                <li><a href="{{url('/Programme-prepartoire')}}">Programme Préparatoire</a></li>
                                                <li><a href="{{url('/Programme-primaire')}}">Programme Primaire</a></li>
                                                <li><a href="{{url('/reglement')}}">Réglement interne</a></li>
                                           
                                            </ul>
                                        </li>  
                                        <li><a href="{{url('/gallerie/photos')}}">{{ __("Gallerie") }}</a>
                                            <ul>
                                                <li><a href="{{url('/gallerie/photos')}}">{{ __("Photos") }}</a></li>
                                                <li><a href="{{url('/gallerie/vidéos')}}">{{ __("vidéos") }}</a></li>
                                           
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">{{ __("Activités") }}</a>
                                        <ul>
                                                <li><a href="{{url('/clubs')}}">Clubs</a></li>
                                                <li><a href="{{url('/events')}}">Évenements</a></li>
                                                <li><a href="{{url('/sorties')}}">Sorties</a></li>
                                           
                                            </ul>
                                        </li>
                               
                                
                                   
                                </li>
                                <li class="dropdown"><a href="#">{{ __("Admission") }}</a>
                                            <ul>
                                                <li><a href="{{url('/inscription')}}">{{ __("Inscription") }}</a></li>
                                                <li><a href="{{url('/Procedures')}}">Procédures</a></li>
                                            </ul>
                                        </li>  
                                                            
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->


   @yield('content')

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="parallax-scene parallax-scene-2 parallax-icon">
                <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
                <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
                <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
                <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
            </div>
            <div class="container">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <h3 class="widget-title">A propos de Nous</h3>
                                <div class="widget-content">
                                    <div class="text">
                                        <p>L’école kidko est un établissement qui vise l’épanouissement de chaque enfant.</p>
                                        <p>Dans un climat de responsabilité et de respect mutuel votre enfant pourra développer les habiletés nécessaires, lui permettant d’apprendre toute sa vie, dans une atmosphère favorisant l’éclosion de la culture et d’ouverture vers la communauté. Donc notre mission est de former un citoyen ouvert d’esprit, porteur de valeurs universelles et contributeur à l’édification d’un avenir meilleur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="link-widget footer-widget">
                                <h3 class="widget-title">Liens utiles</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="{{url('/reglement')}}">À propos de nous</a></li>
                                        <li><a href="{{url('/clubs')}}">Nos Clubs</a></li>
                                        
                                        <li><a href="{{url('/contact')}}">Contacter Nous</a></li>
                                        <li><a href="{{url('/gallerie/photos')}}">Notre Galerie</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h3 class="widget-title">Entrer en Contact</h3>
                                <div class="widget-content">
                                    <div class="text"></div>
                                    <ul class="info-list">
                                        <li><i class="fas fa-home"></i>1201 park street, Fifth Avenue, Dhanmondy, Dhaka</li>
                                        <li><i class="fas fa-phone"></i><a href="tel:88657524332">[88] 657 524 332</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-container clearfix">
                    <div class="left-content pull-left">
                        <div class="copyright">Copyright &copy; <a href="#"></a> 2019. All Rights Reserved</div>
                    </div>
                    <div class="right-content pull-right">
                        <figure class="footer-logo"><a href="{{url('/')}}"><img src="{{asset('cli/images/footer-logo.png')}}" alt=""></a></figure>
                        <ul class="social-style-one footer-social clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->
    



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fa fa-arrow-up"></i>
</button>



<!-- jequery plugins -->
<script src="{{asset('cli/js/jquery.js')}}"></script>
<script src="{{asset('cli/js/popper.min.js')}}"></script>
<script src="{{asset('cli/js/bootstrap.min.js')}}"></script>

<script src="{{asset('cli/js/owl.js')}}"></script>
<script src="{{asset('cli/js/wow.js')}}"></script>
<script src="{{asset('cli/js/validation.js')}}"></script>
<script src="{{asset('cli/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('cli/js/appear.js')}}"></script>
<script src="{{asset('cli/js/parallax.min.js')}}"></script>
<script src="{{asset('cli/js/isotope.js')}}"></script>
<script src="{{asset('cli/js/jquery-ui.js')}}"></script> 

<!-- main-js -->
<script src="{{asset('cli/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Kidko/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Apr 2020 21:50:28 GMT -->
</html>
