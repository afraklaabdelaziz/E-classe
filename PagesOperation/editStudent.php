<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add New Students</title>
</head>

<body class="d-flex justify-content-center align-items-center">
    <?php 
     $id = $_GET['id'];
     include('./connexion.php');
      $sql = $mysql->prepare("SELECT * FROM students WHERE  $id=id");
      $sql->execute();
      $row = $sql->fetch(PDO::FETCH_ASSOC);
    ?> 
    <form class="form-group col-4 mt-5" method="POST" >
        <div class="form-group">
            <label for="img" class="form-label">Image</label>
            <input class="form-control" type="file" name="img" id="img">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="<?php echo $row['name']?>">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $row['email']?>">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row['phone']?>">
        </div>
        <div class="form-group">
            <label for="number" class="form-label">Number</label>
            <input class="form-control" type="number" name="number" id="number" value="<?php echo $row['number']?>">
        </div>
        <div class="form-group">
            <label for="date" class="form-label">Date</label>
            <input class="form-control" type="date" name="date" id="date" value="<?php echo $row['date'] ?>" >
        </div>
        <input type="submit" value="Save" name="save">
    </form>
    <?php
    if (isset($_POST['save'])) {
        $data_input = array(
            $img = $_POST['img'],
            $name = $_POST['name'],
            $email = $_POST['email'],
            $phone = $_POST['phone'],
            $number = (int) $_POST['number'],
            $date = $_POST['date']  
        );
        $sql=$mysql->prepare("UPDATE students SET name='$name',email='$email',phone='$phone',number='$number',date='$date' WHERE id=$id");
        $sql->execute();
        header('location:../page-Students.php');
    }
    ?> 
</body>
<style>
</style>
</html>