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
					<h1>Прозводители</h1>
				</div>
			</div>
		</div>

		<div class="pageText">
			<div class="wrapper">
				<div class="text">
					<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
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