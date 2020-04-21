@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper hk-gallery-wrap">
            <div class="panel-heading text-right">
            <a type="button" href="{{url('/admin/gallery/create')}}" class="btn btn-gradient-primary"><i class="fa fa-plus"></i> des nouveaux photos</a>
                </div>
            <ul class="nav nav-light nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Library</a>
                </li>
                <li class="nav-item">
                <a href="{{url('admin/gallery')}}" class="nav-link">Photos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Video</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Album</a>
                </li>
                
            </ul>
           
            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel">
                <h6 class="mt-30 mb-20">date </h6>
                    @if (count($galleries) > 0)
                    <div class="row hk-gallery">
                        @foreach($galleries as $gallery)
                        <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="{{asset('storage/gallery_images/'.$gallery->cover_image)}}" >
                            <a href="{{url('admin/gallery/'.$gallery->id)}}" class="">
                                <div class="gallery-img" style="background-image:url('{{asset('storage/gallery_images/'.$gallery->cover_image)}}');" ></div>
                                
                            </a>
                            <p><a href="/gallery/{{$gallery->id}}">{{$gallery->name}}</a></p>
                        </div>
                        
                        @endforeach
                        {{$galleries->links()}}
                    </div>
                    
                    @else
                    <h3>Pas des images dans la Gallerie <a class="btn btn-icon btn-icon-circle btn-primary  btn-icon-style-2" href="{{url('/admin/gallery/create')}}" ><span class="btn-icon-wrap"><i class="icon-plus"></i></span></a> </h3>
                    
    @endif
                </div>
            </div>
        </section>
    </div>
</div>

    @endsection