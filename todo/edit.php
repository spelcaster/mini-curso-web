<?php
require_once "vendor/autoload.php";

use App\Task;

if (count($_POST)) {
    $taskModel = new Task();
    $taskModel->update($_POST);
    header('Location: index.php'); die();
}

$id = isset($_GET['id']) ? $_GET['id'] : false;

if (!$id) {
    header('Location: index.php'); die();
}

$taskModel = new Task();
$task = $taskModel->findOne($id);

if (!count($task)) {
    header('Location: create.php'); die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
            <input type="text" name="task" placeholder="Tarefa maneira!" value="<?php echo $task['task']; ?>">
            <input type="submit" class="btn btn-primary" value="Editar">
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
