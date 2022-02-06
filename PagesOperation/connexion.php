<?php
 try {
    $mysql = new PDO("mysql:host=127.0.0.1;port=3306;dbname=e_classe_db", 'root', 'afraklaab99');
} catch (PDOException $e) {
    echo "Failed :" . $e->getMessage();
}
?>
