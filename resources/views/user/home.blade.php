@extends('user.layouts.master')

@section('content')



     <!-- main-slider -->
     <section class="main-slider style-one">
        <div class="main-slider-carousel owl-carousel owl-theme nav-style-one">
            <div class="slide" style="background-image:url({{asset('cli/images/main-slider/slider-1.jpg')}})">
                <div class="container">
                    <div class="content-box">
                        <h3>Meilleur choix</h3>
                        <h1>Rendez la vie de vos enfants spéciale</h1>
                        
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">
Nous contacter</a></div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{asset('cli/images/main-slider/slider-2.jpg')}})">
                <div class="container">
                    <div class="content-box">
                        <h3> Meilleur choix</h3>
                        <h1>Rendez la vie de vos enfants spéciale</h1>
                        
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">
Nous contacter</a></div>
                    </div>
                </div>
            </div>
        <div class="slide" style="background-image:url({{asset('cli/images/main-slider/slider-3.jpg')}}">
                <div class="container">
                    <div class="content-box">
                    <h3> Meilleur choix</h3>
                        <h1>Rendez la vie de vos enfants spéciale</h1>
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">
Nous contacter</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->


    <!-- about-section -->
    <section class="about-section">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 wow zoomIn" data-wow-delay="00ms" data-wow-duration="1500ms"></div>
            <div class="icon icon-3"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="{{asset('cli/images/resource/about-1.jpg')}}" alt=""></figure>
                        <figure class="image image-2"><img src="{{asset('cli/images/resource/about-2.jpg')}}" alt=""></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <h5>À propos de nous</h5>
                            <h1>Bienvenue à Kidko</h1>
  
                        </div>
                        <div class="bold-text">L’école kidko est un établissement qui vise l’épanouissement de chaque enfant.</div>
                        <div class="text">
                            <p>Dans un climat de responsabilité et de respect mutuel votre enfant pourra développer les habiletés nécessaires, lui permettant d’apprendre toute sa vie, dans une atmosphère favorisant l’éclosion de la culture et d’ouverture vers la communauté. Donc notre mission est de former un citoyen ouvert d’esprit, porteur de valeurs universelles et contributeur à l’édification d’un avenir meilleur.</p>
                        </div>
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">
Nous contacter</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- service-section -->
    <section class="service-section sec-pad" style="background-image: url({{asset('cli/images/background/service-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title style-two">
                            <h5>Services</h5>
                            <h1>
Meilleurs services pour les enfants</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 carousel-column">
                    <div class="carousel-content">
                        <div class="services-carousel owl-carousel owl-theme">
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-bus-1"></i></div>
                                    <h3><a href="#">
Service de Transport</a></h3>
                                    <div class="text">L'Ecole KidKo dispose de deux minibus et d'une minivan pour assurer le transport scolaire des élèves.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-running"></i></div>
                                    <h3><a href="#">
Entrainement Sportif</a></h3>
                                    <div class="text">L'Ecole KidKo vous offre des différentes activités sportives.</div>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-harvest"></i></div>
                                    <h3><a href="#">Cantine</a></h3>
                                    <div class="text">L'Ecole KidKo vous offre un menu varié et bien équilibré.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->


    <!-- classes-section -->
    <section class="classes-section sec-pad">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Clubs</h5>
                
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="{{asset('cli/images/resource/class-1.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Music Lessons</a></h3>
                            <div class="price">$480</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="{{asset('cli/images/resource/class-2.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Paper Plates Art</a></h3>
                            <div class="price">$580</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="{{asset('cli/images/resource/class-3.jpg')}}" alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="class-details.html"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">Education Lessons</a></h3>
                            <div class="price">$550</div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua.</div>
                            <ul class="info-box">
                                <li>Age: <span>2-4 Years</span></li>
                                <li>Size: <span>12 Seats</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- classes-section end -->


    <!-- feature-section -->
   
    <!-- feature-section end -->


    <!-- our-teachers -->
   
    <!-- our-teachers end -->


    <!-- event-section -->
    <section class="event-section" style="background-image: url({{asset('cli/images/background/event-bg.jpg')}});">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
        </div>
        <div class="container">
            <div class="sec-title centred">
                <h5>Evenements</h5>
                <h1>Nos Evenements</h1>
            </div>
            <div class="row">
                
                    
                @foreach ($events as $event)
                <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                    <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="event-details.html"><img src="{{asset('cli/images/resource/event-1.jpg')}}" alt=""></a></figure>
                            <div class="content-box">
                                <div class="date">{{$event->event_start_date}}</div>
                                <h3><a href="event-details.html"></a>{{$event->event_title}}</h3>
                                <div class="text">{{$event->event_description}}</div>
                                <div class="location"><i class="flaticon-pin"></i>Location: <span>NEW YORK</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
               
            </div> 
            
        </div>
    </section>
    <!-- event-section end -->


    <!-- testimonial-faq -->
   
    <!-- testimonial-faq end -->


    <!-- cta-section -->
    <section class="cta-section centred">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-2 rotate-me"></div>
        </div>
        <div class="parallax-scene parallax-scene-1 parallax-icon">
            <span data-depth="0.40" class="parallax-layer icon icon-1"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-2"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-3"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-4"></span>
            <span data-depth="0.50" class="parallax-layer icon icon-5"></span>
            <span data-depth="0.30" class="parallax-layer icon icon-6"></span>
            <span data-depth="0.40" class="parallax-layer icon icon-7"></span>
        </div>
        <div class="container">
            <div class="content-box">
                <h3>Rejoignez Kidko</h3>
                <h1>Inscrire votre enfant<br />dans Kidko</h1>
                <div class="text"> </div>
                <div class="btn-box"><a href="{{url('/inscription')}}" class="theme-btn">Inscrire maintenant</a></div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- gallery-section -->
    <section class="gallery-section sec-pad centred">
        <div class="container-fluid">
            <div class="sec-title">
                <h5>Gallery</h5>
                <h1>Photo Gallery</h1>
            </div>
            <div class="gallery-carousel owl-carousel owl-theme">
                @foreach ($galleries as $gallery)
                    
                
                <div class="gallery-block">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('storage/gallery_images/'.$gallery->cover_image)}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('storage/gallery_images/'.$gallery->cover_image)}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                    </div>
                </div>
               
                @endforeach
               
                
            </div>
        </div>
    </section>
    <!-- gallery-section end -->


    <!-- news-section -->
   
    <!-- news-section end -->

@endsection
