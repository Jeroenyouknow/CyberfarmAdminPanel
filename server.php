<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
    <link rel="shortcut icon" href="Afbeeldingen/logo.png" type="image/x-icon">
    <title>CyberFarm TM</title>
</head>

<body>
<nav>
    <a href="index.php">Home</a>
    <a href="cyberfarms.php">Cyberfarms</a>
    <a href="cyberfarm_add.php">Maak een Cyberfarm aan</a>
    <a href="cyberfarm_update.php">Update een Cyberfarm</a>
    <a href="cyberfarm_delete.php">Verwijder een Cyberfarm</a>
    <a class="active" href="server.php">Server status</a>
    <a href="about.php">Over Cyberfarm </a>
</nav>

<article style="margin-left:25%;padding:1px 16px;height:1000px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Pin</th>
                    <th>Hash</th>
                    <th>Schoolname</th>
                    <th>Author</th>
                    <th>Startdate</th>
                    <th>Log</th>
                </tr>
                </thead>
                <tbody id="cyberfarms">
                </tbody>
            </table>
        </div>

        <script src="node_modules/reqwest/reqwest.min.js"></script>
        <script src="js/main.js"></script>
</article>
</body>

</html>
