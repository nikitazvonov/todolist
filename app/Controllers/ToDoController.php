<?php

require_once('app/Models/Model.php');

class ToDoController
{
    public function isPostExists(PDO $pdo, string $content) {
        $model = new Model();
        if ($model->getContent($pdo, $content)) {
            return true;
        } else {
            return false;
        }
    }

    public function isPostEmpty(string $content) {
        if (empty($content)) {
            return true;
        } else {
            return false;
        }
    }

    public function createPost(PDO $pdo, string $content) {
        $model = new Model();
        $model->insertData($pdo, $content);
    }
}