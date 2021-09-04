@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
    <h3>ÉLèves</h3>
    <ul>
        <li>
            <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Tous Les élèves</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Tous Les élèves</h3>
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
                       
                        <th>Nom et Prénom</th>
                        <th>Sexe</th>
                        <th>Classe</th>
                        <th>Groupe</th>
                        
                       
                        <th>Date de naissance</th>
                        <th>Détails</th>
                       
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classEle as $ele)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                            <label class="form-check-label">{{$ele->id}}</label>
                            </div>
                        </td>
                     
                        <td>{{$ele->nom}} {{$ele->prenom}}</td>
                        @if($ele->sexe==0)
                        <td> Male</td>
                        @else
                        <td> Female</td>
                        @endif

                        <td> <span class="badge badge-danger" style="background-color:#F8A42F ; color:#042954">{{$ele->nom_c}}</span> </td></td>
                        <td>
                            @if($ele->groupe_id != 0) 
                            
                            <?php 
                            $groupe=DB::table('eleve_classes')->join('eleves', 'eleve_classes.eleve_id','=','eleves.id')
                               ->join('classes', 'eleve_classes.classe_id','=','classes.id_c')
                               ->join('groupes', 'eleve_classes.groupe_id','=','groupes.id_g')
                               ->where('eleves.id' , '=' , $ele->id)
                               ->select('eleves.id' , 'eleve_classes.groupe_id','classes.id_c' ,'groupes.id_g', 'groupes.nom_g','classes.nom_c' , 'classes.nom_c' ,'eleves.id' , 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
                           ->first();
                           ?>
                          <span class="badge badge-success " style="background-color:#042954 ; color:#f8a42f"
                           >{{$groupe->nom_g}}</span> </td>
                          
                          
                            @else 
                            <a href="{{url('/admin/ajoutGrpElve',[$ele->id,$ele->id_c])}}"><button style="background-color:#042954 ; color:#F8A42F" class="btn btn-icon btn-icon-circle  btn-icon-style-2"   ><span class="btn-icon-wrap"><i class="fa fa-plus"></i></span> </button></a>
                            @endif</td>
                            <td>
                                {{$ele->date_naiss}} à {{$ele->lieu_naiss}}
                            </td>
                        <td> <a href="{{url('/admin/eleve',$ele->id)}}"><button class="btn btn-icon btn-icon-circle  " style="background-color:#042954 ; color:#F8A42F"  ><span class="btn-icon-wrap"><i class="fa fa-eye"></i></span></button></a> </td>
                        
                        <td>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="flaticon-more-button-of-three-dots"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <span> {{$classEle->links()}}</span>
           
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->


@endsection