@extends('Enseignant.layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Eleves</h3>
    <ul>
        <li>
        <a href="{{url('/dashboard-enseignant')}}">Accueil</a>
        </li>
        <li>Liste des élèves</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Chercher un élève</h3>
               
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" 
                data-toggle="dropdown" aria-expanded="false">...</a>

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
                    <input type="text" placeholder="Search by Phone ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form>
    
        </div>
</div>
<div class="card height-auto">
    <div class="card-body">

        @if (session('success'))
                
        <div class="form-group">
           
            <label for="focusedinput" class="col-sm-2 control-label"></label>
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{ session('success') }}</strong>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>

   
   
    @elseif (session('info'))
    
    <div class="form-group">
       
        <label for="focusedinput" class="col-sm-2 control-label"></label>
        <div class="col-sm-12">
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('info') }}</strong>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

@endif
        <div class="heading-layout1">
            
            <div class="item-title">
                <?php $cli=\DB::table('eleve_classes')
                        ->join('enseignant_classes' ,'enseignant_classes.classe_id' ,'=','eleve_classes.classe_id')
               ->where('enseignant_classes.ens_id' ,'=', Auth::user()->id)
                
                ->where('eleve_classes.classe_id' ,'=', $nts->id_c)
                ->where('eleve_classes.groupe_id' ,'=', $nts->id_g)

                
                
                ->distinct()
                ->count('eleve_id')
                ?>
                 <h3> <strong style="color:#f8a22f">{{$cli}} </strong> Elèves </h3>
                
                 
             
           
            
                 
            </div>
            <div class="dropdown">
                <h6>Classe :<strong style="color:#8c4a99"> </strong> <strong style="color:#042954">{{$nts->nom_c}}</strong> <br> Groupe : <strong style="color:#042954">  {{$nts->nom_g}} </strong> </h6>
            </div>
        </div>
     
        <div class="table-responsive">
            <h6 style="float:right"  class="text-gray-700 uppercase font-bold"> Date: {{ date('d-m-Y H:i'  ) }}</h6> <br>
           
        <h5  class="text-gray-700 uppercase font-bold"> Matiére : <strong style="color:#f8a22f">{{$nts->nom_m}}</strong> </h5>
  
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th >N°</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Notes</th>
                        
                    </tr>
                                     
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($note as $item)
                        <?php 
                      
                        ?>
                        <tr>
                        <td class="w-md-25p">{{$item->id}}</td>
                        
                         <td class="w-md-25p">
                             {{$item->nom}}
                         </td>
                         <td class="w-md-25p">
                             {{$item->prenom}}
                         </td>
                         @if($item->note1 ==0)
                         <td  >
                            @if($item->note <10)
                            <span style="border:1px solid black;
                            padding:3px;">0{{$item->note}}</span> 
                           
                            @else
                             
                            <span style="border:1px solid black;
                            padding:3px;">{{$item->note}}</span>
                            @endif
                         </td>
                         
                            @else
                            <td> 
                                @if($item->note <10)
                           <span style="border:1px solid black;
                           padding:3px;">0{{$item->note}}</span> 
                           @endif &nbsp;
                           @if($item->note1 <10)
                            <span style="border:1px solid black;
                            padding:3px;">0{{$item->note1}}</span>
                           @endif
                         </td>
                         @endif
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <button class="btn " style="background-color:#F9F0F9 ; float:right"><a href="{{url('/ens/eleves',[$item->id_c,$item->id_g,$item->id_m])}}">Modifier <i class="fa fa-pencil"></i> </a></button>
            </div>
        </form>
    </div>
</div>
<!-- Teacher Table Area End Here -->
@endsection