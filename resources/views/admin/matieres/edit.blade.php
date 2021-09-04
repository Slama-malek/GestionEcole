@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Matiéres</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier la classe </h3>
                                        
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
            <form action="{{ route('matiere.update', $matiere->id_m) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                                    <div class="row">
                                   
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        
                                            <label>Nom du matiére*</label>

                                            
                                           
                                            <input type="text" class="form-control" id="nom_m" name="nom_m"  value="@if (old('nom_m')){{ old('nom_m')}}@else{{ $matiere->nom_m }}@endif"> <br>
                                            </div>                        
       
                                      
                                        
                                        
                                       
                                      
                                       
                                        <div class="col-12 form-group mg-t-8">
                                        <input type="submit" value="Modifier" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>

                               </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

    
@endsection
