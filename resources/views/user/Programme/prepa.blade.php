@extends('user.layouts.master')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">
            <div class="content-box">
                <h1>Programme Prépartoire</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li>Programme Prépartoire</li>
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
                            <h1>Programme Prépartoire</h1>
                        </div>
                        <div class="text">
                            <p>Les classes préparatoires ouvrent aux apprentissages premiers et fondamentaux conduisant à une socialisation progressive et à des activités motrices de plus en plus développées.</p>

<p>le programme préparatoire basé sur l'approche Montessori : « Aide-moi à faire seul  », Maria Montessori.</p>

<p>Cette pédagogie Montessori est proposée aux élèves de 5 à 6 ans. Elle favorise le développement de l’enfant en respectant le rythme et la personnalité de chacun développe l’autonomie et l’autodiscipline. L’éveil psychomoteur est assuré par un matériel didactique spécifique, adapté aux besoins de chaque élève.</p>
                            
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