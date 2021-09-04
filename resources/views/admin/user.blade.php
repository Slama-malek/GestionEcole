@extends('admin.layouts.master')
@section('content')
<div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>Utilisateurs</h4>
                </div>
                <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Liste des utilisateurs</h5>
                            <p class="mb-40"> </p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30"  >
                                            <thead>
                                            
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Rôle</th>
                                                 
                                                    
                                                    <th>Action</th>
                                                </tr>
                                            
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user )
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    @if ($user->usertype == 'admin')
                                                    <td><span class="badge badge-danger">admin</span> </td>
                                                    @else @if($user->usertype == 'enseignant')
                                                    <td><span class="badge badge-info">Enseignant</span> </td>
                                                    @else 
                                                    <td><span class="badge badge-warning">Parent</span> </td>
                                                    @endif
                                                    @endif
                                                   
                                                    <td>
                                                            <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                        </td>
                                                </tr>
                                              
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                              
                            </div>
                            <hr>
                            {{$users->links()}}
                        </section>
                      
@endsection