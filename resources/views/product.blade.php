@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">

			</div>
		</div>
		
		<div class="product">
			<div class="wrapper">
				<div class="product-container">
					<div class="product-left">
						<a href="/catalog/" class="back"><i class="icon-back"></i>Обратно в каталог</a>
						<div class="product-sliders">
							<div class="product-sliderNav js-product-sliderNav">
								@foreach($product->resized('264x223') as $image)
									<div class="img-wrapper">
										<img src="{{$image}}" alt="">
									</div>
								@endforeach
							</div>
							<div class="product-sliderMain js-product-sliderMain">
								@foreach($product->resized('554x476') as $image)
									<div class="img-wrapper">
										<img src="{{$image}}" alt="">
									</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="product-right">
						<div class="product-descr">
							@if(isset($product->vendor_id))
								<div class="brand">{{$product->vendor->title}}</div>
							@endif
							<h1 class="name">{{$product->title}}</h1>
							<div class="price">Цена: <span></span></div>
							<a href="#request-price" class="price-button js-popup">Запросить цену</a>
							<div class="short-info">
								<div class="title">
									Характеристики
								</div>
								<div class="short-info-container">
									@if($product->params)
										@foreach($product->params as $param)
											<div class="short-info__item">
												<span>{{$param['name']}}</span>
												<div class="dots"></div>
												<span class="value">{{$param['value']}}</span>
											</div>
										@endforeach
									@endif
								</div>
							</div>
							<div class="share">
								<div class="share-title">
									Поделиться с друзьями :
								</div>
								<ul class="share-list">
									<li><a href="#" class="icon-share vk"></a></li>
									<li><a href="#" class="icon-share fb"></a></li>
									<li><a href="#" class="icon-share tw"></a></li>
									<li><a href="#" class="icon-share ok"></a></li>
									<li><a href="#" class="icon-share mr"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="pageText">
					<div class="tabs">
						<span class="tab active" data-target="#tab1">Описание</span>
						<span class="tab" data-target="#tab2">Характеристики</span>
					</div>
					<div class="tab-content">
						<div class="tab-item" id="tab1">
							<div class="text">
								{!! $product->text !!}
							</div>
						</div>
						<div class="tab-item"  id="tab2">
							<div class="text">
								@if($product->params)
									@foreach($product->params as $param)
										<div class="short-info__item">
											<span>{{$param['name']}}</span>
											<div class="dots"></div>
											<span class="value">{{$param['value']}}</span>
										</div>
									@endforeach
								@endif
							</div>
						</div  id="tab1">
					</div>
				</div>
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	
@endsection