@extends('user.layouts.master')
@section('content')
<!--Page Title-->
<section class="page-title centred" style="background-image: url({{asset('cli/images/background/page-title.jpg')}});">
    <div class="container">
        <div class="content-box">
            <h1>Notre Gallerie</h1>
            <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Accueil</a></li>
                <li>Gallerie</li>
            </ul>
        </div>
    </div>
</section>


<section class="gallery-page-section">
    <div class="container">
        <div class="sortable-masonry">
            <div class="filters">
              
            </div>
           
            <div class="items-container row clearfix">
                @foreach($galleries as $gallery )
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all program children nature">
                    <div class="gallery-block" >
                        <div class="image-box">
                            <figure class="image" ><img   style="width:100%" src="{{asset('storage/gallery_images/'.$gallery->cover_image)}}" width="50%" alt=""></figure>
                            <div class="overlay-box"><a href="{{asset('storage/gallery_images/'.$gallery->cover_image)}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-add"></i></a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
</section>


@endsection