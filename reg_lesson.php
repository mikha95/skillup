<?php

define('UPLOAD_DIR', 'upload/');


//$h = fopen('test.txt', 'a+');
//for ($i=1;$i <= 100; $i++) {
//    fwrite($h, "new string: {$i}" . PHP_EOL);
//}
//
//fclose($h);

//$arrResult = glob('*.txt');
//foreach ($arrResult as $filename) {
//    var_dump(filesize($filename)); //кладётся ...
//    //copy($filename, './css/' .$filename.'.bak');
//    //rename('./css/' .$filename.'.bak', './css/' .$filename);
//    //unlink('./css/' .$filename);  //удаление
//}
//var_dump($arrResult);

//die();





function getFullName($user) {
    return $user['firstname'] . ' ' . $user['lastname'];
}
function createPath($path) {
    $isSuccess = false;
    if (!file_exists($path)) {
        $isSuccess = mkdir($path, 0777 , true);
    }
    move_uploaded_file($_FILES['photo']['tmp_name'], UPLOAD_DIR . $_FILES['photo']['name']);
    return $isSuccess;
}
$errorMessage = [];

$user = [
    'firstname' => ' Иванов 1',
    'lastname' => null,
    'password' => null,
    'sex' => null,
    'age' => null,
    'growth' => null,
    'stack_learn' => [],
    'list_fruits' => 'Яблоко, Апельсин, Груша',
];



if ( isset($_POST['is_agree']) ) {

    //header('Location: /path/to/route');  //редирект

  //создание пользователя
    $user = [
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'password' => $_POST['password'],
        'sex' => $_POST['sex'],
        'age' => (int)$_POST['age'],
        'growth' => $_POST['growth'],
        'stack_learn' => [],
        'list_fruits' => 'Яблоко, Апельсин, Груша',
    ];

    var_dump(getFullName($user));

    if (isset($_POST['stack_learn'])) {
        $user['stack_learn'] = $_POST['stack_learn'];
    }

    if (strlen($user['firstname']) < 3 || strlen($user['lastname']) <3) {
        $errorMessage[] = 'Имя и фамилия не должны быть короче трёх символов';
    }
// валидация
    if ( !(in_array('html', $user['stack_learn']) && in_array('php', $user['stack_learn'])) ) {
        $errorMessage[] = 'Требуется html и php';
    }

    if (empty($errorMessage)) {

            $db = new PDO('mysql:host=localhost;dbname=php2;charset=utf8', 'root', 'root');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = $db->prepare("
            INSERT INTO users (firstname, lastname, password, growth, age)
            VALUES (:firstname, :lastname, :password, :growth, :age);
        ");
            $result->execute([
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'password' => $user['password'],
                'growth' => $user['growth'],
                'age' => $user['age'],
            ]);

        var_dump('test');
    }
}

$jsonUser = json_encode($user);
$arrUser = json_decode($jsonUser, true);
$objUser = json_decode($jsonUser, false);
$test = serialize(12);
var_dump($jsonUser);
var_dump($arrUser);
var_dump($objUser);
var_dump(serialize($objUser));
var_dump(unserialize($test));

if (isset($_FILES['photo']) && empty($_FILES['photo']['error'])) {
    $uploadPath = UPLOAD_DIR . 'photo/';
    createPath($uploadPath);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath . uniqid() . '.png');
}

var_dump($_FILES);
    $string = 'Hello, world!';
    $result = substr($string, 7, 2);
    var_dump($result);
echo "<br>";
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

<?php if ($errorMessage) { ?>
    <?php foreach ($errorMessage as $message) { ?>

    <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    <?= $message ?>
    </div>
    <?php } ?>
<?php } ?>

<div class="container-fluid jumbotron col-md-offset-4 col-md-5">

    <?php if (isset($user['stack_learn'])) { ?>
    <h3>Мы изучаем:</h3>
    <ul>
        <?php foreach ($user['stack_learn'] as $key => $lang) { //key можно убрать ?>
            <li><?= $lang ?></li>
        <?php } ?>
        <h3>Наши фрукты:</h3>
        <?php foreach (explode(', ', $user['list_fruits']) as $key => $fruit) { ?>
            <li><?= $fruit ?></li>
        <?php } ?>
    </ul>
        <h3>Мы изучаем: <?= implode(', ', $user['stack_learn']) ?>.</h3>
    <?php } ?>


    <hr />

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="firstname">Имя</label>
            <input class="form-control" id="firstname" name="firstname" value="<?= (isset($_POST['firstname'])) ? $_POST['firstname'] : '' ?>" placeholder="Имя" required>
        </div>
        <div class="form-group">
            <label for="lastname">Фамилия</label>
            <input class="form-control" id="lastname" name="lastname" value="<?= (isset($_POST['lastname'])) ? $_POST['lastname'] : '' ?>" placeholder="Фамилия" required>
        </div>


        <div class="form-group">
            <label for="photo" class="control-label">Фото</label>
            <input type="file" class="form-control" name="photo" id="" placeholder="">
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
            <label><input type="checkbox" name="is_agree" value="1" required> Условия соглашения</label>
        </div>
        <button class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>

</body>
</html>