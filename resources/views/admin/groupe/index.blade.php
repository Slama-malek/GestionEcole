@extends('admin.layouts.master')
@section('content')
<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>groupes</h4>
</div>
<div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <div class="panel-heading text-right">
                <a type="button" href="{{url('/admin/groupe/create')}}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> des nouveaux  groupes</a>
                    </div>
            <h5 class="hk-sec-title">Liste des groupes </h5>
            <p class="mb-40"> </p>
            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <table id="datable_1" class="table table-hover w-100 display pb-30"  >
                            <thead>
                            
                                <tr>
                                    <th>N°</th>
                                    <th>Nom</th>
                                    
                                   
                                  
                                    
                                    <th>Action</th>
                                </tr>
                            
                            </thead>
                            <tbody>
                            @foreach($groupes as $groupe )
                                <tr>
                                    <td>{{$groupe->id_g}}</td>
                                    <td> <p><a href="{{url('/admin/groupe/'.$groupe->id_g )}}">{{$groupe->nom_g}}</a></p></td>
                                   
                                   
                                    
                                    <td>
                                    </td>
                                </tr>
                              
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            
        </section>

    
@endsection