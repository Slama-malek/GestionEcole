@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Ajouter un groupe</h5>
               
                <div class="row">
                    <div class="col-sm">
                      
                        <div class="row">
                            <div class="col-md-12">
                                {!!Form::open(['action' => 'GroupeController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
                                
                            {{Form::text('nom_g', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'groupe'])}} <br>
                                
                           
                                {{Form::submit('Ajouter', ['class' => 'btn btn-success btn-rounded btn btn-gradient-success'],['style' => ''])}} 
                            </div>
                            
                                {!!Form::close()!!}
                            <br>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </section>
        </div></div>


    @endsection