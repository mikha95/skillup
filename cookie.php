<?php

//setcookie('count_view', 0, time()+3600);
$countView = 1;
if (!empty($_COOKIE['count_view'])) { //если кука не пустая, то её надо получить в переменную countView и нарастить
    $countView = $_COOKIE['count_view'];
    setcookie('count_view', $countView++, time(+3600));
} else { // и если её нет .её нужно создать со значением 1
    setcookie('count_view', $countView, time()+3600);
}

var_dump($_COOKIE['count_view']); //обращение к куке по ключу и её вывод

echo 'test cookie, count:' . $countView;




?>