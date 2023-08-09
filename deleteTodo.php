<?php

require_once('app/Session.php');
require_once('app/Controllers/ToDoController.php');
require_once('app/Models/Model.php');
require_once('app/DBConnection.php');

$session = new Session();
$session->startSession();

$controller = new ToDoController();
$db = new DBConnection('localhost', 'todolist', 'root', '386342');

$id = $_GET['deleteid'];
if (isset($_GET['deleteid'])) {
    $controller->deletePost($db->connect(), $id);
    header('Location: index.php');
    die();
} else {
    header('Location: index.php');
    die();
}

