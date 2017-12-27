@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="pageHead">
            <div class="wrapper">
                {!! Breadcrumbs::renderIfExists() !!}
                <div class="pageTitle">
                    <h1>Результаты поиска</h1>
                </div>
            </div>
        </div>

        <div class="catalog">
            <div class="wrapper">
                <div class="page-container">
                    <div class="pageContent">
                        <div class="catalog">
                            Всего найдено <strong>{{$products->total()}}</strong> наименовений по запросу "<strong>{{request()->q}}</strong>"
                        </div>
                        <div class="flex-container">
                            @foreach($products as $product)
                                @include('includes.product')
                            @endforeach
                        </div>
                        {!! $products->appends(Request::capture()->except('page'))->links('includes.pagination') !!}


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
