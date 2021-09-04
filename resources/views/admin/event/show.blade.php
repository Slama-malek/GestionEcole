@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>
                        <a href="{{url('/admin/event')}}">Evénments</a>
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
                                <img src="{{asset('/storage/images/'.$event->image)}}" style="width:170px;height:200px" alt="">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">{{$event->titre}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                        
                                            <li><a href="{{url('/admin/evenement/'.$event->id.'/edit')}}"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @if ($event->description == '')
                        <strong>pas de description</strong>
                    @else
                    <p> {!!$event->description!!}</p>
                    @endif
                               
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Nom:</td>
                                                <td class="font-medium text-dark-medium">{{$event->titre}}</td>
                                            </tr>
                                            @if ($event->prix != '')
                                            <tr>
                                                <td>Prix:</td>
                                                <td class="font-medium text-dark-medium">{{$event->prix}}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td>Date de début:</td>
                                                <td class="font-medium text-dark-medium"> {{$event->dated}}</td>
                                            </tr>
                                            <tr>
                                                <td>Date de fin:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($event->datef)->format('d F Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Heure début:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($event->heured)->format('H:i')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Heure fin:</td>
                                                <td class="font-medium text-dark-medium">{{ \Carbon\Carbon::parse($event->heuref)->format('H:i')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Location:</td>
                                                <td class="font-medium text-dark-medium">{{$event->location}}</td>
                                            </tr>
                                            <tr>
                                                <td>Téléphone:</td>
                                                <td class="font-medium text-dark-medium">{{$event->telephone}}</td>
                                            </tr>
                                           
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
