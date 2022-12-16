<?php
$name = $_POST["name"];
$email = $_POST["email"];
$description = $_POST["description"];
$fileCount = count (glob ('*.txt'));
$newName = ( $fileCount + 1) . '.txt';
$file = fopen("$newName","w");
echo fwrite($file,"NAME: " . $name . " \r\n");
echo fwrite($file,"EMAIL: " . $email . " \r\n");
echo fwrite($file,"DESCRIPTION: " . $description . " \r\n");
fclose($file);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>