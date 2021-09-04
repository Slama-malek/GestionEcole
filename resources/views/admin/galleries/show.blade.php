@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
                    <h3></h3>
                    <ul>
                        <li>
                        <a href="{{url('/admin')}}">Accueil</a>
                        </li>
                        <li>
                        <a href="{{url('/admin/gallery')}}">Galerie</a>
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
                                <img src="{{asset('/storage/gallery_images/'.$gallery->cover_image)}}" style="width:170px;height:200px" alt="">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">{{$gallery->name}}</h3>
                                    <div class="header-elements">
                                        <ul>
                                        
                                            <li><a href="{{url('/admin/gallery/'.$gallery->id.'/edit')}}"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @if ($gallery->description == '')
                        <strong>No description</strong>
                    @else
                    <p> {!!$gallery->description!!}</p>
                    @endif
                               
                          
                            </div>
                        </div>
                    </div>
                </div>

@endsection
