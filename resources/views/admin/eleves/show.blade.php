

@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
   <!-- Breadcubs Area Start Here -->
   <div class="breadcrumbs-area">
    <h3>ÉLèves</h3>
    <ul>
        <li>
        <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Détails élève</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>A propos de :</h3>
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
        <div class="single-info-details">
            <div class="item-img">
                <img src="{{asset('dash/img/figure/student1.jpg')}}" alt="student">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium">{{$classEle->nom}} {{$classEle->prenom}}</h3>
                    <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
              
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                            <tr>
                                <td>Nom et prénom:</td>
                                <td class="font-medium text-dark-medium">{{$classEle->nom}} {{$classEle->prenom}}</td>
                            </tr>
                            <tr>
                                <td>Sexe:</td>
                                @if(($classEle->sexe)==0)
                                <td class="font-medium text-dark-medium">F</td>
                                @else
                                <td class="font-medium text-dark-medium">H</td>
                                @endif
                            </tr>
                           
                            <tr>
                                <td>Date de naissance:</td>
                                <td class="font-medium text-dark-medium">{{$classEle->date_naiss}}</td>
                            </tr>
                            <tr>
                                <td>Classe:</td>
                                <td class="font-medium text-dark-medium">{{$classEle->nom_c}}</td>
                            </tr>
                            <tr>
                                <td>Groupe:</td>
                                @if($classEle->groupe_id != 0) 
             
                                <?php 
                                $grp=DB::table('eleve_classes')->join('eleves', 'eleve_classes.eleve_id','=','eleves.id')
                                   ->join('classes', 'eleve_classes.classe_id','=','classes.id_c')
                                   ->join('groupes', 'eleve_classes.groupe_id','=','groupes.id_g')
                                   
                                   ->where('eleves.id' , '=' , $classEle->id)
                                   ->select('eleves.id' , 'eleve_classes.groupe_id','classes.id_c' ,'groupes.id_g', 'groupes.nom_g','classes.nom_c' , 'classes.nom_c' ,'eleves.id' , 'classes.id_c' ,'eleves.nom','eleves.prenom','eleves.date_naiss' ,'eleves.lieu_naiss' ,'eleves.nom_p','eleves.prenom_p' )
                               ->first();
                               ?>
                                <td class="font-medium text-dark-medium">{{$grp->nom_g}}</td>
@else
             <td> <strong> <i class="fa fa-info-circle " style="color:red"></i> L'éleve n'appartient pas encore à un groupe </strong>
             </td>
                @endif
                            </tr>
                            <tr>
                                <tr>
                                    <td>Nom et prénom de pére:</td>
                                    <td class="font-medium text-dark-medium">{{$eleve->nom_p}} 
                                     {{$eleve->prenom_p}}</td>
                                </tr>
                                <tr>
                                    <td>Nom et prénom de mére:</td>
                                    <td class="font-medium text-dark-medium">{{$eleve->nom_m}} 
                                        {{$eleve->prenom_m}}</td>
                                </tr>
                                <td>Profession du pére:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->profession_p}}</td>
                            </tr>
                            <tr>
                                <td>Profession du mére:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->profession_m}}</td>
                            </tr>
                            <tr>
                                <td>E-mail de pére :</td>
                                <td class="font-medium text-dark-medium">{{$eleve->email_p}}</td>
                            </tr>
                            <tr>
                                <td>E-mail de mére :</td>
                                <td class="font-medium text-dark-medium">{{$eleve->email_m}}</td>
                            </tr>
                            <tr>
                                <td>N° du télephone du pére:</td>
                                @if(($eleve->tel_p)!= null) 
                                <td class="font-medium text-dark-medium"> {{$eleve->gsm_p}} | {{$eleve->tel_p}} </td>
                        @else
                        <td class="font-medium text-dark-medium">{{$eleve->gsm_p}}</td>
                        @endif
                            </tr>
                            <tr>
                                <td>N° du télephone du mére:</td>
                                @if(($eleve->tel_m)!= null) 
                                <td class="font-medium text-dark-medium">{{$eleve->gsm_m}} | {{$eleve->tel_m}}</td>
                                @else
                                <td class="font-medium text-dark-medium">{{$eleve->gsm_m}}</td>
                           @endif
                            </tr>
                            <tr>
                                <td>Date de l'Admission :</td>
                                <td class="font-medium text-dark-medium">{{$eleve->created_at}}</td>
                            </tr>
                            
                            
                            <tr>
                                <td>Addresse:</td>
                                <td class="font-medium text-dark-medium">{{$eleve->add_p}}</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection