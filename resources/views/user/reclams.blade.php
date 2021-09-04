@extends('user.layouts.master')
@section('content')
 <!--Page Title-->
 <section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Contact</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->





<!-- contact-form-section -->
<section class="contact-form-section sec-pad">
    <div class="container">
        <div class="sec-title centred">
            <h5>Réclamation</h5>
            <h1>Contacter nous!</h1>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 form-column">
                <div class="contact-form">
                    <form method="POST" action="{{route('reclams.store')}}" class="billing-form" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text"  id="nom_p" name="nom_p" placeholder="Nom du parent*" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text"  id="prenom_p" name="prenom_p" placeholder="Prénom du parent*" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text"  id="nom_e" name="nom_e" placeholder="Nom d'éleve" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text"  id="prenom_e" name="prenom_e" placeholder="Prénom d'éleve" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="email"  id="email" name="email" placeholder="Votre Email*" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <input type="text"  id="tel" name="tel" placeholder="Télephone*" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="sujet" placeholder="sujet*" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea id="message" name="message" placeholder="Ecrire ton  message*"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button type="submit" class="theme-btn" name="submit-form">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-form-section end -->


<!-- contact-info-section -->
<section class="contact-info-section sec-pad centred">
    <div class="container">
        <div class="sec-title">
            <h5>Contact</h5>
            <h1>Entrer en contact</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="single-info-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-address"></i></div>
                        <h3>Notre Localisation</h3>
                        <div class="text">16/14 Babor Road, Shyamoly<br />Dhaka.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="single-info-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-vintage-hand-phone"></i></div>
                        <h3>Numéro de téléphone</h3>
                        <div class="text">
                            <a href="tel:(+55)654-545-5418">(+55) 654 - 545 - 5418</a><br />
                            <a href="tel:(+55)654-545-1235">(+55)  654 - 545 - 1235</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                <div class="single-info-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-mail"></i></div>
                        <h3>Adresse Email</h3>
                        <div class="text">
                            <a href="mailto:info@example.com">info@example.com</a><br />
                            <a href="mailto:info@templatepath.com">info@templatepath.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-info-section end -->
@endsection