@extends('admin.layouts.master')
@section('content')

<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="info"></i></span></span>Reclamations</h4>
</div>

<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">Liste des reclamations</h5> <br>
   
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                
                                <th>Nom du parent </th>
                                    <th>Prénom du parent </th>
                                    <th>Nom  d'éleve </th>
                                    <th>Prénom  d'éleve </th>
                                    <th>Email </th>
                                    <th>Télephone </th>
                                    <th>Sujet </th>
                                    <th>Message </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               
                                @foreach ($reclams as $rec)
                                <tr>
                                   
                                <td>{{$rec->nom_p}}</td>
                                <td>{{$rec->prenom_p}}</td>
                                    
                                <td>{{$rec->nom_e}}</td>
                                <td>{{$rec->prenom_e}}</td>
                                <td>{{$rec->email}}</td>
                                <td>{{$rec->tel}}</td>
                                <td>{{$rec->sujet}}</td>
                                <td>{{$rec->message}}</td>
                                    
                                     </tr>
                                @endforeach
                            </tr>
                           
                           
                           
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection