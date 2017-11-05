@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="pageHead">
            <div class="wrapper">
                {!! Breadcrumbs::renderIfExists() !!}
                <div class="pageTitle">
                    <h1>Каталог оборудования</h1>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="wrapper">
                <div class="page-container">
                    <div class="sidebar">
                        <ul class="catalog-list js-catalog-list">
                            @foreach($categories as $category)
                                @if(count($category->getDescendants())>0)
                                <li>
                                    <a href="javascript:void(0);">{{$category->title}}</a>
                                    <ul class="catalog-list__secondary">

                                        @foreach($category->getDescendants() as $descendant)
                                            <li><a href="{{$descendant->url}}">{{$descendant->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                    <li>
                                        <a href="{{$category->url}}">{{$category->title}}</a>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                        <div class="filter">
                            <form>
                                <div class="filter-title">Бренды</div>
                                <ul class="list-checkbox">
                                    <li class="list-checkbox__item">
                                        <label class="checkbox-label">
                                            <input type="checkbox" class="js-styled">
                                            <span class="chekbox-text">Siemens</span>
                                        </label>
                                    </li>
                                    <li class="list-checkbox__item">
                                        <label class="checkbox-label">
                                            <input type="checkbox" class="js-styled">
                                            <span class="chekbox-text">Rochien</span>
                                        </label>
                                    </li>
                                    <li class="list-checkbox__item">
                                        <label class="checkbox-label">
                                            <input type="checkbox" class="js-styled">
                                            <span class="chekbox-text">Aquator</span>
                                        </label>
                                    </li>
                                </ul>
                                <div class="submit-container">
                                    <input type="submit" class="submit-btn" value="Подобрать">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="pageContent">
                        <div class="catalog-sort">
                            <div class="sort-result">
                                <div class="amount">Всего найдено {{$products->total()}}</div>
                                <div class="show">
                                    <span>Показывать&nbsp;по: </span>
                                    <select class="js-styled">
                                        <option value="9">9 на странице</option>
                                        <option value="12">12 на странице</option>
                                        <option value="24">24 на странице</option>
                                    </select>
                                </div>
                            </div>
                            <div class="how-sort hidden-xs">
                                <div class="show">
                                    <span>Сортировать&nbsp;по: </span>
                                    <select class="js-styled">
                                        <option value="9">Убыванию</option>
                                        <option value="12">Возростанию</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex-container">
                            @foreach($products as $product)
                                <div class="flex-item-3">
                                    <div class="catalog-item">
                                        <div class="text">
                                            <h3 class="name"><a href="{{$product->url}}">{{$product->title}}</a></h3>
                                            <h5 class="brand-name">{{$product->vendor->title}}</h5>
                                            @if($product->discount)
                                                <span class="label">скидка</span>
                                            @endif
                                            @if($product->new)
                                                <span class="label new">Новый</span>
                                            @endif
                                            @if($product->hit)
                                                <span class="label hit">скидка</span>
                                            @endif
                                        </div>
                                        <a href="{{$product->url}}" class="img-wrapper">
                                            <img src="{{$product->resized('264x223')[0]}}" alt="{{$product->title}}">
                                        </a>
                                        <span class="button-container"><a href="#request-price" class="js-popup">Запросить цену</a></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {!! $products->appends(Request::capture()->except('page'))->links('includes.pagination') !!}

                        <div class="text">
                            <p>Предлагаем полностью цифровые и аналоговые рентгеновские системы популярного европейского производителя Italray, передвижные палатные рентгены Matrix Ibis, а также установки С-дуга Eurocolumbus. Вы можете приобрести качественное современное цифровое оборудование по привлекательной цене. Italray — производитель надежных рентгеновских систем с 1974 г.</p>
                            <p>Уникальные технологии обеспечивают высочайшее качество изображения.<br>
                                Высокая надежность и качество рентген-установок.<br>
                                Самые низкие цены среди европейских производителей.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
