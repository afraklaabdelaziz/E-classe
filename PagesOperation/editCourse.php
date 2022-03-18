<?php
session_start();
if (isset($_SESSION['user_email'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>Edit Course</title>
    </head>

    <body class=" body d-flex justify-content-center align-items-center">
        <?php
        $id = $_GET['id_c'];
        include('./connexion.php');
        $sql = $mysql->prepare("SELECT * FROM courses WHERE  $id=id_c");
        $sql->execute();
        $course = $sql->fetch(PDO::FETCH_ASSOC);
        ?>
        <form class="form-group col-11 col-sm-9 col-md-4 mt-5" method="POST">
            <h1>UPDATE COURSES</h1>
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $course['title'] ?>">
            </div>
            <div class="form-group">
                <label for="type" class="form-label">Type</label>
                <input class="form-control" type="text" name="type" id="type" value="<?php echo $course['type'] ?>">
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="<?php echo $course['price'] ?>">
            </div>
            <div class="form-group">
                <label for="duration" class="form-label">Duration</label>
                <input class="form-control" type="date" name="duration" id="duration" value="<?php echo $course['duration'] ?>">
            </div>
            <input class="mt-2 w-25" type="submit" value="Save" name="save">
        </form>
        <?php
        if (isset($_POST['save'])) {
            $title = $_POST['title'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $duration = $_POST['duration'];
            $sql = $mysql->prepare("UPDATE courses SET title='$title',type='$type',price='$price',duration='$duration' WHERE id_c=$id");
            $sql->execute();
            header('location:../courses.php');
        }
        ?>
    </body>
    <style>
    </style>

    </html>
<?php
} else {
    header('location:../index.php');
}
?>