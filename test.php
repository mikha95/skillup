<pre>
<?php

// Строка
$string = '5.6';
var_dump((float)$string); //конвертирование

// Число
$integer = 5;
var_dump((string)$integer); // конвертирование

// Число с плавающей точкой
$float = 16.5;
var_dump($float);

// Булево значение
$bool = true;
var_dump($bool);

// Значение NULL
$null = null;
var_dump($null);


// Массив
$array = [
    '1' =>'red',
    'green',
    'blue',
    'yellow',
    'new color' => [
        'black',
        'orange', // будет перезаписано
    ]
];
$array[] = 'gray';
$array['new color'] = [
    1
]; // перезаписывает
var_dump($array);


// Ассоциативный массив
$user = [
  'name' => 'Vasya',
  'age' => 18,
  'grow' => 175.2,
  'is_smoking' => false,
    'rate' => [
        [
            'rate' => 3,
            'teacher' => "Ivanova 0"
        ],
        [
            'rate' => 3,
            'teacher' => "Ivanova 0"
        ],

    ]
];
$user['rate'][] = [
    'rate' => 5,
    'teacher' => "Ivanova 1"
];
$user ['rate'] [] = [
    'rate' => 4,
    'teacher' => "Ivanova 2"
];

$user['lastname'] = 'Ivanov';
var_dump($user['name']); //вывод по ключу
var_dump($user);
var_dump(count($user['rate']));
?>
</pre>