@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3>Tous les coefficients</h3>
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
                                        <h3>Ajouter un nouveau coefficient </h3>
                                        
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
    @error('nom_coef')
            <div class="alert alert-danger alert-dismissible fade show">{{ $message }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
    </div>
 
    @enderror
                                    {!!Form::open(['action' => 'CoefController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!} 
                                    <div class="row">
                                   
                                        <div class="col-12-xxxl col-lg-12 col-12 form-group">
                                        
                                            <label>Coefficient*</label>

                                            
                                            {{Form::text('nom_coef', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                        </div>
                                        
                                       
                                      
                                       
                                        <div class="col-12 form-group mg-t-8">
                                        {{Form::submit('Ajouter', ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],['style' => ''])}} 
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>

                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Tout les coefficients</h3>
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
                                                <th>Nom </th>
                                                <th>Action </th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($coef as $coefs)
                                            <tr>
                                                <td> {{$coefs->id_coef}}</td>
                                                <td>{{$coefs->nom_coef}}</td>

                                                
                                                <td>

                                        <a href="{{ route('coef.edit',$coefs->id_coef) }}" data-toggle="tooltip" data-original-title="Edit"> <span class="btn btn-success"> <i class="fa fa-pencil-alt"> </i></span></a>
                                     
                                       
                                       
                                                    <form id="delete-form-{{ $coefs->id_coef }}" method="post" action="{{ route('coef.delete',$coefs->id_coef) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          </form>
                                          <a href="" onclick="
                                          if(confirm('Vous êtes sûr, voulez-vous supprimer?'))
                                              {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $coefs->id_coef }}').submit();
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
                                    <span> {{$coef->links()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
@endsection
