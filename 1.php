<!DOCTYPE html>
<html>

<head>
    <title>Layout page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" media= "(min-width:480px)"/>
    <link rel="stylesheet" href="css/1.css" media= "(min-width:480px)"/>
</head>

<body>

<div class="feedback-form">
    <h2>Форма обратной связи</h2>
    <sup>*</sup> <span class="grey">— обязательные для заполнения поля</span><br>
    <div class="red-block red">
        <div id="message1">Поле «Имя» должно быть заполнено </div>
        <div id="message2">Пользователь с такой электронной почтой уже зарегистрирован</div>
        <div id="message3">Поле «Подтерждение пароля» должно быть заполнено</div>
        <div id="message4">Поле «Пароль» должно быть заполнено</div>
    </div>
    <div class="input-form">
        <div class="l-field">
            <label for="name">Имя<sup>*</sup></label>
            <label for="mail">Электронная почта<sup>*</sup></label>
            <label for="tel">Телефон</label>
            </div>
        <div class="i-field">
            <input type="text" id="name">
            <input type="text" id="mail">
            <input type="text" id="tel" value="+7 (983) 534-45-12">
            <textarea name="info-area" id="info-area" cols="30" rows="10"></textarea>
        </div>
        <!--
            <div class="input-form">
                <div class="field">
                    <label for="name">Имя<sup>*</sup></label><input type="text" id="name">
                </div>
                <span class="red">Поле «Имя» должно быть заполнено</span>
        <div class="field">
            <label for="mail">Электронная почта<sup>*</sup></label><input type="text" id="mail">
        </div>
        <span class="red">Поле «Электронная почта» должно быть заполнено</span>
        <div class="field">
            <label for="tel">Телефон</label><input type="text" id="tel" value="+7 (983) 534-45-12">
        </div>
        <div class="field">
            <textarea name="info-area" id="info-area" cols="30" rows="10"></textarea>
        </div>

    </div>
    <label for="info-area">Пожалуйста укажите какого рода информация вас интересует <sup>*</sup></label>
</div>
-->
</body>
</html>