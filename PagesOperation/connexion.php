<?php
 try {
    $mysql = new PDO("mysql:host=ec2-34-194-171-47.compute-1.amazonaws.com;port=5432;dbname=d8qilure9mt35u", 'rccruoumxxiilw', '62f0648d507ba0c5262fe889bda78f55575a524bc3d2933fed877c41cf1539c6');
} catch (PDOException $e) {
    echo "Failed :" . $e->getMessage();
}
?>
