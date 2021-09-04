@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Matiéres</li>
                        <li>Coefficients</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Modifier le coefficient </h3>
                                        
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
            @error('nom_coef')
    <div class="alert alert-danger alert-dismissible fade show">{{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
    </div>
@enderror
            <form action="{{ route('coef.update', $coef->id_coef) }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                                    <div class="row">
                                   
                                        <div class="col-12-xxxl col-lg-12 col-12 form-group">
                                        
                                            <label>Coefficient*</label>

                                            
                                           
                                            <input type="text" class="form-control" class="@error('nom_coef') is-invalid @enderror" id="nom_coef" name="nom_coef"  value="@if (old('nom_c')){{ old('nom_c')}}@else{{ $coef->nom_coef }}@endif"> <br>
                                           
                                       
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
