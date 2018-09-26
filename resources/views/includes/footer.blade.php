<!-- BEGIN FOOTER -->

<footer class="footer">
    <div class="footer-top">
        <div class="wrapper">
            <div class="footer-container">
                <h2>Нужна<br>
                    консультация? <i class="icon-next"></i></h2>
                <div class="text">
                    <p>Подробно об оборудовании, видах дополнительных услуг, наших ценах.<br> Все что Вас заинтересовало! </p>
                </div>
                <a href="#ask-question" class="main-btn white js-popup">Задать вопрос</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
            <div class="flex-container">
                <div class="flex-item-4">
                    <div class="footer-left">
                        <!--div class="footer-socials">
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
                        </div-->
                        <div class="footer-rights">
                            &copy; 2013-2018  ООО «Нордлайн»<br>
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
                        </ul>
                    </nav>
                </div>
                <div class="flex-item-5">
                    <div class="footer-contacts">
                        <a href="tel:8{{str_replace(['(',')',' ', '+7','-'],'',config('app.phone'))}}"class="footer-tel">{{config('app.phone')}}</a>
                        <span><strong>Режим работы:</strong> с 9 до 18.00 пн-пт</span>
                        <span><strong>e-mail:</strong> <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- FOOTER EOF   -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48198317 = new Ya.Metrika({
                    id:48198317,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48198317" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->