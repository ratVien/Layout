<?php
/**
 * Created by PhpStorm.
 * User: LIS
 * Date: 18.02.2016
 * Time: 12:50
 */
?>

<!DOCTYPE html>
<html>

<head>
    <title>Layout page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!--<link rel="stylesheet" href="css/style.css" media= "(min-width:480px)"/>-->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<script>/*
    $(document).ready(function mobileSize(){
        if ($(window).width()<='480'){
            var block1 = $('#1').detach();
            $('#2').after(block1.html());
            /*return false;*/
        }
        /*$(window).resize(mobileSize);
    });*/
</script>

<body>
<div class="header">
    <div class="layout-positioner">
        <div class="logo can"><a href="#"><img src="/img/logo.png" alt="logo"><div>COMPANY</div></a>
        </div>
        <div class="top can">
            <div id="title"><h1>Нанотехнологии здоровья</h1></div>
            <div id="contacts">
                <div id="mail">info@company.ru</div>
                <div id="telephone">+7 (383) 349-18-49</div>
            </div>
        </div>
    </div>
    <div class="layout-positioner">
        <div id="reg-block" >
            <div class="reg-form">
                <form>
                    <label>Логин: <input id="login" required></label>
                    <label>Пароль: <input id="password" required></label>
                    <a href="#">Войти</a>
                    <a href="#">Регистрация</a>
                </form>
                <div id="basket">
                    <img src="img/basket.png" alt=""><span>В <a href="#">корзине</a> товаров &#8212 12</span>
                </div>
            </div>
        </div>
    </div>
</div>
<nav>
    <div class="layout-positioner">
        <div class="mobile-menu" ><img src="img/iconmenu.png" alt="i"><a href="#">Меню</a></div>
        <ul class="menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Каталог</a>
                <ul id="sub-menu">
                    <li><a href="#">Электронные сигареты</a></li>
                    <li><a href="#">Трубки</a></li>
                    <li><a href="#">Картриджи</a></li>
                    <li><a href="#">Аккумуляторы и атомайзеры</a></li>
                    <li><a href="#">Акссессуары</a></li>
                    <li><a href="#">Зарядные устройства</a></li>
                    <li><a href="#">Жидкости для заправки</a></li>
                    <li><a href="#">Подарочные наборы</a></li>
                </ul>
            </li>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Доставка и оплата</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
</nav>

<div class="main">
    <div class="layout-positioner">
        <div class="content">
        <div class="catalog-picture" id="2">
            <div class="item"><a href="#"></><a href><img src="img/cigarette.jpg" alt="Cigarettes"></a>
                <a href="#">Электронные сигареты</a>
            </div>
            <div class="item"><a href="#"><img src="img/smoke-pipe.jpg" alt="Smoke-pipes"></a>
                <a href="#">Трубки</a></div>
            <div class="item"><a href="#"><img src="img/fluids.jpg" alt="Fluids"></a>
                <a href="#">Жидкости для заправки</a>
            </div>
            <div class="item"><a href="#"><img src="img/accum.jpg" alt="Accumulators"></a>
                <a href="#">Аккумуляторы и атомайзеры</a>
            </div>
            <div class="item"><a href="#"><img src="img/cartridge.jpg" alt="Cartridges"></a>
                <a href="#">Картриджи</a>
            </div>
            <div class="item"><a href="#"><img src="img/Charge.jpg" alt="Charge"></a>
                <a href="#">Зарядные устройства</a>
            </div>
            <div class="item"><a href="#"><img src="img/accessories.jpg" alt="accessories"></a>
                <a href="#">Акссессуары</a>
            </div>
            <div class="item"><a href="#"><img src="img/present.jpg" alt="Present kits"></a>
                <a href="#">Подарочные наборы</a>
            </div>
        </div>
            </div>
        <div class="sidebar" id="1">
            <div class="catalog-menu">
                <h2>Каталог</h2>
                <ul>
                    <li><a href="#">Электронные сигареты</a></li>
                    <li><a href="#">Трубки</a></li>
                    <li><a href="#">Жидкости для заправки</a></li>
                    <li><a href="#">Аккумуляторы и атомайзеры</a></li>
                    <li><a href="#">Картриджи</a></li>
                    <li><a href="#">Зарядные устройства</a></li>
                    <li><a href="#">Акссессуары</a></li>
                    <li><a href="#">Подарочные наборы</a></li>
                </ul>
            </div>
            <div class="news" >
                <h2>Новости</h2>
                <ul>
                    <li><a href="#">Поздравительная речь президента международной корпорации Хуа Шэн господина Ли Вея в Международный… </a>
                        <div class="data">2010-03-03</div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <a href="#">Собрание правления киевского филиала</a>
                        <div class="data">2010-02-27</div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <a href="#">Петропавловскому офису международной корпорации Хуа Шэнисполнился 1 год</a>
                        <div class="data">2010-02-23</div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <a href="#">Проведение церемонии награждения в бишкекском филиале</a>
                        <div class="data">2010-02-22</div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <a href="#">Сотрудники иркутского филиала отметили китайский новый год </a>
                        <div class="data">2010-02-15</div>
                        <div class="line"></div>
                    </li>
                    <li>
                        <a href="#">Празднование китайского нового года в одесском филиале</a>
                        <div class="data">2010-02-14</div>
                    </li>
                </ul>
                <a href="#">Архив новостей</a>

            </div>
        </div>
        <div class="content">

            <div class="text">
                <h2>Высокое качество японских ножей</h2>

                <p>Кухонные японские ножи (ножи masahiro, касуми, хаттори) известных торговых марок уже завоевали
                    популярность благодаря своей прочности и уникальным качествам - остроте и долговечности заточки.
                    Японские ножи (ножи касуми, масахиро, хаттори, кухонные ножи из дамасской стали) - это
                    профессиональные поварские инструменты, секреты производства которых передаются и шлифуются
                    мастерами из поколения в поколение. Эти японские ножи обладают особым значением - они своего рода
                    статус шеф-повара, в Японии обладание таким ножом считалось показателем высокого мастерства в
                    поварском деле.</p>

                <p>Сегодня японские ножи соединили в себе древнейшие традиции изготовления самурайских мечей и
                    инновационные технологии и, именно поэтому японские ножи обладают уникальными свойствами. Сделаны
                    японские ножи только из высококачественных материалов. Клинок японского ножа делают из
                    высокоуглеродистой стали, что обеспечивает его высокую прочность и надежность. Следует отметить, что
                    японские ножи эргономичны по своему дизайну, что обеспечивает удобство и комфорт в работе. Японские
                    ножи суперострые и после заточки очень долго не тупятся, благодаря этому уникальному качеству они
                    получили широкую известность. Японские ножи - это прекрасный выбор, который говорит о
                    требовательности покупателя к высокому качеству ножа и о его превосходном вкусе. Кстати, нужно
                    отметить, что японские ножи предназначены не только для японской, но и для европейской, а также
                    любой другой кухни. В известных ресторанах крупнейших городов во всем мире используют именно
                    японские ножи. Японские ножи -это профессиональные инструменты для японской кухни (купить японские
                    ножи Вы можете у нас).</p>

                <p>Интернет магазин "Chef" предлагает купить японские ножи (ножи касуми, масахиро), нож для суши. У нас
                    есть японские ножи из дамасской стали (ножи masahiro, касуми). Дамасская сталь - это не просто
                    причудливый узор на лезвии ножа, это технология, сочетающая твердую сталь сердцевины клинка для
                    сохранения остроты ножа и множество слоев мягкой стали, которая и создает рисунок при заточке, для
                    придания гибкости и прочности острой, но хрупкой сердцевине. По этой технологии делались древние
                    острейшие самурайские мечи катаны. Ножи из дамасской стали прочны, надежны и долговечны, что
                    подтверждено многолетним опытом. Не зря ножи из дамасской стали бестселлерами продаж. Есть также
                    товары, которые являются результатом современных научных технологий: титановые, керамические ножи из
                    Японии.</p>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="layout-positioner">
        <div class="foot1">
            <div class="copyright inline">Copyright ©2007-2010
                <h4>© “Company”, 2010</h4></div>
            <ul class="inline">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Каталог</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Доставка и оплата</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
            <div class="dev inline">Разработка сайта &#8212 <a href="#">ITConstruct</a></div>
        </div>
        <div class="foot2">
            <a href="#"><img src="img/company.png" height="48" alt="logo"></a>
            <a href="#"><img src="img/metrica.png" alt="metrica"></a>
        </div>
    </div>
</footer>
<script>
    $(".mobile-menu").click(
        function () {
            $("nav .menu").toggle(300);

            /*return false;*/
        }).click(
        function (close) {
            return false;
        }
    );
    $(document).click(
        function (close) {
            $("nav .menu").hide(300);
            /*return false;*/
        });
</script>
</body>
</html>