@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Sorties</li>
                        
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier la sortie </h3>
                                        
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

            <form action="{{ route('sortie.update', $sortie->id) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                                   
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Titre du sortie *</label>
                               <input type="text" class="form-control" class="@error('titre') is-invalid @enderror" id="titre" name="titre"  value="@if (old('titre')){{ old('titre')}}@else{{ $sortie->titre }}@endif">
                               
                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Prix *</label>
                               <input type="text" class="form-control" class="@error('prix') is-invalid @enderror" id="prix" name="prix"  value="@if (old('prix')){{ old('prix')}}@else{{ $sortie->prix }}@endif">

                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Téléphone *</label>
                               <input type="text" class="form-control" class="@error('telephone') is-invalid @enderror" id="telephone" name="telephone"  value="@if (old('telephone')){{ old('telephone')}}@else{{ $sortie->telephone }}@endif">

                               
                              
                           </div>
         
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Date </label>
                               <input type="date" class="form-control" class="@error('date_s') is-invalid @enderror" id="date_s" name="date_s"  value="@if (old('date_s')){{ old('date_s')}}@else{{ $sortie->horaire_debut }}@endif">

                           </div>
                          
                           
                          
                           <div class="col-lg-6 col-12 form-group">
                               <label>Description</label>
                               <input type="textarea" class="textarea form-control" class="@error('description') is-invalid @enderror" id="description" name="description"  value="@if (old('description')){{ old('description')}}@else{{ $sortie->description }}@endif">

                              
                           
                           </div>
                           <div class="col-lg-6 col-12 form-group mg-t-30">

                               <label class="text-dark-medium">Télécharger une photo du sortie</label>
                               <input type="file" class="form-control-file" class="@error('image') is-invalid @enderror" id="image" name="image"  value="@if (old('image')){{ old('image')}}@else{{ $sortie->image }}@endif">

                               
                               
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
