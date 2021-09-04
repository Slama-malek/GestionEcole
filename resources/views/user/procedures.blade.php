@extends('user.layouts.master')
@section('content')


<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">
<div class="container">
            <div class="content-box">
                <h1>Procédures</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li>Procédure </li>
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
                            <h1>Les Procédures</h1>
                        </div>
                        <div class="bold-text">Pour le traitement des dossiers, nous tiendrons compte de l'ordre d'enregistrement. Nous restons à votre disposition pour de plus amples informations.</div>
                        <div class="text">
                            <p>Voici la description des étapes à suivre pour l’admission de vos enfants à l’Ecole KidKo :<br>

 

1- Compléter soigneusement la formulaire de pré-inscription.<br>

 

Pour toutes les classes, la politique de notre école veut que nous nous référions à l’année de naissance de votre enfant, ainsi qu’à son niveau d'acquisition dans la classe précédente.<br>

 

2- Nous vous fixerons une date pour venir à la rencontre de notre équipe d’admission et pour visiter notre école. Durant cette journée, votre enfant passera un test de niveau.<br>

 

3- Nous vous remercions d’apporter les documents suivants le jour de votre rendez-vous :<br>

2  Actes de naissance de l'enfant (originaux).<br>
4 photos d’identité de l’enfant.<br>
Certificat de vaccination (original et copie).<br>
Dossier médical de bonne santé. <br>
Copie de la carte d'identité du père et de la mère.<br>
1 photo d'identité du père et de la mère.<br>
La copie des deux derniers bulletins scolaires (pour le primaire)<br>
2 enveloppes timbrées portant l’adresse des parents/tuteur légal.<br>
1 enveloppe Kraft 16,5×23cm.<br>
 

Veuillez rechercher les documents dès que vous remplissez la formulaire de pré-inscription afin que vous les ayez en main le jour du rendez-vous. Nous exigeons tous les documents pour continuer la procédure.
<br>
 

4- Si les résultats du test de niveau sont favorables et les critères d’admission remplis, vous serez invités à une rencontre avec la directrice générale organisée par le bureau des admissions. Les deux parents doivent impérativement assister à cette rencontre. Par la suite, dans un délai très bref, nous vous communiquerons la décision finale selon  la disponibilité des places : soit admis, soit sur liste d'attente.
<br>
 

5- Si votre enfant est accepté, nous vous remercions de régler les frais d’inscription dans les trois jours qui suivent la décision finale d'admission.
<br>
 

 

Nous sommes à votre entière disposition pour tout autre renseignement.</p>
                        </div>
                        <div class="btn-box"><a href="{{url('/contact')}}" class="theme-btn">Nous contacter</a></div>
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