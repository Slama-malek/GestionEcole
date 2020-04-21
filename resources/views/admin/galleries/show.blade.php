@extends('admin.layouts.master')

@section('content')
  
<div class="row">
    <div class="col-xl-12">
       
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title" style="margin-left:30%;  margin-right: 50% ; width: 50%;">Titre : {{$gallery->name}}</h5>
            <p class="mb-25">
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div>
                            <img src="{{asset('/storage/gallery_images/'.$gallery->cover_image)}}" style="display: block;
                            margin-left: auto; width: 50%;
                            margin-right: auto ; border: 1% ; " alt="Image Not Found">
                        </div>
                        <div class="col-md-6">
                            <p  class="form-control mt-15" rows="3" placeholder="Textarea" disabled>
                                @if ($gallery->description == '')
                        <strong>No description</strong>
                    @else
                        {!!$gallery->description!!}
                    @endif
                            </p>
                            
                        </div>
                        <div class="col-sm">
                          
                            <div class="row mb-25">
                                <div class="col-sm">
                                    <div class="button-list">
                                        <div class="panel-heading text-right">
                                        <a href="{{url('admin/gallery/'.$gallery->id .'/edit')}}"  class="btn btn-icon btn-success btn-icon-style-1"><span class="btn-icon-wrap"><i class="icon-pencil"></i></span></a> <b>
                                    
                                        {!!Form::open(['action' => ['GalleriesController@destroy', $gallery->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::button('<i ></i>', ['class' => 'btn btn-icon btn-danger btn-icon-style-1  icon-trash '])}}

                                    
                                        </div>                           
                                       

                                        {!!Form::close()!!}
                                       

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
</div>
   

@endsection
