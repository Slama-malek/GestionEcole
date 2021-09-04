@extends('user.layouts.master')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">        <div class="container">
        <div class="container">
            <div class="content-box">
                <h1>Nos Clubs</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li>Clubs</li>
                </ul>
            </div>
        </div>
    </section>
<section class="classes-section classes-page-section sec-pad">
        <div class="container">
            <div class="row">
                @foreach($clubs as $club )
                <div class="col-lg-4 col-md-6 col-sm-12 block-column">
                    <div class="inner-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image-box"><a href="class-details.html"><img src="{{asset('storage/images/'.$club->image)}}" style="width:370px;height:250px"alt=""></a></figure>
                        <div class="lower-content">
                            <div class="link-btn"><a href="{{url('club/'.$club->id)}}"><i class="flaticon-next"></i></a></div>
                            <h3><a href="class-details.html">{{$club->nom}}</a></h3>
                            <div class="price">{{$club->prix}}</div>
                            <div class="text">{{$club->description}}</div>
                            <ul class="info-box">
                                <li>Age: <span>{{$club->age}} Ans</span></li>
                                <li>Taille: <span>{{$club->size}} Places</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection