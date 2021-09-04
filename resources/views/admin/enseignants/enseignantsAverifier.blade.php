@extends('admin.layouts.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Enseignants</h3>
    <ul>
        <li>
        <a href="{{url('/admin')}}">Accueil</a>
        </li>
        <li>Enseignants à verifiés</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Enseignants à verifiés</h3>
            </div>
       
        </div>
   
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
                                                      
                                                    
                                                    <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('enseg.verif',$user->id) }}" style="display: none">
                                                        {{ csrf_field() }}
                                                        
                                                      </form>
                                                      <a href="" onclick="
                                                      if(confirm('verifier cet enseignant?'))
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