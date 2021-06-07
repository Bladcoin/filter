<?php 


require_once 'connect.php';

$img = $_POST['img'];
$title = $_POST['title'];
$category = $_POST['category'];
$subtitle = $_POST['subtitle'];

mysqli_query($connect, "INSERT INTO `card` (`id`, `img`, `title`, `category`, `subtitle`) VALUES (NULL, '$img', '$title', '$category', '$subtitle')");



header('Location: ../index.php');



?>