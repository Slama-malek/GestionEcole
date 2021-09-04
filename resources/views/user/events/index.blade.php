@extends('user.layouts.master')
@section('content')
  <!--Page Title-->
  <section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Nos évenements</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Accueil</a></li>
                <li>évenements</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


  <!-- event-page-section -->
  <section class="event-page-section">
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
                
            
            <div class="col-xl-6 col-lg-12 col-md-12 event-block">
                <div class="event-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="event-details.html"><img src="{{asset('storage/images/'.$event->image)}}" alt=""></a></figure>
                        <div class="content-box">
                        <div class="date">{{$event->dated}}</div>
                        <h3><a href="event-details.html">{{$event->titre}}</a></h3>
                            <div class="text">{{$event->description}}</div>
                            <div class="location"><i class="flaticon-pin"></i>Location: <span>{{$event->location}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
            
          
        </div>
    </div>
</section>
<!-- event-page-section end -->


@endsection