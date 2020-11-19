<?php
require_once '../lib/Parsedown.php'; // biblioteka parsedown od markdownu
$parsedown = new Parsedown();


$text = $_GET['markup'];
$File = "../../posts/" . $_GET['tytul'] . ".html";
$Handle = fopen($File, 'w');
$templatetop = file_get_contents("../../posts/templates/main.txt");
$templatebottom = file_get_contents("../../posts/templates/footer.txt");
$Data = $parsedown->text($text) . "\n";
$finalized = $templatetop . $Data . $templatebottom;

fwrite($Handle, $finalized);
fclose($Handle);

// JSON

$existing = file_get_contents("../../api/posts.json");
$escaped = substr($existing, 1);
$JsonFilename = "posts/" . $_GET['tytul'] . ".html";

$JsonHandle = fopen("../../api/posts.json", 'w');

$JsonData = '[
    {
        "title": "' . $_GET['tytul'] . '",
        "descritpion": "' . substr($_GET['opis'], 0, 30) . '",
        "filename": "' . $JsonFilename . '",
        "obrazek": "' . $_GET['linkimg'] . '"
    },';
fwrite($JsonHandle, $JsonData . $escaped);


// JSON - Lastest posts
$lastestPosts = $escaped;
$lastJsonFile = "../../api/lastposts.json";
$lastJsonHandle = fopen($lastJsonFile, 'w');
$lines = explode("\n", $lastestPosts);
$newlines = "";
for ($i=0; $i < 79; $i++) { 
    $newlines .= $lines[$i];
}
$newlines = substr($newlines, 0, -1);

fwrite($lastJsonHandle, "[" . $newlines . "]");