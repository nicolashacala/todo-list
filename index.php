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

<div id="list">
      <div id="a-faire">
        <p class="h3">TO DO</p>
        <form>
            
        </form>
    </div>
    
    <div id="done">
        <p class="h3">DONE</p>

    </div>
  </div>

	<div id="ajouter">
        <p class="h2">AJOUTER UNE TACHE</p>
           <form action="contenu.php" method="POST">
                <input type="text" name="task" placeholder="La tâche à effectuer">
                <input type="submit" name="submit" value="Ajouter" id="add">
           </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
