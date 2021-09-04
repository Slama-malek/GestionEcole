@extends('admin.layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Enseignants</h3>
    <ul>
        <li>
        <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Ajouter </li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                Enseignant :<h3>{{$ensgs->name}}</h3>
            </div>
          
        </div>
        @if (session('success'))
                
        <div class="form-group">
           
            <label for="focusedinput" class="col-sm-2 control-label"></label>
            <div class="col-sm-12">
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session('success') }}</strong>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    @endif
                <form method="POST" action="{{route('ajout.classEns',$ensgs->id_en)}}" class="billing-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                       
                        <?php
                                             $classes = DB::table('groupe_classes')->join('classes' , 'groupe_classes.classe_id' ,'=' ,'classes.id_c')
                                             
                                             
                                             ->select('classes.id_c' , 'classes.nom_c' )
                                             ->distinct()
                                             ->get();


                                             $groupes = DB::table('groupe_classes')->join('groupes' , 'groupe_classes.groupe_id' ,'=' ,'groupes.id_g')
                                             ->select('groupes.id_g' , 'groupes.nom_g')
                                             ->distinct()
                                             ->get();
                                            ?>

                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Classe *</label>
                            <select class="select2" name="classes" required >
                                <option value="0"> Ajouter classe</option>
                             @foreach ($classes as $item)

                                     <option value="{{ $item->id_c }}">{{ $item->nom_c }}</option>
                               @endforeach
                              
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Groupe *</label>
                            <select class="select2" name="groupes"  >
                                <option value="0"> Ajouter groupe</option>
                                @foreach ($groupes as  $grp)

                                <option value="{{ $grp->id_g }}">{{ $grp->nom_g }}</option>
                          @endforeach
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Matiére *</label>
                            <select class="select2" name="matieres"  >
                                <option value="0"> Ajouter matiére</option>
                                @foreach ($mat as $item)

                                <option value="{{ $item->id_m }}">{{ $item->nom_m }}</option>
                          @endforeach
                            </select>
                        </div>
                       
                        
                        <div class="col-12 form-group mg-t-8"> <br>
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Ajouter</button>
                           
                        </div>
                    </div>
                </form>
                
             
            </div>
        </div>
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Class Schedules</h3>
                </div>
               <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by ID ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Class ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <div >
                    <table table class="table display data-table text-nowrap">
                    <thead>
                        <tr role="row"><tr>
                                
                              
                                     
                            <th>Classe et Groupe </th>
                            <th>Matiere</th>
                           
                                <th></th> 
                            </tr>
                                                       
                           
                           
                        </tr> </thead>
                    <tbody>
                        
                     
                        <tr>
                            <?php
                                    $classgrp = DB::table('enseignant_classes')
                                    
                                    ->join('enseignants' , 'enseignant_classes.ens_id' ,'=' , 'enseignants.id_en')
                                    ->join('classes' ,'enseignant_classes.classe_id' ,'=' ,'classes.id_c' )
                                                 
                                    ->join('groupes' ,'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g' )
                                   
                                   
                                    ->join('matieres' ,'enseignant_classes.mat_id' ,'=' ,'matieres.id_m' )              
                                    ->where('enseignants.id_en' , '=' ,$ensgs->id_en)
                                    
                                  
                                    ->select('classes.id_c' ,  'enseignants.id_en' , 'classes.nom_c' , 'groupes.nom_g' , 'groupes.id_g','matieres.id_m' ,'matieres.nom_m' )
                                    
                                   //->take(10)
                                 
                                    ->get()
                                        ?>  
                                   
                                   @foreach($classgrp as $cls)
                                    <tr>
                                     
                                   
                                  
                                   
                             
                                        
                                        <td> 
                                           
                                       <span class="badge badge-primary badge-pill badge-outline mt-15 mr-10">{{$cls->nom_c}} -{{$cls->nom_g}}</span>
                                    </td>
                                       <td>
                                        {{$cls->nom_m}}
                                      
                                    </td>
                                  
                                        
                                    </tr>
                                    @endforeach 
                                 </tbody>
                </table>
        </div>
            
       </div>
</div>
@endsection