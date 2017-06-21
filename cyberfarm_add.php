<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <a class="active" href="cyberfarm_add.php">Maak een Cyberfarm aan</a>
    <a href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>

<article style="margin-left:25%;padding:1px 16px;height:1000px;">
    <form action="add.php" method="post">
        Pin (vier cijfers):  <input type="number" name="pin" min="0000" max="9999"><br>
        Hash: <input type="text" name="hash"><br>
        School:  <input type="text" name="school"><br>
        Medewerker: <input type="text" name="employee"><br>
        Datum:   <input type="datetime-local" name="date"><br>
        Log:     <textarea name="log" rows="10" cols="30">De cyberfarm is gestart via het adminpanel. </textarea>
        <input type="submit">
        <input type="reset">
    </form>
</article>

</body>
</html>
