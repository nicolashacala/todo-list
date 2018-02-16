<?php
if(isset($_POST['task']) && !empty($_POST['task'])){
    writeTask();
    header('location: index.php');
}

function writeTask(){
    $addTask = $_POST['task'];
    $content = file_get_contents('todo.json');
    $contentDecoded = json_decode($content, true);
    $contentDecoded['todo'][] = $addTask;
    $json = json_encode($contentDecoded);
    file_put_contents('todo.json', $json);
}