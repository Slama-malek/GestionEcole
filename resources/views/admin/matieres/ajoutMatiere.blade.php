@extends('admin.layouts.master')
@section('content')
<div class="hk-pg-header mb-10">
    <div>
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>Enseignants</h4>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
      
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Enseignant : <strong style="color:#8C4A99">{{$ensgs->name}}</strong> </h5>
                
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>N°</th>
                                            <th>Nom Enseignant</th>
                                          
                                            <th>Matiére</th>
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            
                                       
                                        <tr>
                                           <td>
                                               {{$ensgs->id_en}}
                                               </td> 
                                        <td>
                                            {{$ensgs->name}}
                                        </td>
                                        <?php
                                        $classgrp = DB::table('enseignant_classes')->join('enseignants' , 'enseignant_classes.ens_id' ,'=' , 'enseignants.id_en')
                                        ->where('enseignants.id_en' , '=' ,$ensgs->id_en)
                                        ->join('classes' ,'enseignant_classes.classe_id' ,'=' ,'classes.id_c' )
                                        
                                        ->join('groupes' ,'enseignant_classes.classe_id' ,'=' ,'groupes.id_g' )
                                        
                                        ->select('classes.id_c' ,  'enseignants.id_en' , 'classes.nom_c' , 'groupes.nom_g' )
                                        ->distinct()
                                       //->take(10)
                                        ->get()
                                            ?>
                                      
                                       
                                           
                                            
                                           
                                            <br> <br>
                                     
                                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalForms">
                                       Ajouter Matiére
                                    </button></td>
                                            
                                       
                                        </tr>
                                        <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter une matiére à un classe - groupe</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="Padding: 4rem 3rem;">
                                                        <form method="POST" action="{{route('ajout.matiere',$ensgs->id_en)}}" class="billing-form" enctype="multipart/form-data">
                                                            @csrf
                                                            <?php
                                                      $classgrp = DB::table('enseignant_classes')->join('enseignants' , 'enseignant_classes.ens_id' ,'=' , 'enseignants.id_en')
                                                        ->where('enseignants.id_en' , '=' ,$ensgs->id_en)
                                                        ->join('classes' ,'enseignant_classes.classe_id' ,'=' ,'classes.id_c' )
                                                        
                                                        ->join('groupes' ,'enseignant_classes.groupe_id' ,'=' ,'groupes.id_g' )
                                                        
                                                        ->select('classes.id_c' ,  'enseignants.id_en' , 'classes.nom_c' , 'groupes.nom_g' , 'groupes.id_g' )
                                                        ->distinct()
                                                    //->take(10)
                                                        ->get()
                                                            ?>
                
                                                            <div class="col-lg-12 col-md-6 col-sm-12 form-group" >
                                                                
                                                                <select style="background-color:white  ; width:100%   ; color: #7e7e7e;
                                                                   border: 1px solid #e6e6e6;
                                                                   border-radius: 23px;
                                                                   -webkit-border-radius: 23px;
                                                                   -moz-border-radius: 23px;
                                                                   padding: 9px 20px;
                                                                   box-sizing: border-box;
                                                                   outline: none;" id="classes" name="classes"  >
                                                                   <option value="0"> choissir classe - groupe</option>
                                                                @foreach ($classgrp as $item)
                                                                  
                                                            <option value="{{ $item->id_c }}   " >
                                                           
                                                                {{ $item->nom_c }}   {{$item->nom_g}}</option>
                                                            
                                                            @endforeach
                                                                   </select>
                                                            </div>
                                                           
                                                      
                                                  
                                                            <div class="col-lg-12 col-md-6 col-sm-12 form-group"  > <br>
                                                              
                                                                <select style="background-color:white  ; width:100%   ; color: #7e7e7e;
                                                                   border: 1px solid #e6e6e6;
                                                                   border-radius: 23px;
                                                                   -webkit-border-radius: 23px;
                                                                   -moz-border-radius: 23px;
                                                                   padding: 9px 20px;
                                                                   box-sizing: border-box;
                                                                   outline: none;" id="grp" name="matieres"  >
                                                                   <option value="0"> choissir une Matiére</option>
                                                                   @foreach ($mat as $item)
                
                                                            <option value="{{ $item->id_m}} ">{{ $item->nom_m }} {{$item->nom_g}}</option>
                                                                  @endforeach
                                                                   </select>
                                                            </div>
                                                            <br>  <br>
                                                            <div class="col-lg-12 col-md-6 col-sm-12">
                                                                <button style="float:right" type="submit" class="btn btn-gradient-primary">Ajouter</button>
                                                            </div>
                                                      
                                                    </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
       
    </div>
</div>
@endsection