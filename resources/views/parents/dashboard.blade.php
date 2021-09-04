@extends('parents.layouts.master')
@section('content')
<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10"> Dashboard Parent</h2>
            <p>Earnings from subscriptions that stared in the period 1 - 31 December 2018<i class="ion ion-md-help-circle-outline ml-5" data-toggle="tooltip" data-placement="top" title="Need help about earning stats"></i></p>
        </div>
        
    </div>
    <!-- /Title -->

    <!-- Row -->
    @if(Auth::user()->verif == 'parent')
    <div class="row">
        <div class="col-xl-12">
            <section id="example-basic-p-0" role="tabpanel" aria-labelledby="example-basic-h-0" class="body current" aria-hidden="false">
                <h3 class="display-4 mb-40"></h3>
                <div class="row">
                    <?php $cli=\DB::table('eleves')->where('eleves.par_id' ,'=', Auth::user()->id)
                                
                    ->count('par_id')
                    ?>
                    <div class="col-xl-12 mb-20">
                        @if($cli != 0)
                        <div class="card">
                            <h6 class="card-header border-0">
                              
                               
                                <i class="ion ion-md-clipboard font-21 mr-10"></i>Vous avez <code> {{$cli}}</code> eleve(s)
                               
                            </h6>
                            <div class="card-body pa-0">
                              
                            </div>
                        </div>
                    </div>
                    @endif
                   
                </div>
            </section>
            @if($cli == 0)
            <div class="alert alert-info alert-wth-icon alert-dismissible fade show" role="alert">
            <span class="alert-icon-wrap"><i class="zmdi zmdi-alert-circle-o"></i></span> Vous n'avez pas encore faire l'inscription de  votre enfant .   <a href="{{url('/inscription')}}">Remplir le formulaire</a> 
               
            </div>
            @else 

            <div class="hk-row">
                
                @foreach($eleves as $eleve)
                <div class="col-md-6">
                  <div class="card card-sm">
                    <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Nom : <strong>{{$eleve->nom}}</strong></span> 
                                    <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Prénom : <strong>{{$eleve->prenom}}</strong></span>
                                    <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Date de naissance  : <strong>{{$eleve->date_naiss}}</strong></span>
                                    <?php 
                                    $classGrp = DB::table('eleve_classes')->join('classes' ,'eleve_classes.classe_id' ,'=' ,'classes.id_c')
                                                                        ->join('groupes' ,'eleve_classes.groupe_id' ,'=' ,'groupes.id_g')
                                                                        ->join('eleves' ,'eleve_classes.eleve_id' ,'=' ,'eleves.id')
                                                                        ->where('eleves.id' ,'=' , $eleve->id)
                                                                        ->select('classes.nom_c' , 'groupes.nom_g')
                                                                        ->first();

                                    ?>
                                   <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Classe  : <strong>{{$eleve->nom_c}}</strong></span>
                                    @if ($classGrp != Null)
                                        
                                  
                                    <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Groupe  : <strong>{{$classGrp->nom_g}}</strong></span>
                                   @else 
                                   <span class="d-block font-12 font-weight-500 text-dark text-uppercase mb-5">Groupe : <strong style="color:#f7bd2a">n'est pas affecté à un groupe</strong></span>
                                    @endif
                                  
                                </div>
                                <div>
                                    @if ($eleve->sexe == 1)
                                    <a href="#">
                                    <div>
                                   <img  src="{{asset('adm/images/studentF.png')}}" alt="">
                                        </div>
                                    </a>
                                        @else 
                                       <a href="#">
                                        <div>
                                            <img src="{{asset('adm/images/student.png')}}" alt="">
                                            </div>
                                       </a>
                                    @endif
                         
                                    
                                </div>
                               
                            </div>
                        <a href="{{url('/parent/eleve/'.$eleve->id)}}"><i class="fa fa-arrow-right" style="float:right"> voir détail</i></a>
                        </div>
                    </div>
                </div>
              @endforeach
               
            </div>
          
            
        
          
            @endif
            @else
             <!-- Page Alerts -->
             <div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
                <span class="alert-icon-wrap"><i class="zmdi zmdi-help"></i></span> Votre profil attend d'être activé. Une fois terminé, vous pouvez le consulter.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- /Page Alerts -->
            @endif
        </div>
    </div>
    <!-- /Row -->
</div>
@endsection