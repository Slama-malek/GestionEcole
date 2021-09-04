@extends('user.layouts.master')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Inscription</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Inscription</li>
            </ul>
        </div>
    </div>
</section> <br><br><br>

<section>
<div class="row">
    <div class="col-12 col-md-12">
        
        <fieldset>
            <legend>Identification d'éleve</legend>
          
        {!!Form::open(['action' => 'user\ElevesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('nom', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'nom eleve'])}} </br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('prenom', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' prenom eleve'])}} </br>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('lieu_naiss', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'lieu naissance '])}} </br>
        </div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('date_naiss', '', ['class' => 'form-control date', 'placeholder' => ' date naissance'])}} </br>
   

</div>

</fieldset>

<fieldset>
    <legend>pere</legend>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('nom_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'nom pere'])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('prenom_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' prenom pere'])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('add_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' adresse '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('tel_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' telephone de pere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('gsm_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' portable de pere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('profession_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' profession  de pere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('email_p', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' email  de pere '])}} </br>
</div>
</fieldset>

<fieldset>
<legend> cc</legend>
<div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('nom_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'nom mere'])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('prenom_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' prenom mere'])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('add_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' adresse '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('tel_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' telephone de mere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('gsm_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' portable de mere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('profession_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' profession  de mere '])}} </br>
</div>
    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
    {{Form::text('email_m', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => ' email  de mere '])}} </br>
  
</div>
    </fieldset>
  
    <div class="col-lg-6 col-md-6 col-sm-6">
        {{Form::submit('Ajouter', ['class' => 'btn btn-success btn-rounded btn btn-gradient-success'],['style' => ''])}} 
  
    </div>
    </div>
    
        {!!Form::close()!!}
    </div>

</div>
</section>

        <style>
            fieldset {
  display: block;
  margin-left: 10px;
  margin-right: 10px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px groove (internal value);
}


.output {
    font: 1rem 'Fira Sans', sans-serif;
}

.input[type="text"] { 
                width:250px; 
                margin:5px 0px; 
            } 
        </style>

    @endsection