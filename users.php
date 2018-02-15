<?php

$db = new PDO('mysql:host=localhost;dbname=php2;charset=utf8', 'root', 'root');
$result = $db->query('
  SELECT * FROM users
  WHERE age >= 18;
  ');
$users = $result->fetchAll();
var_dump($users);

//<?php foreach($users['id'] as $id) {

?>
<!DOCTYPE html>
<html
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Пароль</th>
            <th>Рост</th>
            <th>Возраст</th>
            <th>Активность</th>
        </tr>
        <?php foreach($users as $user) { ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['firstname'] ?></td>
            <td><?= $user['lastname'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $user['growth'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['is_active'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
