<!-- BEGIN HEADER -->

<header class="header">
        <div class="header-top">
            <div class="wrapper">
                <div class="header-container">
                    <button class="mobileNav-btn visible-sm">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <a href="/" class="logo">
                        <img src="/img/logo.png" alt="">
                    </a>
                    <form class="header-search">
                        <div class="box-field">
                            <label for="" class="box-field__label"></label>
                            <div class="box-field__input">
                                <input type="text" class="form-control" placeholder="Поиск">
                                <input type="submit" class="search-btn">
                            </div>
                        </div>
                    </form>
                    <div class="header-contacts hidden-sm">
                        <div class="header-contacts__top"><i class="icon-tel"></i><a href="#+78129876543">{{config('app.phone')}}</a></div>
                        <div class="header-contacts__bottom">Режим работы с 9 до 20 часов</div>
                    </div>
                    <div class="header-feedback hidden-sm">
                        <a href="#request-price" class="main-btn js-popup">Заказать звонок</a>
                    </div>
                    <button class="mobileSearch-btn visible-sm"></button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="wrapper">
                <nav class="header-nav">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="header-nav-list">
                        @foreach(App\Model\Page::where('parent_id',null)->orderBy('lft','ASC')->get() as $menu)

                            <li><a href="{{$menu->slug}}" class="
                                @if(isset($page))
                                @if ($page->slug == $menu->slug)
                                        active
                                @endif @endif">{{$menu->title}}</a></li>

                        @endforeach
                        <!--li><a href="#">Главная</a></li>
                        <li><a href="#">Каталог оборудования</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Производители</a></li>
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Контакты</a></li-->
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<!-- HEADER EOF   -->