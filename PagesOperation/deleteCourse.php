<?php 
 $id=$_GET['id_c'];
 include ('connexion.php');
$sql=$mysql->prepare("DELETE FROM courses WHERE id_c=$id");
$sql->execute();
header('location:../courses.php');
?>