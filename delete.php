<?php
include_once('connection.php');
$id = $_POST['id'];
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <script src="JS/tab.js"></script>
    <title>CyberFarm TM</title>
</head>
<body>
<nav>
    <a href="index.php">Home</a>
    <a href="cyberfarms.php">Cyberfarms</a>
    <a href="cyberfarm_add.php">Maak een Cyberfarm aan</a>
    <a href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a class="active" href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>


<article style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
    $delete = "DELETE FROM cyberfarm WHERE `cyberfarm_id` = $id";

    if ($db->query($delete) === TRUE) {
        echo "De cyberfarm is met succes verwijderd";
    } else {
        echo "Error deleting record: " . $db->error;
    }

    $db->close();
    ?>

</article>
</body>
</html>



