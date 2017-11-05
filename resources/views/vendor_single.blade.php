@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				<ul class="breadcrumbs">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Производители</a></li>
					<li><a href="#">Хлебные крошки</a></li>
				</ul>
				<div class="pageTitle">
					<h1>{{!empty($vendor->h1) ? $vendor->h1 : $vendor->title}}</h1>
				</div>
			</div>
		</div>

		<div class="pageText">
			<div class="wrapper">
				<div class="container">
					<div class="icon-wrapper">
						<img src="{{$vendor->image}}" alt="{{$vendor->title}}">
					</div>
					<div class="text">
						<h3>{{$vendor->title}}</h3>
						<p class="quote">{{$vendor->introtext}}</p>
					</div>
				</div>
				<div class="text">
					<div class="img-wrapper">
						<img src="{{$vendor->image}}" alt="{{$vendor->title}}" alt="">
					</div>
					<div>
						{{$vendor->text}}
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<h3>Другие производители</h3>
		</div>
		<section class="brands grey">
			<div class="wrapper">
				<div class="brands-container">
					@foreach($vendors as $vendor)
						<a href="{{$vendor->url}}" class="brands-item"><img src="{{$vendor->image}}" alt="{{$vendor->title}}"></a>
					@endforeach
				</div>
			</div>
		</section>
		<section class="brands grey">
			<div class="wrapper">
				<div class="brands-container">
					@foreach($vendors as $vendor)
						<a href="{{$vendor->url}}" class="brands-item"><img src="{{$vendor->image}}" alt="{{$vendor->title}}"></a>
					@endforeach
				</div>
			</div>
		</section>	
	</main>	
			
<!-- CONTENT EOF   -->	
@endsection