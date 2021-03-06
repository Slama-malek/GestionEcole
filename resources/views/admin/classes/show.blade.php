@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                   
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li><a href="{{url('/admin/classes')}}">Classes </a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                    <strong> Ajouter les groupes du classe</strong> <span style="background-color:#fbd540 ; color:#ffffff">{{ $classe->nom_c}}</span> 
                                        
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
            @if (session('err'))
            <div class="alert alert-danger alert-dismissible fade show">{{ session('err') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
    </div>
    
    @endif
            <form method="POST" action="{{route('ajout.group',$classe->id_c)}}" class="billing-form" enctype="multipart/form-data">
                            @csrf
                                    <div class="row">
                                   
                                        <div class="col-12-xxxl col-lg-12 col-12 form-group">
                                        
                                            <label>Nom du groupe*</label>

                                            
                                            <select class="select2" name="groupe">
                                                <option value="">Choisir groupe</option>
                                                @foreach ($groupe as $item)
                                                
                                                <option value="{{ $item->id_g }}">{{ $item->nom_g }}</option> 
    
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                       
                                      
                                       
                                        <div class="col-12 form-group mg-t-8">
                                        {{Form::submit('Ajouter', ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],['style' => ''])}} 
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>

                                    </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Tout les groupes</h3>
                                    </div>
               
                                </div>
                               
        
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Exam ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="Search by Subject ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-12 form-group">
                                            <input type="text" placeholder="dd/mm/yyyy" class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
        
        
                 
                
                @if (session('info'))
                <div class="ui-alart-box">
                            <div class="dismiss-alart">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('info') }} 

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                @endif
                               
                 
                                <div class="table-responsive">
                                    <table class="table display data-table text-nowrap">
                                        <thead>
                                            <tr>
                                            <th>N??</th>
                                <th>Nom du classe</th>
                                <th>Groupe</th>
                                <th>
                                    Actions
                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($classGrp as $classe)
                                
                           
                                <tr>
                                    
                                <td>{{$classe->id}}</td>
                                    <td>{{$classe->nom_c}}</td>
                               <td>
                                  {{$classe->nom_g}}
                                  <td>





                                  <form id="delete-form-{{ $classe->id }}" method="post" action="{{ route('classe.destroygrp',$classe->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          </form>
                                          <a href="" onclick="
                                          if(confirm('Vous ??tes s??r, voulez-vous supprimer?'))
                                              {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $classe->id }}').submit();
                                              }
                                              else{
                                                event.preventDefault();
                                              }"  data-toggle="tooltip" data-original-title="Supprimer">
                                              <span class="btn btn-danger"> <i class="fa fa-trash"> </i></span></a>
                                            
                                       </a>
    
                                </tr>
                               
                                @endforeach
                                        </tbody>
                                    </table>
                                    <span> {{$classGrp->links()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
@endsection
