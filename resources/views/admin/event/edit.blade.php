@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li><a href="{{url('/admin/evenement')}}">Evénements</a></li>
                        
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier l'event </h3>
                                        
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
 
            <form action="{{ route('evenement.update', $event->id) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                                   
                                   <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Titre du l'événement *</label>
                               <input type="text" class="form-control" class="@error('nom') is-invalid @enderror" id="nom" name="nom" value="@if (old('nom')){{ old('nom')}}@else{{ $event->titre }}@endif">
                               
                               
                           </div>
      
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>date du début </label>
                               <input type="date" class="form-control" class="@error('dated') is-invalid @enderror" id="dated" name="dated" value="@if (old('dated')){{ old('dated')}}@else{{ $event->dated }}@endif">

                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>date fin </label>
                               <input type="date" class="form-control" class="@error('datef') is-invalid @enderror" if="datef" name="datef"  value="@if (old('datef')){{ old('datef')}}@else{{ $event->datef }}@endif">

                           </div>
                          
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Heure début </label>
                               <input type="time" class="form-control" class="@error('horaired') is-invalid @enderror" id="horaired" name="horaired"  value="@if (old('horaired')){{ old('horaired')}}@else{{ $event->heured }}@endif">

                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Heure fin </label>
                               <input type="time" class="form-control" class="@error('horairef') is-invalid @enderror" id="horairef" name="horairef"  value="@if (old('horairef')){{ old('horairef')}}@else{{ $event->heuref }}@endif">

                              
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Location *</label>
                               <input type="text" class="form-control" class="@error('location') is-invalid @enderror" id="location" name="location"  value="@if (old('location')){{ old('location')}}@else{{ $event->location }}@endif">
                               
                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Téléphone *</label>
                               <input type="text" class="form-control" class="@error('telephone') is-invalid @enderror" id="telephone" name="telephone"  value="@if (old('telephone')){{ old('telephone')}}@else{{ $event->telephone }}@endif">
                               
                               
                           </div>
                           <div class="col-xl-3 col-lg-6 col-12 form-group">
                               <label>Prix </label>
                               <input type="text" class="form-control" class="@error('prix') is-invalid @enderror" id="prix" name="prix"  value="@if (old('prix')){{ old('prix')}}@else{{ $event->prix }}@endif">
                               
                               
                           </div>
                        
                           
                           
                          
                           <div class="col-lg-6 col-12 form-group">
                               <label>Description</label>
                               <input type="textarea" class="textarea form-control" class="@error('description') is-invalid @enderror" id="description" name="description"  value="@if (old('description')){{ old('description')}}@else{{ $event->description }}@endif">

                              
                           
                           </div>
                           <div class="col-lg-6 col-12 form-group mg-t-30">

                               <label class="text-dark-medium">Télécharger une photo du event</label>
                               <input type="file" class="form-control-file" class="@error('image') is-invalid @enderror" id="image" name="image"  value="@if (old('image')){{ old('image')}}@else{{ $event->image }}@endif">

                               
                               
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
