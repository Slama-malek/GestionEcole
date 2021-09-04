@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Clubs</li>
                        
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier le club </h3>
                                        
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

            <form action="{{ route('club.update', $club->id) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                                   
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Nom du Club *</label>
                               <input type="text" class="form-control" class="@error('nom') is-invalid @enderror" id="nom" name="nom"  value="@if (old('nom')){{ old('nom')}}@else{{ $club->nom }}@endif">
                               
                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Prix *</label>
                               <input type="text" class="form-control" class="@error('nom') is-invalid @enderror" id="prix" name="prix"  value="@if (old('prix')){{ old('prix')}}@else{{ $club->prix }}@endif">

                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Taille *</label>
                               <input type="text" class="form-control" class="@error('size') is-invalid @enderror" id="size" name="size"  value="@if (old('size')){{ old('size')}}@else{{ $club->size }}@endif">

                               
                              
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Age *</label>
                               <input type="text" class="form-control" class="@error('age') is-invalid @enderror" id="age" name="age"  value="@if (old('age')){{ old('size')}}@else{{ $club->age }}@endif">

                              

                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Heure début </label>
                               <input type="time" class="form-control" class="@error('horaired') is-invalid @enderror" id="horaired" name="horaired"  value="@if (old('horaired')){{ old('horaired')}}@else{{ $club->horaire_debut }}@endif">

                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Heure fin </label>
                               <input type="time" class="form-control" class="@error('horairef') is-invalid @enderror" id="horairef" name="horairef"  value="@if (old('horairef')){{ old('horairef')}}@else{{ $club->horaire_fin }}@endif">

                              
                           </div>
                           
                          
                           <div class="col-lg-6 col-12 form-group">
                               <label>Description</label>
                               <input type="textarea" class="textarea form-control" class="@error('description') is-invalid @enderror" id="description" name="description"  value="@if (old('description')){{ old('description')}}@else{{ $club->description }}@endif">

                              
                           
                           </div>
                           <div class="col-lg-6 col-12 form-group mg-t-30">

                               <label class="text-dark-medium">Télécharger une photo du club</label>
                               <input type="file" class="form-control-file" class="@error('image') is-invalid @enderror" id="image" name="image"  value="@if (old('image')){{ old('image')}}@else{{ $club->image }}@endif">

                               
                               
                           </div>               
                                        
                                       
                                      
                                       
                                        <div class="col-12 form-group mg-t-8">
                                        <input type="submit" value="Modifier" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                        </div>
                                    </div>

                               </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

    
@endsection
