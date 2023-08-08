<?php

require_once('app/Session.php');
require_once('app/Controllers/ToDoController.php');
require_once('app/Models/Model.php');
require_once('app/DBConnection.php');

$session = new Session();
$session->startSession();

$content = htmlspecialchars($_POST['content']);

$controller = new ToDoController();
$db = new DBConnection('localhost', 'todolist', 'root', '386342');

if ($controller->isPostEmpty($content) || $controller->isPostExists($db->connect(), $content)) {
    header('Location: index.php');
    die();
} else {
    $controller->createPost($db->connect(), $content);
    header('Location: index.php');
    die();
}

