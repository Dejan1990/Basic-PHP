<?php

$connection = require_once './pdo.php';

$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];

if (isset($_GET['id'])) {
    $currentNote = $connection->getNoteById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
<div>
    <form class="new-note" action="save.php" method="post">
        <input type="hidden" name="id" value="<?= $currentNote['id'] ?>">
        <input type="text" name="title" value="<?= $currentNote['title'] ?>" placeholder="Note title" autocomplete="off">
        <textarea name="description" cols="30" rows="4"
                  placeholder="Note Description"><?= $currentNote['description'] ?></textarea>
        <?php if ($currentNote['id']) : ?>
            <button>Update note</button>
        <?php else : ?>
            <button>New note</button>
        <?php endif ?>
    </form>
    <div class="notes">
        <?php if (count($notes)) : ?>
            <?php foreach ($notes as $note) : ?>
                <div class="note">
                    <div class="title">
                        <a href="index.php?id=<?= $note['id'] ?>"><?= $note['title'] ?></a>
                    </div>
                    <div class="description">
                        <?= $note['description'] ?>
                    </div>
                    <small><?php echo date('d/m/Y H:i', strtotime($note['create_date'])) ?></small>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="delete_note" value="<?= $note['id'] ?>">
                        <button class="close">X</button>
                    </form>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <p class="note-danger">There is no notes yet!!!</p>
        <?php endif ?>
    </div>
</div>
</body>
</html>