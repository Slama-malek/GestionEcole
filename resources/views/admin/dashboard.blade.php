@extends('admin.layouts.master')
@section('content')
<div class="breadcrumbs-area">
	<h3> Dashboard de l' Administrateur</h3>
	<ul>
		<li>
			<a href="index.html">Accueil</a>
		</li>
		<li>Administrateur</li>
	</ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Dashboard summery Start Here -->
<div class="row gutters-20">
	<div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-green ">
						<i class="flaticon-classmates text-green"></i>
					</div>
				</div>
				<div class="col-6">
					<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from eleves')?> Élèves</div>
						<div class="item-number"><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-blue">
						<i class="flaticon-multiple-users-silhouette text-blue"></i>
					</div>
				</div>
				<div class="col-6">
					<div class="item-content">
					<?php $cli=\DB::select('select count(*) as cnt from  enseignants ') ?>
						<div class="item-title">Enseignants</div>
						<div class="item-number"><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-yellow">
						<i class="flaticon-couple text-orange"></i>
					</div>
				</div>
				<div class="col-6">
					<div class="item-content">

					<?php $p="parent";
					 $cli=\DB::select('select count(*) as cnt from users where usertype=1') ?>
						<div class="item-title">Parents</div>
						<div class="item-number"><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-red">
					<i
                         class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i>
					</div>
				</div>
				<div class="col-6">
					<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from classes ')?>Classes</div>
						<div class="item-number"><span></span><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-green ">
						<i class="flaticon-open-book text-green"></i>
					</div>
				</div>
				<div class="col-6">
				<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from matieres ')?>Matiéres</div>
						<div class="item-number"><span></span><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div><div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-green ">
						<i class="flaticon-chat text-blue"></i>
					</div>
				</div>
				<div class="col-6">
				<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from reclams ')?>Réclamations</div>
						<div class="item-number"><span></span><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div><div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-green ">
						<i class="flaticon-calendar text-orange"></i>
					</div>
				</div>
				<div class="col-6">
				<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from evenements ')?>Evénements</div>
						<div class="item-number"><span></span><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div><div class="col-xl-3 col-sm-6 col-12">
		<div class="dashboard-summery-one mg-b-20">
			<div class="row align-items-center">
				<div class="col-6">
					<div class="item-icon bg-light-green ">
						<i class="flaticon-books text-red"></i>
					</div>
				</div>
				<div class="col-6">
				<div class="item-content">
						<div class="item-title"><?php $cli=\DB::select('select count(*) as cnt from galleries ')?>Galleries</div>
						<div class="item-number"><span></span><span class="counter" data-num="{{$cli[0]->cnt}}">{{$cli[0]->cnt}}</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Dashboard summery End Here -->
<!-- Dashboard Content Start Here -->

<!-- Dashboard Content End Here -->
<!-- Social Media Start Here -->

@endsection