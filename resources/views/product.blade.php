@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				{!! Breadcrumbs::renderIfExists() !!}
			</div>
		</div>
		
		<div class="product">
			<div class="wrapper">
				<div class="product-container">
					<div class="product-left">
						<a href="/catalog/" class="back"><i class="icon-back"></i>Обратно в каталог</a>
						<div class="product-sliders">
							<div class="product-sliderNav js-product-sliderNav">
								@foreach($product->resized('554x476') as $image)
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
							<div class="brand">{{$product->vendor->title}}</div>
							<h1 class="name">{{$product->title}}</h1>
							<div class="price">Цена: <span></span></div>
							<a href="#request-price" class="price-button js-popup">Запросить цену</a>
							<div class="short-info">
								<div class="title">
									Характеристики
								</div>
								<div class="short-info-container">
									<div class="short-info__item">
										<span>Артикул</span>
										<div class="dots"></div>
										<span class="value">3468832</span>
									</div>
									<div class="short-info__item">
										<span>Характеристика</span>
										<div class="dots"></div>
										<span class="value">103 вт.</span>
									</div>
									<div class="short-info__item">
										<span>Производитель</span>
										<div class="dots"></div>
										<span class="value">Siemens</span>
									</div>
									<div class="short-info__item">
										<span>Вес</span>
										<div class="dots"></div>
										<span class="value">2 500 кг.</span>
									</div>
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
						<span class="tab">Описание</span>
						<span class="tab">Характеристики</span>
					</div>
					<div class="tab-content">
						<div class="tab-item">
							<div class="text">
								{!! $product->text !!}
							</div>
						</div>
						<div class="tab-item">
							<div class="text">
								<p>Рентгендиагностический комплекс CLINOMAT предназначен для оснащения кабинетов общей рентгенологии и выполняет полный спектр рентгенографических и рентгеноскопических исследований.</p>
								<p>Более 50% всех рентгеновских обследований относятся к рентгенографии: исследования скелета, конечностей и органов дыхания и выполняются на столе и стойке снимков. CLINOMAT на 2 рабочих места предназначен для рентгенографии и состоит из стола с декой, колонны излучателя, устройства для выполнения линейной (аналоговой) томографии, пульта управления и генератора. Для исследования легких и черепа используется стойка снимков.</p>
								<p>CLINOMAT на 3 рабочих места также включает в себя кроме всего вышеперечисленного поворотный стол-штатив, который используется для рентгеноскопии. Телевизионная система, используемая для просмотра видеоизображения может подключаться к компьютеру.</p>
								<p>Питающее устройство PIXEL - это микропроцессорный высокочастотный генератор нового поколения, гарантирующий точность установок, низкий уровень пульсаций, длительность службы всего комплекса. Широкий выбор анатомических программ и дружественный интерфейс позволяют персоналу эффективно выполнять свои задачи.</p>
								<p>В качестве приемника рентгеновских лучей может выступать как пленка, так и системы компьютерной радиографии (CR) и плоскопанельные детекторы (DR).</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	
@endsection