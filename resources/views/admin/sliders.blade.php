@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    span:hover + img  {opacity: 0.6}
</style>
<div style="background-color: white;padding:25px ">
    <div class="accordion" id="accordionExample">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
        <div class="card">
            <div class="card-header" id="headingO">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseO"
                        aria-expanded="true" aria-controls="collapseO">
                        Comment ça marche
                    </button>
                </h2>
            </div>
            <div style="padding:20px">
                <form action="{{route('Sliders.store')}}" class="form-horizontal" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">image</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control1" id="imgupload1" name="imgupload1" placeholder="Default Input">
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">numero du slider</label>
                        <div class="col-sm-8">
                            <select name="selector1" id="selector1" class="form-control1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                                <button type="submit" class="btn btn-outline-success col-sm-12" style="margin-top:10px">enregistrer</button>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    
                    <input type="hidden" id="slider" name="slider" value="1"/>
                </form>
            </div>
            <div id="collapseO" class="collapse show" aria-labelledby="headingO" data-parent="#accordionExample">
                <div class="card-body" style="text-align: center">
                    <img src="{{asset('src/img/templ.png')}}" height="350px" />
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        slider 1
                    </button>
                </h2>
            </div>
            <input type="hidden" id="toDelete" name="toDelete">
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="padding:10px">
                <div class="card-body">
                    
                    <div style="padding: 0px"> 
                      
                        <div class="row">
                            @foreach ($sm1 as $sm)
                                <div class="card bg-light mb-3" style="max-width: 18rem;margin-left:10px">
                                    <div  style="text-align: center">
                                        <form action="{{route('Sliders.destroy', ['id'=>$sm->id])}}" method='POST'>
                                            @csrf
                                            <input type=" button " id="1v{{$sm->id}}" class="card-link btn btn-success" onclick="show('{{$sm->name}}')" value="agrandir">
                                       
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger " >Delete </button>
                                        </form>
                                     
          
                                    </div>
                                    <div class="card-body">
                                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                            <span><img src="{{asset('uploads/images/'.$sm->name)}}" class="card-img"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        slider 2
                    </button>
                </h2>
            </div>  
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div style="padding: 0px"> 
                        <div class="row">
                            @foreach ($sm2 as $sm)
                                <div class="card bg-light mb-3" style="max-width: 18rem;margin-left:10px">
                                    <div  style="text-align: center">
                                        <form action="{{route('Sliders.destroy', ['id'=>$sm->id])}}" method='POST'>
                                            @csrf
                                            <input type=" button " id="1v{{$sm->id}}" class="card-link btn btn-success" onclick="show('{{$sm->name}}')" value="agrandir">
                                        <!--<a href="#" id="1v{{$sm->id}}" class="card-link" onclick="show('{{$sm->name}}')" >agrandir</a>-->
                                        
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger " >Delete </button>
                                        </form>
                                     
                                    </div>
                                    <div class="card-body">
                                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                            <span><img src="{{asset('uploads/images/'.$sm->name)}}" class="card-img"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        slider 3
                    </button>
                </h2>
            </div>  
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div style="padding: 0px"> 
                        <div class="row">
                            @foreach ($sm3 as $sm)
                                <div class="card bg-light mb-3" style="max-width: 18rem;margin-left:10px">
                                    <div  style="text-align: center">
                                        <form action="{{route('Sliders.destroy', ['id'=>$sm->id])}}" method='POST'>
                                            @csrf
                                            <input type=" button " id="1v{{$sm->id}}" class="card-link btn btn-success" onclick="show('{{$sm->name}}')" value="agrandir">
                                        <!--<a href="#" id="1v{{$sm->id}}" class="card-link" onclick="show('{{$sm->name}}')" >agrandir</a>-->
                                        
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger " >Delete </button>
                                        </form>
                                     
                                    </div>
                                    <div class="card-body">
                                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                            <span><img src="{{asset('uploads/images/'.$sm->name)}}" class="card-img"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        slider 4
                    </button>
                </h2>
            </div>  
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <div style="padding: 0px"> 
                        <div class="row">
                            @foreach ($sm4 as $sm)
                                <div class="card bg-light mb-3" style="max-width: 18rem;margin-left:10px">
                                    <div  style="text-align: center">
                                        <form action="{{route('Sliders.destroy', ['id'=>$sm->id])}}" method='POST'>
                                            @csrf
                                            <input type=" button " id="1v{{$sm->id}}" class="card-link btn btn-success" onclick="show('{{$sm->name}}')" value="agrandir">
                                        <!--<a href="#" id="1v{{$sm->id}}" class="card-link" onclick="show('{{$sm->name}}')" >agrandir</a>-->
                                        
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger " >Delete </button>
                                        </form>
                                     
                                    </div>
                                    <form action="{{url('removeImage')}}" method="post" enctype="multipart/form-data" style="">
                                        <input type="hidden" id="toDel" name="toDel">
                                    </form>
                                    <div class="card-body">
                                        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                            <span><img src="{{asset('uploads/images/'.$sm->name)}}" class="card-img"></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            slider 5
                        </button>
                    </h2>
                </div>  
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <div style="padding: 0px"> 
                            <div class="row">
                                @foreach ($sm5 as $sm)
                                    <div class="card bg-light mb-3" style="max-width: 18rem;margin-left:10px">
                                        <div  style="text-align: center">
                                            <form action="{{route('Sliders.destroy', ['id'=>$sm->id])}}" method='POST'>
                                                @csrf
                                                <input type=" button " id="1v{{$sm->id}}" class="card-link btn btn-success" onclick="show('{{$sm->name}}')" value="agrandir">
                                            <!--<a href="#" id="1v{{$sm->id}}" class="card-link" onclick="show('{{$sm->name}}')" >agrandir</a>-->
                                            
                                                @method('DELETE')
                                                <button type="submit"class="btn btn-danger " >Delete </button>
                                            </form>
                                         
                                            </div>
                                        <div class="card-body">
                                            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                                                <span><img src="{{asset('uploads/images/'.$sm->name)}}" class="card-img"></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<form action="{{url('removeImage')}}" method="post" enctype="multipart/form-data" style="">
    <input type="hidden" id="toDel" name="toDel">
</form>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modalContent">
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#selector1").change(function(){
            $("#slider" ).val($("#selector1" ).val());
        });
    });
    function show(image){
        $('#modalContent').html("<img style='height:auto;width:100%'  src='uploads/images/"+image+"'>"); 
        $('#myModal').modal('show'); 
    }
    function removeImage(filename){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        

        $.ajax({
            type: 'POST',
            url: '/destroySld'  ,
            data: {_token: CSRF_TOKEN,name:filename},
            dataType: 'JSON',
            success:function(data){
                //$("#destDisplay").html(data);
            },
            error:function(data){
                console.log(data);
            }
        });
        location.reload();
    }
</script>
@endsection