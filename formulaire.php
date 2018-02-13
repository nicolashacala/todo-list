<?php
if(isset($_POST['taskToAdd']) && !empty($_POST['taskToAdd'])){
    $newTask = $_POST['taskToAdd'];
    $json = file_get_contents('todo.json');
    $allTasks = json_decode($json, true);
    array_push($allTasks['todo'], $newTask);
    file_put_contents('todo.json', json_encode($allTasks));
}
?>

<h1>Ajouter une tâche</h1>
<form action="" method="post">
    <label for="taskToAdd">La tâche à effectuer</label>
    <input type="text" name="taskToAdd">
    <input type="submit" value="Ajouter">
</form>