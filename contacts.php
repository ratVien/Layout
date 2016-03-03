<!DOCTYPE html>
<html>

<head>
    <title>Layout page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" media= "(min-width:480px)"/>
    <link rel="stylesheet" href="css/contacts.css" media= "(min-width:480px)"/>
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
        <ul class="menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Каталог</a></li>
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
            <h2>Контакты</h2>
            <div class="main-contacts">
                <div class="address">
                    <h3>Адрес нашего офиса:</h3>
                    <p>630065, г. Новосибирск, Декабристов, 92, корп.7<br>
                        Время приема заказов по телефону -</p>

                    <p>с 9.30 до 18.00<br>
                        Телефоны: +7 (383) 255‒15‒15 ; 349‒18‒49</p>
                    <div class="shops">
                        <h3>Магазины партнеры:</h3>

                    <b>Москва</b>
                    <p>
                        Красный проспект, 50, стр. 1. универмаг "Московский":
                        1-й этаж, левое крыло пав. 71,  тел.: +7 (383) 239‒39‒50;
                    </p>
                    <b>Санкт-Петербург</b>
                    <p>
                        www.president-spa.club, (913) 321-83-54
                    </p>
                    </div>
                </div>
                <div class="requisites">
                    <h3>ООО «Компания»</h3>

                    <p>Ген. директор:Иванов А.Ю.</p>

                    <p>Юридический адрес: 630065, г. Новосибирск, Декабристов, 92, корп.7</p>

                    <p>ИНН 7733700983; КПП 7737655901;</p>

                    <p>ОГРН 1097746493754 от 15 июня 2014г.</p>

                    <p>Наименование банка: ОАО «УРАЛСИБ»</p>

                    <p>г. Москва БИК 042591537;<br>
                        Корр. счет 31542814300000000327; Расчетный счет 40418710900020003009</p>
                </div>
            </div>
            <div class="feedback-form">
            <h2>Форма обратной связи</h2>
            <sup>*</sup> <span class="grey">— обязательные для заполнения поля</span><br>
            <div class="red-block red">
                <div id="message1">Поле «Имя» должно быть заполнено </div>
                <div id="message2">Пользователь с такой электронной почтой уже зарегистрирован</div>
                <div id="message3">Поле «Подтерждение пароля» должно быть заполнено</div>
                <div id="message4">Поле «Пароль» должно быть заполнено</div>
            </div>

                <div class="field">
                    <label for="name">Имя<sup>*</sup></label><input type="text" id="name">
                </div>
                <!--<span class="red">Поле «Имя» должно быть заполнено</span>-->
                <div class="field">
                    <label for="mail">Электронная почта<sup>*</sup></label><input type="text" id="mail">

                </div>
                <!--<span class="red">Поле «Электронная почта» должно быть заполнено</span>-->
                <div class="field">
                    <label for="tel">Телефон</label><input type="text" id="tel" value="+7 (983) 534-45-12">
                </div>
                <div class="field">
                    <textarea name="info-area" id="info-area" cols="30" rows="10"></textarea>
            </div>
                <label for="info-area">Пожалуйста укажите какого рода информация вас интересует <sup>*</sup></label>





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