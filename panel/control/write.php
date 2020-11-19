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
    <title>Napisz artykuł - Panel Zespół Szkolno-Szkolny w Szkole</title>
    <link rel="stylesheet" href="../write.css">
</head>

<body>
    <main>
        <form action="article.php" method="get">
            <textarea name="markup" id="markup" cols="30" rows="10" placeholder="Treść postu"></textarea>
            <button class="btn btn-success" type="submit">Opublikuj</button>
            <button class="btn btn-normal" id="podglad">Podgląd</button>
            <input type="text" name="tytul" id="tytul" placeholder="Tytuł Artykułu">
            <input type="text" name="opis" id="opis" placeholder="Opis">
            <input type="text" name="linkimg" id="linkimg" placeholder="Link do obrazka">
        </form>
    </main>
</body>

</html>