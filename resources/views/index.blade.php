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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature delivery"></i>
                        <h4>Бесплатная доставка по России</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature prices"></i>
                        <h4>Минимальные цены Лизинг</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature learning"></i>
                        <h4>Обучение врачей профессионалами</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature help"></i>
                        <h4>Помощь в подборе оборудования</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature warranty"></i>
                        <h4>Гарантия на оборудование</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature delivery"></i>
                        <h4>Бесплатная доставка по России</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature prices"></i>
                        <h4>Минимальные цены Лизинг</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature learning"></i>
                        <h4>Обучение врачей профессионалами</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="features-item">
                        <i class="icon-feature help"></i>
                        <h4>Помощь в подборе оборудования</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="homeCatalog">
            <div class="wrapper">
                <div class="section-title">
                    <h1>Медицинское оборудование</h1>
                </div>
                <div class="text">
                    <p>Начав с небольшой московской фирмы, мы выросли в крупнейшего поставщика медицинской Техники и ТСР во всей России. Сегодня наша компания известна практически в любом медицинском учреждении и магазине медицинской техники.</p>
                </div>
                <div class="flex-container">
                    <div class="flex-item-2">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog1.png" alt="">
                            <span class="name">Категория  первая каталога</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog2.png" alt="">
                            <span class="name">Категория  первая каталога</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog3.png" alt="">
                            <span class="name">Категория  первая каталога</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog4.png" alt="">
                            <span class="name">Категория  первая каталога</span>
                        </a>
                    </div>
                    <div class="flex-item-2">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog5.png" alt="">
                            <span class="name">Категория  первая каталога</span>
                        </a>
                    </div>
                    <div class="flex-item-4">
                        <a href="#" class="homeCatalog-item">
                            <img src="img/img-homeCatalog6.png" alt="">
                            <span class="name">Категория  первая каталога</span>
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
                        <img src="img/img-about.png" alt="">
                    </div>
                    <div class="text">
                        <div class="section-title">
                            <h2 class="hidden-xs">О компании</h2>
                        </div>
                        <p>Начав с небольшой московской фирмы, мы выросли в крупнейшего поставщика медицинской Техники и ТСР во всей России. Сегодня наша компания известна практически в любом медицинском учреждении и магазине медицинской техники.</p>
                        <div class="homeAbout-features">
                            <div class="homeAbout-features__item">
                                <span class="number">347</span>
                                <span class="text">Категория приемущесва</span>
                            </div>
                            <div class="homeAbout-features__item">
                                <span class="number">74</span>
                                <span class="text">Сотрудников в компании</span>
                            </div>
                            <div class="homeAbout-features__item">
                                <span class="number">128</span>
                                <span class="text">Счастливых клиентов</span>
                            </div>
                            <div class="homeAbout-features__item">
                                <span class="number">49</span>
                                <span>Категория приемущесва</span>
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
                        <a href="#" class="lastNews-item">
                            <div class="img-wrapper">
                                <img src="{{$post->image}}" alt="{{$post->title}}">
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
                    <a href="#" class="brands-item"><img src="img/icon-brand1.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand2.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand3.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand4.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand5.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand1.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand2.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand3.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand4.png" alt=""></a>
                    <a href="#" class="brands-item"><img src="img/icon-brand5.png" alt=""></a>
                </div>
            </div>
        </section>
    </main>
@endsection
