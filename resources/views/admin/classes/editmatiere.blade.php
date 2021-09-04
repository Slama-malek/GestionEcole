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
                                        <h3>Modifier la matiére</h3>
                                        
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
            <form action="{{ route('matiere.updatem', $classem->id) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                                    <div class="row">
                                   
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        
                                            <label>Nom du matiére*</label>

                                            
                                            <select class="select2" name="matieres">
                                                <option value="">@if (old('matieres')){{ old('matieres')}}@else{{ $mat->nom_m }}@endif</option>
                                                @foreach ($matiere as $item)
                                                
                                                <option value="{{ $item->id_m }}">{{ $item->nom_m }}</option> 
    
                                                @endforeach
                                            </select>
                                            </div>                        
       
                                      
                                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Coefficient*</label>
                                            <select class="select2" name="coef">
                                                <option value="">@if (old('coef')){{ old('coef')}}@else{{ $mat->nom_coef }}@endif</option>
                                                @foreach ($coef as $item)
                                                
                                                <option value="{{ $item->id_coef }}">{{ $item->nom_coef }}</option> 
    
                                                @endforeach
                                            </select>
                      
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
