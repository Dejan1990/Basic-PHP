<?php

class Connection
{
    public $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=database;dbname=notes', 'root', 'tiger');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch (\Throwable $th) {
            echo "Connection failed " . $th->getMessage();
        }
    }

    public function getNotes()
    {
        $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY id DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addNote($note)
    {
        $statement = $this->pdo->prepare("INSERT INTO notes (title, description, create_date) VALUES (:title, :description, :date)");
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('description', $note['description']);
        $statement->bindValue('date', date('Y-m-d H:i:s'));
        return $statement->execute();
    }

    public function removeNote($id)
    {
        $statement = $this->pdo->prepare("DELETE FROM notes WHERE id = :id");
        $statement->bindValue('id', $id);
        return $statement->execute();
    }

    public function getNoteById($id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateNote($id, $note)
    {
        $statement = $this->pdo->prepare("UPDATE notes SET title = :title, description = :description WHERE id = :id");
        $statement->bindValue('id', $id);
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('description', $note['description']);
        return $statement->execute();
    }
}

return new Connection();