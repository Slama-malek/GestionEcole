@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>
                        <a href="{{url('/admin/club')}}">Clubs</a>
                        </li>

                        <li>Détails</li>
                    </ul>
                </div>
<div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3></h3>
                            </div>
                
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="{{asset('/storage/images/'.$club->image)}}" style="width:170px;height:200px" alt="">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">{{$club->nom}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                        
                                            <li><a href="{{url('/admin/club/'.$club->id.'/edit')}}"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @if ($club->description == '')
                        <strong>No description</strong>
                    @else
                    <p> {!!$club->description!!}</p>
                    @endif
                               
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Nom:</td>
                                                <td class="font-medium text-dark-medium">{{$club->nom}}</td>
                                            </tr>
                                            <tr>
                                                <td>Prix:</td>
                                                <td class="font-medium text-dark-medium">{{$club->prix}}</td>
                                            </tr>
                                            <tr>
                                                <td>Taille:</td>
                                                <td class="font-medium text-dark-medium"> {{$club->size}}</td>
                                            </tr>
                                            <tr>
                                                <td>Age:</td>
                                                <td class="font-medium text-dark-medium">{{$club->age}}</td>
                                            </tr>
                                            <tr>
                                                <td>Heure début:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($club->horaire_debut)->format('H:i')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Heure fin:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($club->horaire_fin)->format('H:i')}}</td>
                                            </tr>
                                           
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
