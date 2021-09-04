@extends('user.layouts.master')
@section('content')


<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">
<div class="container">
            <div class="content-box">
                <h1>Réglement interne</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li>Réglement interne</li>
                </ul>
            </div>
        </div>
    </section>
<section class="about-section style-two">
        <div class="anim-icon">
            <div class="icon icon-1 float-bob-x"></div>
            <div class="icon icon-3"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div>
                            <h5></h5>
                            <h1>Bienvennue à kidko </h1>
                        </div>
                       
                        <div class="text">
                            <p>De 7H30 à 18H30 (étude et garderie) Accueil des enfants par leur enseignante de 8H20 à 8H30. Accueil des externes dans leur cour respective entre 13H05 à 13H15. Absences Toute absence non prévue doit être signalée le matin par un appel téléphonique avant.</p>

 

De 7H30 à 18H30 (étude et garderie) Accueil des enfants par leur enseignante de 8H20 à 8H30. Accueil des externes dans leur cour respective entre 13H05 à 13H15. Absences Toute absence non prévue doit être signalée le matin par un appel téléphonique avant.</p>
                       <p>De 7H30 à 18H30 (étude et garderie) Accueil des enfants par leur enseignante de 8H20 à 8H30. Accueil des externes dans leur cour respective entre 13H05 à 13H15. Absences Toute absence non prévue doit être signalée le matin par un appel téléphonique avant.</p> </div>
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">Nous Conatcter</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="{{asset('cli/images/resource/about-6.jpg')}}" alt=""></figure>
                        <figure class="image image-2"><img src="{{asset('cli/images/resource/about-5.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection