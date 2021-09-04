@extends('user.layouts.master')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Inscription</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>Inscription</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<section class="checkout-section">
    <div class="container">
        
       
                        {!!Form::open(['action' => 'user\ElevesController@store', 'class' => 'billing-form','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
                           
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    
                                   
                                        {{Form::text('nom', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                              
                                   
                                        {{Form::text('prenom', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                               
                                   
                                        {{Form::text('date_naiss', '', ['class' => 'form-control rounded-input mt-15'])}}
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              
                                   
                                        {{Form::text('lieu_naiss', '', ['class' => 'form-control rounded-input mt-15'])}}
                                  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                                   
                                        {{Form::text('nom_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              
                                   
                                        {{Form::text('prenom_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                                   
                                        {{Form::text('add_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            
                                   
                                        {{Form::text('gsm_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                                   
                                        {{Form::text('tel_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                               
                                   
                                        {{Form::text('profession_p', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            
                                   
                                        {{Form::text('nom_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                                   
                                        {{Form::text('prenom_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                               
                                   
                                        {{Form::text('add_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                
                                   
                                        {{Form::text('gsm_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                               
                                   
                                        {{Form::text('tel_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              
                                   
                                        {{Form::text('profession_m', '', ['class' => 'form-control rounded-input mt-15'])}}
                                    
                                </div>
                               

                                {{Form::submit('Ajouter', ['class' => 'btn btn-success btn-rounded btn btn-gradient-success'],['style' => ''])}} 
                                {!!Form::close()!!}
                            </div>
                           
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection