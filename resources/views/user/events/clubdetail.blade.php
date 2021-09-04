@extends('user.layouts.master')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">

    <div class="container">
        <div class="content-box">
            <h1>Club Détails</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Accueil</a></li>
                <li>Clubs</li>
            </ul>
        </div>
    </div>
</section>
<section class="class-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="class-details-content">
                    <div class="inner-box">
                        <div class="upper-content">
                            <div class="sec-title style-two">
                                <h5>Description</h5>
                                <h1>{{$club->nom}}</h1>
                            </div>
                            <div class="bold-text">{{$club->description}}</div>
                            <div class="info-box">
                                <ul class="clearfix">
                                    <li>
                                        <figure class="thumb-box"><img src="images/resource/author-thumb.png" alt=""></figure>
                                        <h6>Teacher</h6>
                                        <h5>Kevin Spacey</h5>
                                    </li>
                                    <li>
                                        <h6>Category</h6>
                                        <h5>Mathematics</h5>
                                    </li>
                                    <li>
                                        <h6>Cost</h6>
                                        <h5>$480</h5>
                                    </li>
                                    <li class="btn-box"><a href="#" class="theme-btn">Read More</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3>Class Description</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.</p>
                            </div>
                            <figure class="image-box"><img src="images/resource/class-details.jpg" alt=""></figure>
                            <h3>Requirements</h3>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie labore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Repreh enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                            </div>
                            <ul class="list">
                                <li>Aliquam sit amet mi vitae turpis gravida vulputate.</li>
                                <li>Proin a orci nec sapien condimentum imperdiet.</li>
                                <li>Suspendisse viverra lectus eu augue efficitur pulvinar.</li>
                                <li>Mauris a purus ut mauris sodales ultrices.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="class-details-sidebar">
                    <div class="inner-box">
                        <h3>Informations</h3>
                        <div class="text"></div>
                        <ul class="info-list">
                            <li>
                                <h5>
                                    Tranche d'âge:</h5>
                                <span>{{$club->age}}</span>
                            </li>
                            <li>
                                <h5>Taille du club:</h5>
                                <span>{{$club->size}} 
                                     élèves dans un club</span>
                            </li>
                            <li>
                                <h5>
                                    Horaire</h5>
                                <span>{{ \Carbon\Carbon::parse($club->horaire_debut)->format('H:i')}} à{{ \Carbon\Carbon::parse($club->horaire_fin)->format('H:i')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection