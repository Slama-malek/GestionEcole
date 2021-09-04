@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Ajouter une photo</h5>
               
                <div class="row">
                    <div class="col-sm">
                      
                        <div class="row">
                            <div class="col-md-12">
                                {!!Form::open(['action' => 'GalleriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
                                
                            {{Form::text('name', '', ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'Titre du photo'])}} </br>
                                
                            {{Form::textarea('description', '', ['class' => 'form-control mt-15"  ', 'placeholder' => ' Description'])}}
                                <br>
                                {{Form::file('cover_image',['class' => 'fileinput fileinput-new input-group '])}} <br>
                                
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