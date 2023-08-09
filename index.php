<?php
require_once('app/Session.php');
require_once('app/Controllers/ToDoController.php');
require_once('app/Models/Model.php');
require_once('app/DBConnection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Список дел</title>
</head>
<body>
    <section>
        <h1>Список дел</h1>
        <div>
            <form action="addTodo.php" method="POST">
                <input type="text" name="content" placeholder="Что нужно сделать?">
                <input type="submit" name="submit" value="+">
            </form>
        </div>
    </section>
</body>
</html>

<?php

require_once('app/Controllers/ToDoController.php');
require_once('app/Models/Model.php');
require_once('app/DBConnection.php');

$controller = new ToDoController();
$db = new DBConnection('localhost', 'todolist', 'root', '386342');

$posts = $controller->showPosts($db->connect());

foreach (array_reverse($posts) as $post) {
    echo "<br>";
    echo "<div>" . $post['content'] . "<br>" . "<a href=\"deleteTodo.php?deleteid=" . $post['id'] . "\">Удалить</a>" . "</div>";
}
?>