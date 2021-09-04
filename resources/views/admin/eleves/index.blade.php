@extends('admin.layouts.master')

@section('content')

<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>Ajouter un eleve au groupe</h4>
</div>

       


<div class="row">
    <div class="col-xl-12">
       
        <section class="hk-sec-wrapper" >
            <h5 class="hk-sec-title" style="margin-left:30%;  margin-right: 50% ; width: 50%;"></h5>
            <p class="mb-25">
            <div class="row">

                <div class="col-sm">
                    <div class="row">
                      
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                              <strong >Nom: </strong> {{$classEle->nom}}  <br><strong>Prénom :</strong> {{$classEle->prenom}}
                            <br>  
                         <strong>Classe :</strong>    <span class="badge badge-danger " style="background-color:#AF56AB"> {{$classEle->nom_c}}</span> <br>
                        </div> <br> <br> <br> <br>
                         
                        <form method="POST" action="{{route('ajout.groupEleve',[$classEle->id,$classEle->id_c])}}" class="billing-form" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12 col-md-6 col-sm-12 form-group" >
                              
                                <select style="background-color:white  ; width:100%   ; color: #7e7e7e;
                                   border: 1px solid #e6e6e6;
                                   border-radius: 23px;
                                   -webkit-border-radius: 23px;
                                   -moz-border-radius: 23px;
                                   padding: 9px 20px;
                                   box-sizing: border-box;
                                   outline: none;" id="grp" name="groupes">
                                   <option value="0"> choissir votre groupe</option>
                                   @foreach ($groupe as $grp)

                                     <option value="{{ $grp->id_g }}">{{ $grp->nom_g }}</option>
                                   @endforeach
                                   </select>
                            </div>
                           
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <button style="float:right" type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        
                        </form> 

                     
                      
                        
                                       
                                 
                                       

                    </div>
                </div>
            </div>
            <div>
                
            </div>
        </section>
       
    </div>
</div>
@endsection