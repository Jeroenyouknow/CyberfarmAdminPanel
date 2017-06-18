<?php
include_once('connection.php');
$id = $_POST['id'];
$pin = $_POST['pin'];
$hash = $_POST['hash'];
$school = $_POST['school'];
$employee = $_POST['employee'];
$date = $_POST['date'];
$log = $_POST['log'];
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    <a class="active" href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
    $update = "UPDATE `cyberfarm` SET `cyberfarm_id` = '$id', `pin` = '$pin', `hash` = '$hash', `schoolname` = '$school', `author` = '$employee', `startdate` = '$date', `log` = '$log' WHERE `cyberfarm_id` = $id";

    if ($db->query($update) === TRUE) {
        echo "Cyberfarm met succes geupdate";
    } else {
        echo "Error updating record: " . $db->error;
    }

    $db->close();
    ?>

</div>
</body>
</html>



