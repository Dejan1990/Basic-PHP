<?php

//var_dump($_POST);

if (isset($_POST['todo_name'])) {
    $todos = json_decode(file_get_contents('todo.json'), true);
    $todos[$_POST['todo_name']]['completed'] = !$todos[$_POST['todo_name']]['completed'];
}

file_put_contents('todo.json', json_encode($todos, JSON_PRETTY_PRINT));
header('Location: index.php');

