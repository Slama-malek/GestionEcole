@extends('admin.layouts.master')
@section('content')
 <!-- Breadcubs Area Start Here -->
 <div class="breadcrumbs-area">
    <h3>Enseignants </h3>
    <ul>
        <li>
            <a href="index.html">Accueil</a>
        </li>
        <li>Liste des enseignants Verifiés</li>
    </ul>
</div>

<!-- Breadcubs Area Start Here -->

<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Enseignants à verifiés</h3>
            </div>
        
        </div>
    
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th> 
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">N°</label>
                            </div>
                        </th>
                      
                            <th>Nom</th>
                            <th>Email</th>
                              <th>Classe</th>
                              <th>Matiére</th>
                       
                            <th></th> 
                        </tr>
                                                   
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($users as $user )
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            
                             
                          
                           <td>
                            <a href="{{url('/admin/enseignant',$user->id)}}"><button style="background-color:#042954 ; color:#F8A22F" class="btn btn-icon btn-icon-circle  btn-icon-style-2"   ><span class="btn-icon-wrap"><i class="fa fa-plus"></i></span> </button></a>
                           </td>
                           <td>
                            <a href="{{url('/admin/matiere/ens',$user->id)}}"><button style="background-color:#F8A22F ; color:#042954" class="btn btn-icon btn-icon-circle  btn-icon-style-2"   ><span class="btn-icon-wrap"><i class="fa fa-plus"></i></span> </button></a>
                           </td>
                           
                            
                            
                           
                            <td>
                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>

                                   
                                </td>
                               
                        </tr>
                      
                    </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>
<!-- Teacher Table Area End Here -->

@endsection