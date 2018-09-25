@extends('layouts.app')

@section('content')
    <main class="content">
        <section class="mainSlider js-main-slider no-padding">
            @foreach($banners as $banner)
                <div class="mainSlider-item" style="background-image: url({{$banner->image}});">
                    <div class="wrapper">
                        <div class="text">
                            <h2>{{$banner->title}}</h2>
                            <p>{{$banner->text}}</p>
                            <a href="{{$banner->url}}" class="main-btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>

        <section class="features grey">
            <div class="wrapper">
                <div class="features-slider js-benefits-slider dots-out">
                    <div class="features-item">
                        <i class="icon-feature warranty"></i>
                        <h4>Гарантия на оборудование</h4>
                        <p>На все оборудование предоставляется гарантия</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature delivery"></i>
                        <h4>Доставка по всей России</h4>
                        <p>Доставим в любой регион бесплатно</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature prices"></i>
                        <h4>Минимальные <br> цены</h4>
                        <p>Цены от производителя</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature learning"></i>
                        <h4>Обучение <br> персонала</h4>
                        <p>Наши специалисты обучат Ваш персонал</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature help"></i>
                        <h4>Помощь в подборе оборудования</h4>
                        <p>Опытные менеджеры подберут оборудование под Ваши цели</p>
                    </div>


                </div>
            </div>
        </section>

        <section class="homeCatalog">
            <div class="wrapper">
                <div class="section-title">
                    <h1>Медицинское оборудование</h1>
                </div>

                <div class="flex-container">
                    <div class="flex-item-2">
                        <a href="{{$categories['cat1']->url}}" class="homeCatalog-item">
                            <img src="/img/cat1.jpg" alt="Анастезиология  и реанимация">
                            <span class="name">Анастезиология и реанимация</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="{{$categories['cat2']->url}}" class="homeCatalog-item">
                            <img src="/img/cat2.jpg" alt="Эндоскопия">
                            <span class="name">Эндоскопия</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="{{$categories['cat3']->url}}" class="homeCatalog-item">
                            <img src="/img/cat3.jpg" alt="Рентгенология">
                            <span class="name">Рентгенология</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="{{$categories['cat4']->url}}" class="homeCatalog-item">
                            <img src="/img/cat4.jpg" alt="Хирургия">
                            <span class="name">Хирургия</span>
                        </a>
                    </div>
                    <div class="flex-item-2">
                        <a href="{{$categories['cat5']->url}}" class="homeCatalog-item">
                            <img src="/img/cat5.jpg" alt="Функциональная диагностика">
                            <span class="name">Функциональная диагностика</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="{{$categories['cat6']->url}}" class="homeCatalog-item">
                            <img src="/img/cat6.jpg" alt="УЗИ(ультразвуковая диагностика)">
                            <span class="name">УЗИ(ультразвуковая диагностика)</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="homeAbout grey">
            <div class="wrapper">
                <h2 class="visible-xs">О компании</h2>
                <div class="homeAbout-container">
                    <div class="img-wrapper">
                        <img src="/img/img-about.png" alt="">
                    </div>
                    <div class="text">
                        <div class="section-title">
                            <h2 class="hidden-xs">О компании</h2>
                        </div>
                        <div class="seotext">
                            {!! $page->seotext !!}
                        </div>
                        <div class="homeAbout-features">
                            <div class="homeAbout-features__item">
                                <span class="number">42</span>
                                <span class="text">Партнеры в 42 регионах</span>
                            </div>
                            <div class="homeAbout-features__item">
                                <span class="number">200+</span>
                                <span class="text">Довольных клиентов</span>
                            </div>
                            <div class="homeAbout-features__item">
                                <span class="number">6 ЛЕТ</span>
                                <span class="text">Более 6 лет успешной работы</span>
                            </div>

                            <div class="homeAbout-features__item">
                                <span class="number">500+</span>
                                <span>Позиций на складах</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="lastNews">
            <div class="wrapper">
                <div class="section title">
                    <h2>Новости</h2>
                </div>
                <div class="lastNews-slider js-lastNews-slider dots-out">
                    @foreach($news as $post)
                        <a href="{{ $post->url }}" class="lastNews-item">
                            <div class="img-wrapper">
                                <img src="/{{$post->image}}" alt="{{$post->title}}">
                            </div>
                            <div class="text">
                                <span class="date">{{$post->created_at->format('d.m.Y')}}</span>
                                <span>{{$post->title}}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="brands grey">
            <div class="wrapper">
                <div class="brands-slider js-brands-slider dots-out">
                    @foreach($vendors as $vendor)
                        <a href="{{$vendor->url}}" class="brands-item"><img src="/{{$vendor->image}}" alt=""></a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
