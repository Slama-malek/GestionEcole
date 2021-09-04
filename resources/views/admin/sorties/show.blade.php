@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>
                        <a href="{{url('/admin/sortie')}}">Sorties</a>
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
                                <img src="{{asset('/storage/images/'.$sortie->image)}}" style="width:170px;height:200px" alt="">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">{{$sortie->titre}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                        
                                            <li><a href="{{url('/admin/sortie/'.$sortie->id.'/edit')}}"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @if ($sortie->description == '')
                        <strong>No description</strong>
                    @else
                    <p> {!!$sortie->description!!}</p>
                    @endif
                               
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Titre:</td>
                                                <td class="font-medium text-dark-medium">{{$sortie->titre}}</td>
                                            </tr>
                                            <tr>
                                                <td>Prix:</td>
                                                <td class="font-medium text-dark-medium">{{$sortie->prix}}</td>
                                            </tr>
                                            <tr>
                                                <td>Téléphone:</td>
                                                <td class="font-medium text-dark-medium"> {{$sortie->telephone}}</td>
                                            </tr>
                                           
                                           
                                            <tr>
                                                <td>Date:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($sortie->date_s)->format('d F Y')}}</td>
                                            </tr>
                                           
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
