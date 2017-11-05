<!-- BEGIN FOOTER -->

<footer class="footer">
    <div class="footer-top">
        <div class="wrapper">
            <div class="footer-container">
                <h2>Нужна<br>
                    консультация? <i class="icon-next"></i></h2>
                <div class="text">
                    <p>Подробно об оборудовании, видах дополнительных услуг, наших ценах, подберем удобное и индивидуальное предложение! </p>
                </div>
                <a href="#request-price" class="main-btn white js-popup">Задать вопрос</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
            <div class="flex-container">
                <div class="flex-item-4">
                    <div class="footer-left">
                        <div class="footer-socials">
                            <div class="footer-socials__title">
                                Мы в соц.медия:
                            </div>
                            <ul class="footer-socials-list">
                                <li>
                                    <a href="#"><i class="icon-socials vk"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-socials fb"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-socials tw"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-socials in"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-socials inst"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-rights">
                            &copy; 2017  ООО «Нордлайн»<br>
                            Все права защищены.
                        </div>
                    </div>
                </div>
                <div class="flex-item-3">
                    <nav class="footer-nav">
                        <span class="footer-title">КАРТА САЙТА</span>
                        <ul class="footer-nav-list">
                            @foreach(App\Model\Page::where('parent_id',null)->orderBy('lft','ASC')->get() as $menu)

                                <li><a href="/catalog/{{$menu->slug}}" class="
                                            @if(isset($page))
                                    @if ($page->slug == $menu->slug)
                                            active
                                    @endif @endif">{{$menu->title}}</a></li>

                            @endforeach
                            <!--li><a href="#">О компании</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Каталог оборудования</a></li>
                            <li><a href="#">Гарантия</a></li>
                            <li><a href="#">Новости и акции</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Производители</a></li-->
                        </ul>
                    </nav>
                </div>
                <div class="flex-item-5">
                    <div class="footer-contacts">
                        <a href="#" class="footer-tel">{{config('app.phone')}}</a>
                        <span><strong>Режим работы:</strong> с 9 до 20.00 пн-пт</span>
                        <span><strong>e-mail:</strong> <a href="mailto:zakaz@domainame.ru">{{config('app.email')}}</a></span>
                        <span class="designer"><strong>Дизайнер</strong> <a href="#">Alexandr Burn</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- FOOTER EOF   -->