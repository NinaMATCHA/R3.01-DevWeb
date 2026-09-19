<?php

namespace modules\models;
class Connection_model {

    public function __construct(private \Includes\Database\DatabaseConnection $connection) {}

    public function getConnection(): array
    {
        if (!$statement = $this->connection->getConnection()->query('SELECT id, title, content,
        creation_date FROM posts ORDER BY creation_date DESC LIMIT 0, 5’))
        {
            throw new DatabaseException();
        }
        $posts = [];
        while ($row = $statement->fetch(PDO::FETCH_OBJ)) {
            $post = new Post($row->id, $row->title, $row->creation_date, $row->content);
            $posts[] = $post;
        }
        return $posts;
    }
}
