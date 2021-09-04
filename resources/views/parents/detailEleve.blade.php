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
                <a href="{{url('/parent/eleve/'.$eleve->id)}}"><button type="button" class="btn btn-outline-light active">Présence</button></a>
            <a href="{{url('/parent/cours/'.$eleve->id)}}"><button type="button" class="btn btn-outline-light">Cours</button></a>
            <a href="{{url('/parent/note/'.$eleve->id)}}"> <button type="button" class="btn btn-outline-light ">Notes</button></a>
 </div>
        </div>
        </div>
    </div>
    <!-- /Title -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
  
        <!-- /Breadcrumb -->

        <!-- Container -->
        <div class="container">

            <!-- Title -->
            <div class="hk-pg-header">
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="alert-circle"></i></span></span>Présences</h4>
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                  
                    <section class="hk-sec-wrapper">
                        
                      
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table id="datable_31" class="table table-hover w-100 display">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Matiere</th>
                                                <th>Enseignant</th>
                                                <th>Presence</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($presence as $pres)
                                            <tr>
                                                <td>{{$pres->date}}</td>
                                                <td>{{$pres->nom_m}}</td>
                                                <td>{{$pres->name}}</td>
                                               
                                                <td><span class="badge badge-danger">A</span></td>
                                                
                                                
                                            </tr>
                                           
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                  
                </div>
            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

        <!-- Footer -->
       
        <!-- /Footer -->

    </div>
</div>
@endsection