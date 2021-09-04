@extends('user.layouts.master')
@section('content')
@extends('user.layouts.master')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">
            <div class="content-box">
                <h1>Programme Primaire</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li>Programme Primaire</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- faq-page-section -->
    <section class="faq-page-section">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-y"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <div>
                            <h5></h5>
                            <h1>Programme Primaire</h1>
                        </div>
                        <div class="text">
                            <p>
                            L’école croit non seulement dans l’importance du Français et de l’anglais, des mathématiques et des sciences comme des éléments essentiels dans l’éducation des élèves tout au long de leurs années de primaire, mais aussi dans l’impact global des arts, du sport et de l’ouverture à la culture pour l’épanouissement  d’enfants bien équilibrés. Nous avons des attentes élevées pour chaque membre de notre communauté, parents, enseignants et élèves. Nous travaillons avec ardeur tout en veillant à garder une notion de plaisir. Notre travail d’équipe et l’esprit de communauté sont sans pareils.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 faq-column">
                    <div class="faq-content">
                        <ul class="accordion-box active-block">
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Y a-t-il un temps de sommeil ou de repos?</h4>
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Journée des enfants dans le besoin de l'armistice?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Le jeu en extérieur est-il supervisé?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                 <div class="acc-btn">
                                    <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                    <h4>Q. Comment les frais de scolarité et les frais sont-ils déterminés?</h4>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor incididunt ut labore magna aliqua enim minim veniam quis nostrud.</div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection