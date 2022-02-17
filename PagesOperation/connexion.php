<?php
 try {
    $mysql = new PDO("mysql:host=localhost;dbname=e_classe_db", 'root', 'afraklaab99');
  
} catch (PDOException $e) {
    echo "Failed :" . $e->getMessage();
}

?>
