@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				{!! Breadcrumbs::renderIfExists($page->slug) !!}
				<div class="pageTitle">
					<h1>Прозводители</h1>
				</div>
			</div>
		</div>

		<div class="pageText">
			<div class="wrapper">
				<div class="text">
					<h3 class="quote">Наши партнеры</h3>
				</div>
			</div>
			<div class="big-list">
				@foreach($vendors as $vendor)
					<div class="big-list__item">
					<div class="wrapper">
						<div class="container">
							<div class="img-wrapper"><img src="{{$vendor->image}}" alt=""></div>
							<div class="text">
								<h3 class="name">{{$vendor->title}}</h3>
								<p>{{$vendor->introtext}}</p>
								<a href="{{$vendor->url}}" class="main-btn">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	
@endsection