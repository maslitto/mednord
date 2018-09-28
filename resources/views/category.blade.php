@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="pageHead">
            <div class="wrapper">
                {{--!! Breadcrumbs::renderIfExists() !!--}}
                <ul class="breadcrumbs">
                    <li><a href="/">Главная</a></li>
                    @foreach($ancestors as $ancestor)
                        <li><a href="/{{$ancestor->url}}">{{$ancestor->title}}</a></li>
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
                <div class="pageDescription">
                    <p>{{$page->metadescription}}</p>
                </div>
                <div class="page-container">
                    @include('includes.sidebar')
                    <div class="pageContent">
                        <div class="flex-container">
                            @foreach($children as $category)
                                <div class="flex-item-3">
                                    <div class="category-item">
									<span class="img-wrapper">
                                        <a href="{{$category->url}}"><img src="/{{$category->image}}" alt=""></a>
									</span>
                                        <div class="text">
                                            <h3 class="name text-center">{{$category->title}}</h3>
                                        </div>
                                        <span class="button-container"><a href="{{$category->url}}">Перейти в раздел</a></span>
                                    </div>
                                </div>
                            @endforeach
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
