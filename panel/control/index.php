<?php
session_start();
if ($_SESSION["logged"] != true) {
    header("Location: ../index.html");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="../panel.css">
</head>
<body>
    <main>
        <h1>Panel</h1>
        <a href='write.php'><button class="btn btn-normal">Stwórz nowy post</button></a>
    </main>
</body>
</html>