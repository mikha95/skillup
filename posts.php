<?php

$posts = [


];

$posts['post1'] = [
    'profilePhoto' => '/image/profile1.jpg',
    'nickname' => '@id1357722',
    'photo' => '/image/photo1.jpg',
    'likes' => '/image/like.jpg',
    'discrPost' => 'Отдохнула на природе. #nature',
];

$posts['post2'] = [
    'profilePhoto' => '/image/profile2.jpg',
    'nickname' => '@@hi574429',
    'photo' => '/image/photo2.jpg',
    'likes' => '/image/like.jpg',
    'discrPost' => 'Хороший был день. #nature',
];


var_dump($posts['post1'] ['photo']);
//echo $post1;
//print_r($post1);
?>