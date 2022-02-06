<?php 
$id=$_GET['id']; 
include('./connexion.php');
$sql=$mysql->prepare("DELETE FROM students WHERE id=$id");
$sql->execute();
header('location:../page-Students.php')
?>