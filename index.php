<?php 
require('contenu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>To Do list</title>
</head>
<body>

<div class="tasks_display">
    <div id="toDoDiv">
        <p class="h3">TO DO</p>
        <form>
        </form>
    </div>
    <div id="archiveDiv">
        <p class="h3">DONE</p>
    </div>
</div>
<div class="add_tasks">
    <p class="h2">Add a task</p>
    <form action="contenu.php" method="POST">
        <input type="text" name="task" placeholder="New Task...">
        <input type="submit" value="Add">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>