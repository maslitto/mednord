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
                    @include('includes.sidebar')
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
