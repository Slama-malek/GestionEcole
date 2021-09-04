@extends('admin.layouts.master')

@section('content')
<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="users"></i></span></span>groupes</h4>
</div>
<div class="row">
    <div class="col-xl-12">
       
        <section class="hk-sec-wrapper" >
            <h5 class="hk-sec-title" style="margin-left:30%;  margin-right: 50% ; width: 50%;"></h5>
            <p class="mb-25">
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        
                        <div class="col-md-12">
                        Nom : {{$groupe->nom}}
                        </div> <br><br>
                         
                        <div class="col-md-12">
                            groupe : {{$groupe->nom_g}}
                            </div> <br><br>
                    
                        <div class="col-sm"><br>
                          
                            <div class="row mb-25">
                                <div class="col-sm">
                                    <div class="button-list">
                                       

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
