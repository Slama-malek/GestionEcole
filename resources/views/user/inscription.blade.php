@extends('user.layouts.master')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Inscription</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Accueil</a></li>
                <li>Inscription</li>
            </ul>
        </div>
    </div>
</section> <br><br><br>
<!--End Page Title-->


<div class="sec-title" style="text-align:center">
  <h5>Inscription d'éleve</h5>
  <h1>Remplir le formulaire </h1>
</div>

<section class="checkout-section">
  
  <div class="container">
      
          
      
      <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12 left-column">
              <div class="inner-box">
                  <div class="billing-info">
                      
                      <form method="POST" action="{{route('inscription.store')}}" class="billing-form" enctype="multipart/form-data">
                          @csrf
                          <div class="row">

                              <div class="col-lg-12 col-md-12 col-sm-6 customer-column">
                                  <div class="customer" style="background-color:#F3F0E9; text-align:center; color:#F06F63 ; font-weight: bold; font-size: 150%;">Identification d'éleve </a></div>
                              </div>
                              <br>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="nom">Nom d'éleve <strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="nom"  name="nom" placeholder="Enter nom" required>
                                  </div>
                              </div>
                              
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="prenom">Prénom d'éleve <strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="prenom"  name="prenom" placeholder="Enter prenom" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="date_naiss">Date naissance <strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="date" class="form-control" id="date_naiss"  name="date_naiss"  required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="lieu_naiss">Lieu naissance<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="lieu_naiss"  name="lieu_naiss" placeholder="lieu naissance" required>
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>classe</label>
                                <select style="position: relative;
                                display: block;
                                background-color:white;
                                width: 100%;
                                height: 50px;
                                border: 1px solid #e7e7e7;
                                border-radius: 10px;
                                padding: 10px 15px;
                                transition: all 500ms ease;" name="classes" required>
                                   <option value="0"> Classe</option>
                                   @foreach ($classes as $classe)

                                     <option value="{{ $classe->id_c }}">{{ $classe->nom_c }}</option>
                                   @endforeach
                                   </select>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Sexe</label>
                                <select style="position: relative;
                                display: block;
                                background-color:white;
                                width: 100%;
                                height: 50px;
                                border: 1px solid #e7e7e7;
                                border-radius: 10px;
                                padding: 10px 15px;
                                transition: all 500ms ease;" name="sexe" required>
                                   <option value="0"> Sexe</option>
                                  

                                     <option value="F">F</option>
                                     <option value="H">H</option>
                                   </select>
                            </div>
                            
                              <div class="col-lg-12 col-md-12 col-sm-12 customer-column">
                                  <div class="customer" style="background-color:#F3F0E9; color:#F06F63 ; text-align:center; font-weight: bold; font-size: 150%;">Identification du pére (ou tuteur)</div>
                              </div>

                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="nom_p">Nom <strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                     <input type="text" class="form-control" id="nom_p"  name="nom_p" required >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="prenom_p">Prénom<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="prenom_p"  name="prenom_p" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="add_p">Adresse<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="add_p"  name="add_p" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label for="profession_p">Profession<strong style="color:red">*</strong></label>
                                <div class="field-input">
                                    <input type="text" class="form-control" id="profession_p"  name="profession_p" required>
                                </div>
                            </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="tel_p">Télephone fixe </label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="tel_p"  name="tel_p" >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="gsm_p  ">Portable<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="gsm_p"  name="gsm_p" required>
                                  </div>
                              </div>
                              
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="email_p">Email<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="email" class="form-control" id="email_p"  name="email_p" required>
                                  </div>
                              </div>
                             

                              <div class="col-lg-12 col-md-12 col-sm-6 customer-column">
                                  <div class="customer" style="background-color:#F3F0E9; text-align:center; color:#F06F63 ; font-size: 150%; font-weight: bold;">Identification de la mére </div>
                              </div>


                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="nom_m">Nom<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                     <input type="text" class="form-control" id="nom_m"  name="nom_m"required >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="prenom_m">Prénom<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="prenom_m"  name="prenom_m" required >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="add_m">Adresse<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="add_m"  name="add_m" required >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label for="profession_m">Profession<strong style="color:red">*</strong></label>
                                <div class="field-input">
                                    <input type="text" class="form-control" id="profession_m"  name="profession_m" required>
                                </div>
                            </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="tel_m">Télephone fixe</label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="tel_m"  name="tel_m" >
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                  <label for="gsm_m  ">Portable<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="text" class="form-control" id="gsm_m"  name="gsm_m" required >
                                  </div>
                              </div>
                             
                              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                  <label for="email_m">Email<strong style="color:red">*</strong></label>
                                  <div class="field-input">
                                      <input type="email" class="form-control" id="email_m"  name="email_m" required >
                                  </div>
                              </div>
                             

                             
                              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                 <button   type="submit" style="position: relative;
                                 display: inline-block;
                                 font-size: 15px;
                                 font-family: 'M PLUS Rounded 1c', sans-serif;
                                 padding: 17px 40px;
                                 background-color: #ff7162;
                                 line-height: 26px;
                                 color: #ffffff !important;
                                 font-weight: 900;
                                 text-transform: uppercase;
                                 cursor: pointer;
                                 text-align: center;
                                 transition: all 500ms ease;
                                 z-index: 1; float: right ;"> Enregistrer</button>
                              </div>
                          </div>
                      </form>
                  </div>
                 
              </div>
          </div>
         
              
          </div>
      </div>
  </div>
</section>






@endsection

