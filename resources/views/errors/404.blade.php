<?php if (!isset($page)){
    $page = \App\Model\Page::find(1);
} ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>Страница не найдена</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <base href="/">

</head>
<body class="loaded">


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
                    <a href="#" class="error-button">Перейти на главную</a>
                </div>
                <div class="error-footer">
                    <span>&copy; 2017  ООО «Нордлайн» Все права защищены.</span>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTENT EOF   -->

</div>


<div class="hidden">
    <div class="popup" id="request-price">
        <div class="popup-title">Запросить цену</div>
        <div class="popup-sub-title">Все поля обязательны для заполнения</div>
        <form class="popup-form" method="POST" action="question/save">
            {!! csrf_field() !!}
            <div class="box-field">
                <label class="box-field__label">Наименование оборудования:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="title" placeholder="Siemens Aloka ProSound F99 (Россия)">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Представьтесь:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="name" required placeholder="Введите Ваше Имя">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Организация:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="company" required placeholder="Введите название компании">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Электронный адрес:</label>
                <div class="box-field__input">
                    <input type="email" class="form-control" name="email" required placeholder="Введите Ваш  e-mail">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Контактный телефон:</label>
                <div class="box-field__input">
                    <input type="tel" class="form-control" name="phone" required placeholder="+74959876543">
                </div>
            </div>
            <input type="submit" value="Отправить" class="main-btn white">
            <input type="hidden" value="" name="robot">
        </form>
        <div class="descr">Коммерческое предложение с максимальной скидкой будет направлено Вам по электронной почте.</div>
    </div>
    <div class="popup" id="callback">
        <div class="popup-title">Заказ звонка</div>
        <div class="popup-sub-title">Все поля обязательны для заполнения</div>
        <form class="popup-form" method="POST" action="question/save">
        {!! csrf_field() !!}
        <!--div class="box-field">
                <label class="box-field__label">Наименование оборудования:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="title" placeholder="Siemens Aloka ProSound F99 (Россия)">
                </div>
            </div-->
            <div class="box-field">
                <label class="box-field__label">Представьтесь:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="name" required placeholder="Введите Ваше Имя">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Организация:</label>
                <div class="box-field__input">
                    <input type="text" class="form-control" name="company" required placeholder="Введите название компании">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Электронный адрес:</label>
                <div class="box-field__input">
                    <input type="email" class="form-control" name="email" required placeholder="Введите Ваш  e-mail">
                </div>
            </div>
            <div class="box-field">
                <label class="box-field__label">Контактный телефон:</label>
                <div class="box-field__input">
                    <input type="tel" class="form-control" name="phone" required placeholder="+74959876543">
                </div>
            </div>
            <input type="submit" value="Отправить" class="main-btn white">
            <input type="hidden" value="" name="robot">
        </form>
        <!--div class="descr">Коммерческое предложение с максимальной скидкой будет направлено Вам по электронной почте.</div-->
    </div>
</div>

<div class="icon-load"></div>

<!-- BODY EOF   -->
@section('js')
    <script type="text/javascript" src="/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery-migrate-1.4.1.min.js" ></script>

    <script type="text/javascript" src="/js/components/slick.js" ></script>
    <script type="text/javascript" src="/js/components/jquery.formstyler.js" ></script>
    <script type="text/javascript" src="/js/components/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="/js/components/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBivRIRHjx3oTlTe5yU3PdAK7GZn50mJBg&callback=initMap">
    </script>
    @if (session('success'))
        <script>
            toastr.success('{{session('success')}}');
        </script>
    @elseif(session('success'))
        <script>
            toastr.error('{{session('success')}}');
        </script>
    @endif
    <!--
<script type="text/javascript" src="js/components/jquery.fancybox.js" ></script>
<script type="text/javascript" src="js/components/jquery.mCustomScrollbar.js" ></script>
<script type="text/javascript" src="js/components/jquery-ui.js">

-->
    <script type="text/javascript" src="/js/custom.js" ></script>
    <script>
        $('input[name=robot]').val('fuck-robots');
    </script>
</body>
@show
</html>
