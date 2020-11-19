<?php
session_start();

if ($_POST['pin'] == 'DMC7AzV7') {
    $_SESSION["logged"] = true;
    echo 'Zalogowano! Proszę czekać...';
    header("Location: control/index.php");
} else {
    $_SESSION["logged"] = false;
    echo 'Złe hasło!';
}
