<?php

require_once "vendor/autoload.php";

use App\Task;

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : false;

if (!$id) {
    header('Location: index.php'); die();
}

$taskModel = new Task();
$taskModel->remove($id);

header('Location: index.php'); die();
