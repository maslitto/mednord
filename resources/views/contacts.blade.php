@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				{!! Breadcrumbs::renderIfExists() !!}
				<div class="pageTitle">
					<h1>Контакты</h1>
				</div>
			</div>
		</div>

		<div class="contacts">
			<div class="wrapper">
				<div class="contacts-container">
					<div class="contacts-text">
						<p>Хотите заказать медицинское оборудование для вашей клиники, рассчитать стоимость доставку лизинг или просто пообщаться и задать вопрос?</p>
						<p>Пишите письма, звоните или заходите в гости – наш офис находится недалеко от м.Электросила. </p>
					</div>
					<div class="contacts-info">
						<div class="contacts-info__item">
							<i class="icon-contacts address"></i>
							<div class="text">
								<div class="title">Наш адрес:</div>
								<span>РФ 123456, г. Санкт-Петербург, ул.Рощинская 32 литер а , офис 402</span>
							</div>
						</div>
						<div class="contacts-info__item">
							<i class="icon-contacts tel"></i>
							<div class="text">
								<div class="title">Наш телефон</div>
								<a href="+78126027847">+7 (812) 6027847</a>
								<!--a href="+78129874365">+7 (812) 987-43-65</a-->
							</div>
						</div>
						<div class="contacts-info__item">
							<i class="icon-contacts email"></i>
							<div class="text">
								<div class="title">E-mail:</div>
								<a href="mailto:info@med-nord.ru">info@med-nord.ru</a>
							</div>
						</div>
						<div class="contacts-info__item">
							<i class="icon-contacts schedule"></i>
							<div class="text">
								<div class="title">Режим работы:</div>
								<span>Пн. – Пт.: с 9:00 до 18:00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="map">
				<div id="map"></div>
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	
@endsection