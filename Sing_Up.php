<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body class="d-flex justify-content-center d-flex align-items-center body">
    <div class="container d-flex bg-light align-items-center rounded-3 col-10 col-sm-8 col-md-8 col-lg-6 col-xl-4 p-4">
        <form id="form" class="w-100" method="POST">
            <h4 class="mx-5 px-2 title fw-bold">E-classe</h4>
            <h5 class="text-center pt-4 fw-bold">SING UP</h5>
            <p class="text-center text-muted">Create your account </p>
            <div class="form-group pt-4">
                <label for="name">User Name</label>
                <input class="form-control" name="user_name" type="text" placeholder="entre your User name" id="name">
                <div class="error text-danger"></div>
            </div>
            <div class="form-group pt-4">
                <label for="email">Email</label>
                <input class="form-control" name="email" type="text" placeholder="entre your email" id="email">
                <div class="error text-danger"></div>
            </div>
            <div class="form-group pt-3">
                <label for="pass">Password</label>
                <input class="form-control" name="pass" type="password" placeholder="entre your password" id="pass">
                <div class="error text-danger"></div>
            </div>
            <div class="form-group pt-3">
                <label for="passC">Confirm Password</label>
                <input class="form-control" name="pass_confirm" type="password" placeholder="Confirm your password" id="passC">
                <div class="error text-danger"></div>
            </div>
            <input type="submit" class="btn btn-info mt-3 form-control" name="sing_up" value="SING Up">
        </form>
    </div>
</body>
<script src="JavaScript/formValidation.js"></script>
<?php
if (isset($_POST['sing_up'])) {
    include('PagesOperation/connexion.php');
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $User = $mysql->prepare("INSERT INTO comptes (username,email,password) VALUES ('$user_name','$email','$password')");
    $User->execute();
    header('location:index.php');
}
?>

</html>