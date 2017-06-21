<?php
include_once('connection.php');
$pin = $_POST['pin'];
$school = $_POST['school'];
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
    <a class="active" href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>


<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <?php
    $select = "SELECT * FROM `cyberfarm` WHERE `pin` = $pin AND `schoolname` LIKE '$school'";
    $result = $db->query($select);

    if ($result->num_rows > 0) {
        $result = mysqli_query($db, $select);
        $cyberfarm = mysqli_fetch_assoc($result);
    } else {
        echo "Er zijn geen cyberfarms met de gegevens gevonden!";
    }

    $db->close();
    ?>

    <form action="update.php" method="post">
         <input type="hidden" name="id" value="<?= $cyberfarm['cyberfarm_id']; ?>"><br>
        Pin (vier cijfers): <input type="number" name="pin" min="0000" max="9999" value="<?= $cyberfarm['pin']; ?>"><br>
        Hash: <input type="text" name="hash" value="<?= $cyberfarm['hash']; ?>"><br>
        School: <input type="text" name="school" value="<?= $cyberfarm['schoolname']; ?>"><br>
        Medewerker: <input type="text" name="employee" value="<?= $cyberfarm['author']; ?>"><br>
        Datum: <input type="text" name="date" value="<?= $cyberfarm['startdate']; ?>"><br>
        Log: <textarea name="log" rows="10" cols="30"><?= $cyberfarm['log']; ?> </textarea>
        <input type="submit">
    </form>


</div>
</body>
</html>



