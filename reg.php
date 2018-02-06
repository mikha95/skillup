<?php

//var_dump($_POST);

if (isset($_POST['is_agree'])) {
    $user = [
        'name' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'sex' => $_POST['sex'],
        'age' => (int)$_POST['age'],
        'growth' => $_POST['growth'],
        'password' => $_POST['password'],
        'stack_learn' => $_POST['stack_learn'],

    ]; //вывод по ключам через переменную, в которой лежат все нужные данные
    var_dump($user);

    if ($user['age'] > 18) {
        echo 'Этот пользователь достаточно взрослый';
    }    elseif ($user['age'] === 18) { //=== точное равенство
        echo 'Этот пользователь достиг взрослого возраста';
    }   else {
        echo 'Этот пользователь недостаточно взрослый';
    }

    echo "<br>";

    echo 'Мы изучаем:' . "<br>";
    foreach ($user['stack_learn'] as $key => $lang) {
        var_dump($lang);
    }
    echo "- " . $lang . "<br>";

}



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkillUP | Регистрация</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid jumbotron col-md-offset-4 col-md-5">

    <h3>Мы изучаем:</h3>
    <ul>
        <?php foreach ($user['$stack_learn'] as $key => $lang) { ?>
            <li> <?= $lang ?> </li>
        <?php } ?>
        </ul>
    <form action="" method="POST">
        <div class="form-group">
            <label for="firstname">Имя</label>
            <input class="form-control" id="firstname" name="firstname" placeholder="Имя" required>
        </div>
        <div class="form-group">
            <label for="lastname">Фамилия</label>
            <input class="form-control" id="lastname" name="lastname" placeholder="Фамилия" required>
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Пароль</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Пол:</label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="male" value="0" checked> Мужской
            </label>
            <label class="radio-inline">
                <input type="radio" name="sex" id="female" value="1"> Женский
            </label>
        </div>
        <div class="form-group">
            <label for="age" class="control-label">Возраст</label>
            <input class="form-control" id="age" name="age" value="18">
        </div>
        <div class="form-group">
            <label for="growth" class="control-label">Возраст</label>
            <input class="form-control" id="growth" name="growth" value="175.6">
        </div>
        <div class="form-group">
            <label for="stack-learn" class="control-label">Что вы изучаете?</label>

            <div class="checkbox">
                <label><input type="checkbox" name="stack_learn[]" value="html" checked> HTML</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="stack_learn[]" value="css" checked> CSS</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="stack_learn[]" value="php"> PHP</label>
            </div>
            <div class="checkbox disabled">
                <label><input type="checkbox" name="stack_learn[]" value="mysql" disabled> MySQL</label>
            </div>

        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="is_agree" value="1"> Условия соглашения</label>
        </div>
        <button class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>

</body>
</html>