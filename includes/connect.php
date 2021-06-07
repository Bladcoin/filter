<?php

$connect = mysqli_connect('localhost', 'root', '', 'cards');


if(!$connect) {
	die('Error to database');
}

?>