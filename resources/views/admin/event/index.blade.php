@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3>Tous les événementts</h3>
                    <ul>
                        <li>
                            <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Evénements</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Ajouter un nouvel événement </h3>
                                        
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

    
                                   
    {!!Form::open(['action' => 'EventController@store', 'method' => 'POST','class' => 'new-added-form', 'enctype' => 'multipart/form-data'])!!}  
                                   

<div class="row">
                                   
                                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Titre du l'événement *</label>
                                    {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                    
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date de début  *</label>
                                    {{Form::date('dated', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                    
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date de fin *</label>
                                    {{Form::date('datef', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                   
                                </div>
   
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Heure début * </label>
                                    {{Form::time('horaired', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Heure fin * </label>
                                    {{Form::time('horairef', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Location * </label>
                                    {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Téléphone * </label>
                                    {{Form::text('telephone', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Prix </label>
                                    {{Form::text('prix', '', ['class' => 'form-control', 'placeholder' => ''])}}
                                </div>
                               
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Description</label>
                                    {{Form::textarea('description', '', ['class' => 'textarea form-control ', 'placeholder' => ''])}}
                                
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">

                                    <label class="text-dark-medium">Télécharger une photo du l'événement</label>
                                    {{Form::file('image',['class' => 'form-control-file '])}}
                                    
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
                                        <h3>Tous les événements</h3>
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
                                               
                                                <th>Titre </th>
                                                <th>Détails</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($events as $event)
                                            <tr>
                                                <td> {{$event->id}}</td>
                                                <td>{{$event->titre}}</td>
                                              
                                                <td><a href="{{url('admin/evenement/'.$event->id)}}"><button class="btn btn-icon btn-icon-circle  " style="background-color:#042954 ; color:#F8A42F"  ><span class="btn-icon-wrap"><i class="fa fa-eye"></i></span></button></a></td>
                                                <td>

                                        <a href="{{ route('evenement.edit',$event->id) }}" data-toggle="tooltip" data-original-title="Edit"> <span class="btn btn-success"> <i class="fa fa-pencil-alt"> </i></span> </a>
                                     
                                       
                                       
                                                    <form id="delete-form-{{ $event->id }}" method="post" action="{{ route('evenement.destroy',$event->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          </form>
                                          <a href="" onclick="
                                          if(confirm('Vous êtes sûr, voulez-vous supprimer?'))
                                              {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $event->id }}').submit();
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
                                    <span> {{$events->links()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
@endsection
