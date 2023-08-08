<?php

class Model
{
    public function getContent(PDO $pdo, string $content) {
        $sql = "SELECT content FROM posts WHERE content = :content";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('content', $content);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertData(PDO $pdo, string $content) {
        $sql = "INSERT INTO posts(content, created_at) VALUES (:content, CURRENT_TIMESTAMP)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('content', $content);
        $statement->execute();
        
        $pdo = null;
        $statement = null;
    }
}