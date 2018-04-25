@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->

	<main class="content">		
		<div class="pageHead">
			<div class="wrapper">
				<ul class="breadcrumbs">
					<li><a href="#">Главная</a></li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Хлебные крошки</a></li>
				</ul>
				<div class="pageTitle">
					<h1>О компании</h1>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="wrapper">
				<div class="page-container">
					<!--div class="sidebar">
						<div class="tabs">
							<div class="tab">О компании</div>
							<div class="tab">Лицензии</div>
							<div class="tab">Реквизиты</div>
							<div class="tab">Вопрос-ответ</div>
							<div class="tab">Гарантии</div>
							<div class="tab">Парнтерам</div>
						</div>
					</div-->
					<div class="pageContent tab">
						<div class="text tab-item">
							<!--h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3-->
							<p>Наша компания «Нордлайн» специализируется на поставках медицинского оборудования, запасных частей, медицинской мебели и расходных материалов. Мы предлагаем комплексные решения по оснащению медицинских и диагностических центров, а также санаторно-курортных учреждений. Мы сотрудничаем как с государственными, так и с коммерческими структурами по всей территории РФ.</p>
							<p>За 6 лет работы у нас сложились хорошие партнерские отношения с заводами-производителями медицинского оборудования и комплектующих, позволяющие формировать гибкую ценовую политику во взаимоотношениях с клиентами. </p>
							<p>Для успеха и процветания современным медицинском учреждениям необходимо качественное медицинское оборудование. Наши решения помогут Вам динамично развиваться и достигать максимальных результатов при минимальных затратах. </p>
							<br>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Выбирая нас в качестве поставщика, вы получаете:</h3>
							<ul class="default-list">
								<li>Надежного партнера, ориентированного на максимально полное и эффективное удовлетворения Ваших потребностей.</li> 

								<li>Широкий ассортимент современной медицинской техники, запасных частей и расходных материалов ведущих мировых и отечественных производителей.</li>
	
								<li>Помощь в подборе только качественного оборудования, имеющего всю необходимую разрешительную документацию.</li>

								<li>Оперативность и экспертные консультации наших специалистов на каждом этапе взаимодействия. Полное документальное сопровождение.</li>

								<li>Гибкую систему скидок на оборудование разных ценовых сегментов.</li>

								<li>Официальную гарантию.</li>

								<li>Проверенные логистические решения.</li>

								<li>Монтаж оборудования и обучение персонала. Постпродажное обслуживание.</li>

								<li>Ответственное, добропорядочное отношение к каждому клиенту.</li>
							</ul>
							<p>Мы всегда открыты для нового взаимовыгодного сотрудничества, по всем интересующим Вас вопросам обращайтесь по телефону +7 (812) 602-78-47 или на почту info@med-nord.ru </p>
						</div>
						<!--
						<div class="text tab-item">
							<h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3>
							<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Заголовок например наши приемущества:</h3>
							<ul class="default-list">
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
							</ul>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
						<div class="text tab-item">
							<h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3>
							<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Заголовок например наши приемущества:</h3>
							<ul class="default-list">
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
							</ul>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
						<div class="text tab-item">
							<h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3>
							<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Заголовок например наши приемущества:</h3>
							<ul class="default-list">
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
							</ul>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
						<div class="text tab-item">
							<h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3>
							<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Заголовок например наши приемущества:</h3>
							<ul class="default-list">
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
							</ul>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
						<div class="text tab-item">
							<h3>НОРДЛАЙН  -  Красивый слоган компании или девиз!</h3>
							<p class="quote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
							<div class="img-wrapper">
								<img src="img/img-article.png" alt="">
							</div>
							<h3>Заголовок например наши приемущества:</h3>
							<ul class="default-list">
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
								<li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</li>
							</ul>
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</main>	
			
<!-- CONTENT EOF   -->	

@endsection