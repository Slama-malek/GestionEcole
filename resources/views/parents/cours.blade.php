@extends('parents.layouts.master')
@section('content')
<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->
    <div class="hk-pg-header">
        <div>
        <h2 class="hk-pg-title font-weight-600 mb-10"> Eleve : {{$eleve->nom}} {{$eleve->prenom}}</h2>
            <p>Earnings from subscriptions that stared in the period 1 - 31 December 2018<i class="ion ion-md-help-circle-outline ml-5" data-toggle="tooltip" data-placement="top" title="Need help about earning stats"></i></p>
        </div>
        <div class="d-flex">
            <div class="btn-group btn-group-sm" role="group">
                <a href="{{url('/parent/eleve/'.$eleve->id)}}"><button type="button" class="btn btn-outline-light ">Présence</button></a>
            <a href="{{url('/parent/cours/'.$eleve->id)}}"><button type="button" class="btn btn-outline-light active">Cours</button></a>
            <a href="{{url('/parent/note/'.$eleve->id)}}"> <button type="button" class="btn btn-outline-light">Notes</button></a>
                     </div>
        </div>
        </div>
    </div>
<div class="hk-pg-wrapper" style="min-height: 372px;">
    <!-- Breadcrumb -->
   
   
    <!-- /Title -->
    <!-- /Breadcrumb -->

    <!-- Container -->
   
    <div class="container">
        
        <!-- Title -->

        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-center"><line x1="18" y1="10" x2="6" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="18" y1="18" x2="6" y2="18"></line></svg></span></span>Cours</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
               
                <div >
                    <div class="hk-row">
                        
                        <div class="col-xl-12">
                            @foreach ($matiere as $item)
                            <div class="card card-lg">
                                <h3 class="card-header border-bottom-0">
                                    {{$item->nom_m}}
                                </h3>
                                <?php
                                    $cours = DB::table('cours')->where('cours.mat_id' ,'=' ,$item->id_m)
                                    ->select('cours.nom_co' ,'cours.description','cours.file')
                                    ->get();
                                    ?>
                                @foreach($cours as $cr)

                                <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                    
                                    
                                     
                                     
                                    <div class="card">
                                        
                                        <div class="card-header d-flex justify-content-between">
                                            
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#{{$cr->nom_co}}" aria-expanded="false">{{$cr->nom_co}}</a>
                                        </div>
                                        <div id="{{$cr->nom_co}}" class="collapse" data-parent="#accordion_2">
                                           
                                          
                                            <div class="card-body pa-15">{{$cr->description}}
                                              <a  href="{{asset('storage/cours/'.$cr->file)}}" target="_blank" style="float:right"> Afficher</a>
                                               
                                            </div>
                                          
                                        </div>
                                        
                                    </div>
                                    
                                   
                                   
                                    
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


              

            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->

    <!-- Footer -->
   
    <!-- /Footer -->

</div>
@endsection