@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Gallerie</li>
                        
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier la photo </h3>
                                        
                                    </div>
              
                                  
                                </div>
                                @if (session('success'))
                
            
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
    
            @endif

            {!!Form::open(['action' => ['GalleriesController@update', $gallery->id], 'method' => 'PUT','class' => 'new-added-form', 'enctype' => 'multipart/form-data'])!!}
                    <div class="row">
                                   
                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                               <label>Nom du Club *</label>
                               {{Form::text('name', $gallery->name, ['class' => 'form-control', 'placeholder' => 'Titre du photo'])}}
                               
                               
                           </div>
                          
                         
                           
                           
                        
                           
                          
                           <div class="col-lg-6 col-12 form-group">
                               <label>Description</label>
                               {{Form::textarea('description', $gallery->description, ['class' => 'textarea form-control', 'placeholder' => ' Description'])}}

                              
                           
                           </div>
                           <div class="col-lg-6 col-12 form-group mg-t-30">


                               <label class="text-dark-medium">Télécharger une photo du club</label>
                               {{Form::file('cover_image' ,['class' => 'form-control-file '])}}

                               
                               
                           </div>               
                                        
                                       
                                      
                                       
                                        <div class="col-12 form-group mg-t-8">
                                        <input type="submit" value="Modifier" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        </div>
                                    </div>

                                    {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                    
                </div>

    
@endsection
