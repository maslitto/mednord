@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="pageHead">
            <div class="wrapper">
                {!! Breadcrumbs::renderIfExists() !!}
                <div class="pageTitle">
                    <h1>{{$page->title}}</h1>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="wrapper">
                <div class="page-container">
                    <div class="sidebar">
                        <ul class="catalog-list js-catalog-list">
                            @foreach($categories as $category)
                                @foreach($category->children()->get() as $cat)
                                    @if(count($cat->getDescendants())>0)
                                        <li>
                                            <a href="javascript:void(0);">{{$cat->title}}</a>
                                            <ul class="catalog-list__secondary">
                                                @foreach($cat->getDescendants() as $descendant)
                                                    <li><a href="{{$descendant->url}}">{{$descendant->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{$cat->url}}">{{$cat->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                        <div class="filter">
                            <form action="{{$page->url}}" method="GET" id="filterForm">
                                {{Form::hidden('per_page', Request::has('per_page') == null ? '9' :Request::get('per_page'))}}
                                {{Form::hidden('sortdir',Request::get('sortdir'))}}
                                <div class="filter-title">Бренды</div>
                                <ul class="list-checkbox">
                                    @foreach($vendors as $vendor)
                                    <li class="list-checkbox__item">
                                        <label class="checkbox-label">
                                            <input type="checkbox" class="js-styled" name="vendors[]">
                                            <span class="chekbox-text">{{$vendor->title}}</span>
                                        </label>
                                    </li>
                                    @endforeach
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
                                    <select class="js-styled per-page" >
                                        <option value="9" {{Request::get('per_page')==9 ? 'selected' :''}}>9 на странице</option>
                                        <option value="12" {{Request::get('per_page')==12 ? 'selected' :''}} >12 на странице</option>
                                        <option value="24" {{Request::get('per_page')==24 ? 'selected' :''}}>24 на странице</option>
                                    </select>
                                </div>
                            </div>
                            <div class="how-sort hidden-xs">
                                <div class="show">
                                    <span>Сортировать&nbsp;по: </span>
                                    <select class="js-styled sort-dir">
                                        <option value="DESC"{{Request::get('sortdir')=='DESC' ? 'selected' :''}}>Убыванию</option>
                                        <option value="ASC"{{Request::get('sortdir')=='ASC' ? 'selected' :''}}>Возрастанию</option>
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
                                            @if(isset($product->vendor_id))
                                            	<h5 class="brand-name">{{$product->vendor->title}}</h5>
                                            @endif
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
                                        <span class="button-container"><a href="#request-price" class="js-popup" data-product-title="{{$product->title}}">Запросить цену</a></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {!! $products->appends(Request::capture()->except('page'))->links('includes.pagination') !!}

                        <div class="text">
                            {{$page->seotext}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    @parent
    <script>
        $('.per-page').change(function(){
            $('input[name=per_page]').val($(this).val());
            $('#filterForm').submit();
            return false;
        })
        $('.sort-dir').change(function(){
            $('input[name=sortdir]').val($(this).val());
            $('#filterForm').submit();
            return false;
        })
    </script>
@endsection
