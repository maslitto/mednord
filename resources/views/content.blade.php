@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				{!! Breadcrumbs::renderIfExists() !!}
				<div class="pageTitle">
					<h1>{{$page->title}}</h1>
				</div>
			</div>
		</div>

		<div class="info-page">
			<div class="wrapper">
				{!! $page->seotext !!}
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	

@endsection