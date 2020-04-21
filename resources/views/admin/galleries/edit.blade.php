@extends('admin.layouts.master')

@section('content')
  
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Modifier  la  photo</h5>
                {!!Form::open(['action' => ['GalleriesController@update', $gallery->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                <div class="row">
                    <div class="col-sm">
                      
                        <div class="row">
                            <div class="col-md-12">
                                {!!Form::open(['action' => 'GalleriesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}  
                                
                            {{Form::text('name', $gallery->name, ['class' => 'form-control rounded-input mt-15', 'placeholder' => 'Titre du photo'])}} </br>
                                
                            {{Form::textarea('description', $gallery->description, ['class' => 'form-control mt-15"  ', 'placeholder' => ' Description'])}}
                                </br>
                               
                                {{Form::file('cover_image' ,['class' => 'fileinput fileinput-new input-group '])}} <br>
                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::submit('Modifier', ['class' => 'btn btn-success btn-rounded btn btn-gradient-success'])}} 
                            </div>
                            
                                {!!Form::close()!!}
                            <br>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </section>
        </div></div>

   

@endsection
