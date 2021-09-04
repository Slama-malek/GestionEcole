@extends('Enseignant.layouts.master ')
@section('content')

<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Title -->
        <div class="hk-pg-header">
            <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">Tous Les Notes</h2>
            
            </div>
            <div class="d-flex mb-0 flex-wrap">
                @include('Enseignant.layouts.entete')
               </div>
        </div>
        <!-- /Title -->

        <!-- Row -->
        
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title"><h5></h5>
            <p class="mb-25"> <i class="fa fa-info-circle" style="background-color:white ;color:#9c4a92"> </i> Pour Afficher les notes des éleves vous devez choisir la matiére, la classe, et le groupe .</p>
        <form action="{{route('recherche.notes')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-md-4">
                         
                            <select class="form-control custom-select  mt-15" name="matieres">
                                <option value="0" selected="">choisir matiére</option>
                                @foreach($mat as $item)
                                <option value="{{$item->id_m}}" >{{$item->nom_m}}</option>
                                @endforeach
                            </select>
                        
                        </div>
                        <div class="col-md-4">
                          
                            <select class="form-control custom-select mt-15" name="classes">
                                <option value="0" selected="">choisir classe</option>
                                @foreach($classes as $class)
                                <option value="{{$class->id_c}}">{{$class->nom_c}}</option>
                                @endforeach
                            </select>
                          
                        
                    </div>
                    <div class="col-md-4">
                       
                        <select class="form-control custom-select mt-15" name="groupes">
                            <option value="0" selected="">choisir groupe</option>
                            @foreach($groupes as $grp)
                            <option value="{{$grp->id_g}}">{{$grp->nom_g}}</option>
                            @endforeach
                        </select>
                      
                    
                </div> 
                </div>
              <br>
                <button class="btn btn-primary" style="float:right" type="submit">valider</button>
               
            </div>
        </form>
        </section>
 
        
                <section class="hk-sec-wrapper">
                    @if (session('success'))
                
                    <div class="form-group">
                       
                        <label for="focusedinput" class="col-sm-2 control-label"></label>
                        <div class="col-sm-12">
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{ session('success') }}</strong>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

               
               
                @elseif (session('info'))
                
                <div class="form-group">
                   
                    <label for="focusedinput" class="col-sm-2 control-label"></label>
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ session('info') }}</strong>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>

            @endif
                <h6 style="float:right" class="text-gray-700 uppercase font-bold"></h6>
                    <h5 class="hk-sec-title">  éleves</h5>
                <h5 style="float:right" class="text-gray-700 uppercase font-bold"></strong> </h5>
              
               
                    <p class="mb-40">classe :<strong style="color:#8c4a99">  </code></p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr style="background-color:#F9F0F9">
                                                <th >N°</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Notes</th>
                                              
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                           
                                            <tr>
                                                @foreach ($note as $item)
                                            <td>{{$item->eleve_id}}</td>
                                                    
                                                @endforeach
                                           
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </section>
          
          
          
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->
    
    <!-- Footer -->
    <div class="hk-footer-wrap container">
        <footer class="footer">
            <div class="row">
                @include('Enseignant.layouts.footer')
            </div>
        </footer>
    </div>
    <!-- /Footer -->
</div>
@endsection