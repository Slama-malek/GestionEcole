@extends('admin.layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Parents</h3>
    <ul>
        <li>
        <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Parents à verifiés</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Parents à verifiés</h3>
            </div>
           <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" 
                data-toggle="dropdown" aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
            </div>
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by ID ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Phone ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th> 
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">N°</label>
                            </div>
                        </th>
                     
                        <th>Nom</th>
                        <th>Email</th>
                        
                        <th> verifié ?</th>
                            <th></th>                        
                       
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($users as $user )
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                
                                                    <td>   
                                                      
                                                    
                                                     
                                                        <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('parent.verif',$user->id) }}" style="display: none">
                                                            {{ csrf_field() }}
                                                            
                                                          </form>
                                                          <a href="" onclick="
                                                          if(confirm('verifier cet parent?'))
                                                              {
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{ $user->id }}').submit();
                                                              }
                                                              else{
                                                                event.preventDefault();
                                                              }" ><span class="btn btn-icon btn-icon-circle  " style="background-color:#042954 ; color:#F8A42F"  ><span class="btn-icon-wrap"> <i class="fa fa-check"> </i></span></a>
                                                       </a>
                                                       
                                                    </td>
                                                   
                                                    
                                                    
                                                   
                                   
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                       
                                                </tr>
                    </tr>
                    
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- Teacher Table Area End Here -->
@endsection