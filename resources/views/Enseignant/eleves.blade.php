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
                
                ->where('eleve_classes.classe_id' ,'=', $eleve->id_c)
                ->where('eleve_classes.groupe_id' ,'=', $eleve->id_g)

                
                
                ->distinct()
                ->count('eleve_id')
                ?>
                 <h3> <strong style="color:#f8a22f">{{$cli}} </strong> Elèves </h3>
              
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
     
        <div class="table-responsive">
            <h6 style="float:right"  class="text-gray-700 uppercase font-bold"> Date: {{ date('d-m-Y H:i'  ) }}</h6> <br>
           
        <h5  class="text-gray-700 uppercase font-bold"> Matiére : <strong style="color:#8c4a99">{{$matiere->nom_m}}</strong> </h5>
  
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th >N°</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Présence</th>
                      
                       
                    </tr>
                            <th></th>                        
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($eleves as $item)
                                            <tr>
                                            <td>{{$item->id}}</td>
                                            
                                             <td>
                                                 {{$item->nom}}
                                             </td>
                                             <td>
                                                 {{$item->prenom}}
                                             </td>
                                             <td>
                                              
                                                <form action="{{ route('presence',[$item->id_g,$item->id_c,$matiere->id_m]) }}" method="POST">
                                                    @csrf
                                                <input type="hidden" id="eleve" name="eleve" value="{{$item->id}}">
                                                <input type="hidden" id="ens" name="ens" value="{{Auth::user()->id}}">
                                                <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                                                    <input name="presences[{{ $item->id }}]" class="leading-tight" type="radio" value="present">
                                                    <span class="text-sm">P</span>
                                                </label>
                                                <label class="ml-4 block text-gray-500 font-semibold">
                                                    <input name="presences[{{ $item->id }}]" class="leading-tight" type="radio" value="absent">
                                                    <span class="text-sm">A</span>
                                                </label>
                                             </td>
                                            
                                             
                                            </tr>
                                            @endforeach
            </table>
            <hr>
            <button class="btn btn-primary" style="float:right" type="submit">valider</button>
        </div>
    </form>
    </div>
</div>
<!-- Teacher Table Area End Here -->
@endsection