<?php
$posts = [
    'profilePhoto' => [
        1 => '/image/profile1.jpg',
        '/image/profile2.jpg',
        '/image/profile3.jpg',
        '/image/profile4.jpg',
        '/image/profile5.jpg',
    ],
    'id' => [
        1 => '@id1357722',
        '@hi574429',
        '@ghcvhyjbjkbj',
        '@id5565478',
        '@yep987655',
    ],
    'photo' => [
        1 => '/image/photo1.jpg',
        '/image/photo2.jpg',
        '/image/photo3.jpg',
        '/image/photo4.jpg',
        '/image/photo5.jpg',
    ],
    'like' => [
        1 => '/image/like.png',
    ],
    'discrPost' => [
        1 => 'Отдохнула на природе. #nature',
        'Хороший был день. #nature',
        'Покрасил #bike',
        'Выбрался на озеро. #nature #bike',
        'Квадратное дерево, лол. #nature',
    ],
];


$jsonPosts = json_encode($posts);
//fopen('profiles_json.php');
file_put_contents('profiles_json.php',$jsonPosts);

var_dump($jsonPosts);


?>