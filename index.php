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
    <form action="PagesOperation/page_validation_login.php" class="w-100" method="POST">
      <h4 class="mx-5 px-2 title fw-bold">E-classe</h4>
      <h5 class="text-center pt-4 fw-bold">SING IN</h5>
      <p class="text-center text-muted">Entre your credentials to access your account </p>
      <?php
      if (isset($_GET['error'])) {   ?>
        <div class="alert alert-danger">
          <?php echo $_GET['error'];  ?>
        </div>
      <?php }; ?>

      <div class="form-group pt-4">
        <label>Email</label>
        <input class="form-control" name="email" type="email" value="<?php  if(isset($_COOKIE['user'])) echo $_COOKIE['user']?>" placeholder="entre your email">
      </div>
      <div class="form-group pt-3">
        <label>Password</label>
        <input class="form-control" name="pass" type="password" placeholder="entre your password" value="<?php if(isset($_COOKIE['user_p'])) echo $_COOKIE['user_p']?>">
      </div>
      <div>
        <input type="checkbox" id="check" name="check">
        <label for="check">remember me</label>
      </div>
      <input type="submit" class="btn btn-info mt-3 form-control" name="login" value=" SING IN">
      <div class="pt-3 text-muted">
        Forgot your password?
        <a class="text-info" href="#">Reset password</a>
      </div>
    </form>
  </div>
</body>

</html>