@extends('admin.layouts.master')
@section('content')
<div class="hk-row">							
									<div class="col-sm-6">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
													<?php $cli=\DB::select('select count(*) as cnt from events')?>
														<span class="d-block font-15 text-dark font-weight-500">Evenements</span>
													</div>
													<div>
														<span class="badge badge-primary  badge-sm">{{$cli[0]->cnt}} </span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5" >{{$cli[0]->cnt}}</span>
													<small class="d-block"> <a href="{{url('/admin/event')}}"> <i class="fa fa-book">  Evenements</i>   </a> </small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
													<?php $cli=\DB::select('select count(*) as cnt from users')?>
														<span class="d-block font-15 text-dark font-weight-500">Utilisateurs</span>
													</div>
													<div>
														<span class="badge badge-danger   badge-sm">{{$cli[0]->cnt}}</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">{{$cli[0]->cnt}}</span>
													<small class="d-block"> <a href="{{url('/admin/event')}}"> <i class="fa fa-users">Utilisateurs</i>     </a> </small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Tickets</span>
													</div>
													<div>
														<span class="badge badge-primary  badge-sm">-1.5%</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">73</span>
													<small class="d-block">100 Regular</small>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Earnings</span>
													</div>
													<div>
														<span class="badge badge-warning  badge-sm">+60%</span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">$89M</span>
													<small class="d-block">$100M Targeted</small>
												</div>
											</div>
										</div>
									</div>	
                                    </div>


    @endsection
