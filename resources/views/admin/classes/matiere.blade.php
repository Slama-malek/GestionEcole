@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                   
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li><a href="{{url('/admin/classes')}}">Classes</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                     <strong> Ajouter les matiéres du classe</strong> <span style="background-color:#fbd540 ; color:#ffffff">{{ $classe->nom_c}}</span> 
                                        
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
    
    <form method="POST" action="{{route('ajout.matiere',$classe->id_c)}}" class="billing-form" enctype="multipart/form-data">
                            @csrf
                                    <div class="row">
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Matiére*</label>
                                            <select class="select2" name="matieres">
                                                <option value="">Choisir matiére</option>
                                                @foreach ($matiere as $item)
                                                
                                                <option value="{{ $item->id_m }}">{{ $item->nom_m }}</option> 
    
                                                @endforeach
                                            </select>
                      
                  </div>

                                   
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Coefficient*</label>
                                            <select class="select2" name="coef">
                                                <option value="">Choisir coefficient</option>
                                                @foreach ($coef as $item)
                                                
                                                <option value="{{ $item->id_coef }}">{{ $item->nom_coef }}</option> 
    
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
                                        <h3>Toutes les matiéres</h3>
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
                                            
                                            <th>N°</th>
                                <th>Nom du classe</th>
                                <th>Matiere</th>
                                <th>Coefficient</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($classMat as $item)
                                            <tr>
                                            <tr>
                                
                                <td>{{$item->id}}</td>
                                    <td>{{$item->nom_c}}</td>
                               <td>
                                  {{$item->nom_m}}
                               </td>
                               <td>
                                   {{$item->nom_coef}}
                                 </td>
                                                <td>

                                        <a href="{{ route('matiere.modifier',$item->id) }}" data-toggle="tooltip" data-original-title="Edit"> <span class="btn btn-success"> <i class="fa fa-pencil-alt"> </i></span> </a>
                                     
                                       
                                       
                                                    <form id="delete-form-{{ $item->id }}" method="post" action="{{ route('classe.destroym',$item->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          </form>
                                          <a href="" onclick="
                                          if(confirm('Vous êtes sûr, voulez-vous supprimer?'))
                                              {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id }}').submit();
                                              }
                                              else{
                                                event.preventDefault();
                                              }"  data-toggle="tooltip" data-original-title="Supprimer">
                                              <span class="btn btn-danger"> <i class="fa fa-trash"> </i></span></a>
                                            
                                       </a>
                                            </td>
                                             
                                                </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    <span> {{$classMat->links()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
@endsection
