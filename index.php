<?php

define('SECONDS_IN_DAY', 86400);
define('PROJECT_NAME', 'SkillUp');
$currentDate = time();
$yesterday = $currentDate - SECONDS_IN_DAY * 7;

$posts = [
    'profilePhoto' => [],
    'nickname' => [],
    'photo' => [],
    'likes' => [],
    'discrPost' => [],


];

$posts['profilePhoto'] = [
    1 => '/image/profile1.jpg',
    '/image/profile2.jpg',

];

$posts['nickname'] = [
    1 => '@id1357722',
    '@hi574429',

];
var_dump($posts);



?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once 'include/head.php'; ?>
</head>

<body>

    <div class="container">
        <?php require_once 'include/header.php'; ?>

        <hr class="hr">

        <div class="content">

            <?php //require_once 'posts.php'; ?>

            <?php if ($posts['profilePhoto']) { ?>


            <div class="post1"> <!-- Пост 1 -->
                <div class="photo_of_profile">
                    <?php foreach ($posts['profilePhoto'] as $key => $profilePhoto) {?>
                    <img src="/skillup<?= $profilePhoto ?>" alt="photo_of_profile">
                    <?php if ($posts['nickname']) {

                        }
                    <?php } ?>
                    <div class="name">@id1357722</div>

                </div>

            </div>
            <?php } ?>



            <div class="post1"> <!-- Пост 1 -->
                <div class="photo_of_profile">
                    <img src="image/profile1.jpg" alt="photo_of_profile">
                    <div class="name">@id1357722</div>
                </div>
                <div class="photo_in_post" align="center">
                    <img src="image/photo1.jpg" alt="photo_in_post">
                </div>
                <div class="likes">
                    <img src="image/like.png" alt="like">
                </div>
                <div class="description">
                    <p>Отдохнула на природе. <span class="tag">#nature</span></p>
                </div>
            </div>
            <div class="post2"> <!-- Пост 2 -->
                <div class="photo_of_profile">
                    <img src="image/profile2.jpg" alt="photo_of_profile">
                    <div class="name">@hi574429</div>
                </div>
                <div class="photo_in_post" align="center">
                    <img src="image/photo2.jpg" alt="photo_in_post">
                </div>
                <div class="likes">
                    <img src="image/like.png" alt="like">
                </div>
                <div class="description">
                    <p>Хороший был день. <span class="tag">#nature</span></p>
                </div>
            </div>
            <div class="post3"> <!-- Пост 3 -->
                <div class="photo_of_profile">
                    <img src="image/profile3.jpg" alt="photo_of_profile">
                    <div class="name">@ghcvhyjbjkbj</div>
                </div>
                <div class="photo_in_post" align="center">
                    <img src="image/photo3.jpg" alt="photo_in_post">
                </div>
                <div class="likes">
                    <img src="image/like.png" alt="like">
                </div>
                <div class="description">
                    <p>Покрасил <span class="tag">#bike</span></p>
                </div>
            </div>
            <div class="post4"> <!-- Пост 4 -->
                <div class="photo_of_profile">
                    <img src="image/profile4.jpg" alt="photo_of_profile">
                    <div class="name">@id5565478</div>
                </div>
                <div class="photo_in_post" align="center">
                    <img src="image/photo4.jpg" alt="photo_in_post">
                </div>
                <div class="likes">
                    <img src="image/like.png" alt="like">
                </div>
                <div class="description">
                    <p>Выбрался на озеро. <span class="tag">#nature #bike</span></p>
                </div>
            </div>
            <div class="post5"> <!-- Пост 5 -->
                <div class="photo_of_profile">
                    <img src="image/profile5.jpg" alt="photo_of_profile">
                    <div class="name">@yep987655</div>
                </div>
                <div class="photo_in_post" align="center">
                    <img src="image/photo5.jpg" alt="photo_in_post">
                </div>
                <div class="likes">
                    <img src="image/like.png" alt="like">
                </div>
                <div class="description">
                    <p>Квадратное дерево, лол. <span class="tag">#nature</span></p>
                </div>
            </div>
        </div>
    </div>


</body>



</html>