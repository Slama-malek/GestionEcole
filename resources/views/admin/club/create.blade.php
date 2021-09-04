@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Ajouter un club </h5>
               
                <div class="row">
                    <div class="col-sm">
                      
                        <div class="row">
                            <div class="col-md-12">
                                {!!Form::open(['action' => 'ClubController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
                                
                            {{Form::text('nom', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'Nom du club'])}} </br>
                            {{Form::text('prix', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'prix'])}} </br>
                            {{Form::text('age', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'age'])}} </br>
                            {{Form::text('size', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'size'])}} </br>
                            {{Form::textarea('description', '', ['class' => 'form-control mt-15"  ', 'placeholder' => ' Description'])}}
                            
                                </br>
                                {{Form::file('image',['class' => 'fileinput fileinput-new input-group '])}} <br>
                                
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