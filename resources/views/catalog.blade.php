@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="pageHead">
            <div class="wrapper">
                <ul class="breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    @foreach($ancestors as $ancestor)
                        <li><a href="/">{{$ancestor->title}}</a></li>
                    @endforeach
                    <li class="active">{{$page->title}}</li>
                </ul>
                <div class="pageTitle">
                    <h1>{{$page->title}}</h1>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="wrapper">
                <div class="page-container">
                    @include('includes.sidebar')
                    <div class="pageContent">
                        <form class="catalog-sort js-catalog-filter" action="{{URL::current()}}" method="GET">
                            <input type="hidden" name="per-page" class="js-per-page-input" value="12">
                            <div class="sort-result">
                                <div class="amount">Всего найдено {{$products->total()}}</div>
                                <div class="show">
                                    <span>Показывать&nbsp;по: </span>
                                    <select class="js-styled per-page js-per-page" >
                                        <option value="9" {{Request::get('per-page')==9 ? 'selected' :''}}>9 на странице</option>
                                        <option value="12" {{Request::get('per-page')==12 ? 'selected' :''}} >12 на странице</option>
                                        <option value="24" {{Request::get('per-page')==24 ? 'selected' :''}}>24 на странице</option>
                                    </select>
                                </div>
                            </div>
                            <!--div class="how-sort hidden-xs">
                                <div class="show">
                                    <span>Сортировать&nbsp;по: </span>
                                    <select class="js-styled sort-dir">
                                        <option value="DESC"{{Request::get('sortdir')=='DESC' ? 'selected' :''}}>Убыванию</option>
                                        <option value="ASC"{{Request::get('sortdir')=='ASC' ? 'selected' :''}}>Возрастанию</option>
                                    </select>
                                </div>
                            </div-->
                        </form>
                        <div class="flex-container">
                            @foreach($products as $product)
                                @include('includes.product')
                            @endforeach
                        </div>
                        {!! $products->appends(Request::capture()->except('page'))->links('includes.pagination') !!}

                        <div class="text">
                            {!! $page->seotext !!}
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
        $('.js-per-page').change(function(){
            console.log($(this).val());
            $('.js-per-page-input').val($(this).val());
            $('.js-catalog-filter').submit();
            return false;
        })
        $('.sort-dir').change(function(){
            $('input[name=sortdir]').val($(this).val());
            $('#filterForm').submit();
            return false;
        })
    </script>
@endsection
