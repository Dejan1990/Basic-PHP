<?php

//var_dump($_POST);

if (isset($_POST['todo_name'])) {
    $todos = json_decode(file_get_contents('todo.json'), true);
    unset($todos[$_POST['todo_name']]);
}

file_put_contents('todo.json', json_encode($todos, JSON_PRETTY_PRINT));
header('Location: index.php');
