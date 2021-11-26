<?php


$data = file_get_contents("./jurnal.php");



$text = str_replace('"', "'", $data);


echo "<textarea> $text </textarea>"

?>