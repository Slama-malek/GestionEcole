@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3>Tous les photos</h3>
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>Gallerie</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-4-xxxl col-12">
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3> Ajouter une nouvelle photo</h3>
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
                        <form action="{{ route('gallerie.store') }}" method="post" class="new-added-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}
                       
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    <label>Nom du photo *</label>
                                    <input type="text" placeholder="" class="form-control" id="name" name="name">
                                </div>
                               
                            
                                
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Description</label>
                                    <textarea class="textarea form-control" name="description" id="form-message" cols="10" rows="9"></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <label class="text-dark-medium">Télécharger une photo</label>
                                    <input type="file" class="form-control-file" id="cover_image" name="cover_image">
                                </div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Ajouter</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Tous les photos</h3>
                                    </div>
               
                                </div>
                               
        
                                <form >
                                    <div class="row gutters-8">
                                        <div class="col-lg-4 col-12 form-group">
                                            <input type="text" placeholder="chercher par nom ..." class="form-control" id="name" name="name">
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
                                                <th>Détails</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($galleries as $gallerie)
                                            <tr>
                                                <td> {{$gallerie->id}}</td>
                                                <td>{{$gallerie->name}}</td>
                                              
                                                <td><a href="{{url('admin/gallery/'.$gallerie->id)}}"><button class="btn btn-icon btn-icon-circle  " style="background-color:#042954 ; color:#F8A42F"  ><span class="btn-icon-wrap"><i class="fa fa-eye"></i></span></button></a></td>
                                                <td>

                                        <a href="{{url('admin/gallery/'.$gallerie->id .'/edit')}}" data-toggle="tooltip" data-original-title="Edit"> <span class="btn btn-success"> <i class="fa fa-pencil-alt"> </i></span> </a>
                                     
                                       
                                       
                                                    <form id="delete-form-{{ $gallerie->id }}" method="post" action="{{ route('gallerie.destroy',$gallerie->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                          </form>
                                          <a href="" onclick="
                                          if(confirm('Vous êtes sûr, voulez-vous supprimer?'))
                                              {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $gallerie->id }}').submit();
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
                                    <span> {{$galleries->links()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    
@endsection
