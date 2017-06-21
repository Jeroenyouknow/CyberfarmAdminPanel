<?php
include_once ('connection.php');
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <title>CyberFarm TM</title>
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="cyberfarms.php">Cyberfarms</a>
    <a href="cyberfarm_add.php">Maak een Cyberfarm aan</a>
    <a class="active" href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <form action="update_edit.php" method="post">
        Pin (vier cijfers):  <input type="number" name="pin" min="0000" max="9999"><br>
        School:  <input type="text" name="school"><br>
        <input type="submit">
    </form>

</div>
</body>
</html>
