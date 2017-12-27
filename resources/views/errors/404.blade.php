@extends('layouts.app')

@section('content')
    <!-- BEGIN BODY -->

    <div class="main-wrapper">

        <!-- BEGIN CONTENT -->

        <main class="content">
            <section class="error">
                <div class="wrapper">
                    <div class="error-head">
                        <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="error-content">
                        <div class="error-code">
                            <div class="code-img">
                                <img src="img/img-errorCode.png" alt="">
                            </div>
                            <div class="img-wrapper"><img src="img/img-error.png" alt=""></div>
                        </div>
                        <div class="error-descr">
                            <span>Ошибка 404 означает, что страница, которую<br> Вы запрашиваете, не существует.</span>
                            <span>Возможно, она была удалена, возможно, Вы набрали неправильный адрес.</span>
                        </div>
                        <a href="/" class="error-button">Перейти на главную</a>
                    </div>
                    <div class="error-footer">
                        <span>&copy; 2017  ООО «Нордлайн» Все права защищены.</span>
                    </div>
                </div>
            </section>
        </main>

        <!-- CONTENT EOF   -->

    </div>


@endsection