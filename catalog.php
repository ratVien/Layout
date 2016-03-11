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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/catalog.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

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
                    <label>Логин: <input id="login"></label>
                    <label>Пароль: <input id="password"></label>
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
        <div class="mobile-menu"><img src="img/iconmenu.png" alt="i"><a href="#">Меню</a></div>
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
        <div class="sidebar">
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
            <div class="news">
                <h2>Новости</h2>
                <ul>
                    <li><a href="#">Поздравительная речь президента международной корпорации Хуа Шэн господина Ли Вея в Международный… </a>
                        <div class="data">2010-03-03</div>
                    </li>
                    <li>
                        <a href="#">Собрание правления киевского филиала</a>
                        <div class="data">2010-02-27</div>
                    </li>
                    <li>
                        <a href="#">Петропавловскому офису международной корпорации Хуа Шэнисполнился 1 год</a>
                        <div class="data">2010-02-23</div>
                    </li>
                    <li>
                        <a href="#">Проведение церемонии награждения в бишкекском филиале</a>
                        <div class="data">2010-02-22</div>
                    </li>
                    <li>
                        <a href="#">Сотрудники иркутского филиала отметили китайский новый год </a>
                        <div class="data">2010-02-15</div>
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
            <div class="bread">
                <ins>Главная</ins> → Каталог  →
            </div>
            <div class="price-select">
                <label>Цена
                <input type="text" placeholder="от"> &#8212 <input type="text" placeholder="до"><a href="#">Применить</a></label>
            </div>
            <div class="catalog-picture">
                <div class="item"><a href><img src="img/cigarette.jpg" alt="Cigarettes"></a>
                    <a href="#">Электронные сигарета FD12</a>
                    <div class="item-price"><b>820</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/smoke-pipe.jpg" alt="Smoke-pipes"></a>
                    <a href="#">Трубка из дерева</a>
                    <div class="item-price"><b>760</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/fluids.jpg" alt="Fluids"></a>
                    <a href="#">Жидкость для заправки</a>
                    <div class="item-price"><b>59</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/accum.jpg" alt="Accumulators"></a>
                    <a href="#">Аккумулятор TY132</a>
                    <div class="item-price"><b>820</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/nophoto.png" alt="Cartridges"></a>
                    <a href="#">Картридж FG876</a>
                    <div class="item-price"><b>760</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/Charge.jpg" alt="Charge"></a>
                    <a href="#">Зарядное устройство</a>
                    <div class="item-price"><b>59</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/accessories.jpg" alt="accessories"></a>
                    <a href="#">Акссессуар</a>
                    <div class="item-price"><b>820</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
                <div class="item"><a href="#"><img src="img/present.jpg" alt="Present kits"></a>
                    <a href="#">Подарочный набор</a>
                    <div class="item-price"><b>760</b> руб.</div>
                    <div class="buy"><img src="img/basket-black.png" alt="basket"><a href="#">в корзину</a></div>
                </div>
            </div>
            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#" class="active">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">Следующая страница</a>
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
</body>
</html>