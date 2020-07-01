<?php
$archivo[0] = $_POST['file1'];
$archivo[1] = $_POST['file2'];
$archivo[2] = $_POST['file3'];

foreach ($archivo as $key) {
	echo $key."<br>";
}