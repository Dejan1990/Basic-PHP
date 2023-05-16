<?php

$todos = file_exists('todo.json') 
    ? json_decode(file_get_contents('todo.json'), true) 
    : [];

/*$todos = [];
if (file_exists('todo.json')) {
    $todos = json_decode(file_get_contents('todo.json'), true);
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <form action="newTodo.php" method="post" style="margin-bottom: 20px;">
        <input type="text" name="todo_name">
        <button>New Todo</button>
    </form>
    <?php if (count($todos)) : ?>
        <?php foreach ($todos as $todoName => $todoCompleted) : ?>
            <div style="margin-bottom: 20px;">
                <form style="display: inline-block;" action="change_status.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <input type="checkbox" <?php echo $todoCompleted['completed'] ? 'checked' : '' ?>>
                </form>
                <span><?php echo $todoName ?></span>
                <form style="display: inline-block" action="delete.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <button>Delete</button>
                </form>
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <p>Something went wrong...</p>
    <?php endif ?>
</body>

<script>
    const checkbox = document.querySelectorAll('input[type=checkbox]')
    checkbox.forEach(ch => {
        ch.onclick = function () {
            this.parentNode.submit()
        }
    })
</script>
</html>