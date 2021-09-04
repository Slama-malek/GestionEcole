@extends('admin.layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Réclamations</h3>
    <ul>
        <li>
        <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Réclamations</li>
    </ul>
</div>
    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Réclamation</h3>
                                    </div>
                                    </div>
                                    <div class="notice-board-wrap">
                                    @foreach($reclams as $reclam)
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue" style="position:right">{{ \Carbon\Carbon::parse($reclam->created_at)->format('d-M,Y')}}
                                       </div>
                                        <br>
                                       <span class="font-medium text-dark-medium" >{{ $reclam->sujet }} </span>
                                       
                                        <h6 class="notice-title"><a href="#">{{ $reclam->message }}</a></h6>
                                        <div class="entry-meta"> {{ $reclam->nom_p }} {{ $reclam->prenom_p }}/ <span>{{ $reclam->tel }}-{{ $reclam->email }}</span></div>
                                        @if($reclam->nom_e||$reclam->prenom_e)<div class="entry-meta"> Aprops l'élève:<span>{{ $reclam->nom_e }} {{ $reclam->prenom_e }}</span></div>@endif
                                    </div>
                                    @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                  
<!-- Teacher Table Area End Here -->
@endsection