<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Login E-classe</title>
</head>
<body>
  <main  class="d-flex justify-content-center d-flex align-items-center body">
    <div  class=" d-flex bg-light align-items-center rounded-3 col-9 col-sm-7 col-md-7 col-lg-4 col-xlg-3 p-4">
        <form class="form-group w-100">
            <p class="mx-3 px-2 title fw-bold h4">E-classe</p>
            <p class="text-center pt-4 fw-bold h5">SING IN</p>
            <p class="text-center text-muted">Entre your credentials to access your account </p>
            <div class="form-group pt-4">
                <label>Email</label>
                <input class="form-control" type="email" placeholder="entre your email">
            </div>
          <div class="form-group pt-3">
            <label>Password</label>
            <input class="form-control " type="password" placeholder="entre your password">
          </div>
          <a class="btn btn-info mt-3 w-100" href="page-Acceuill.php">
          SING IN
          </a>
        <div class="fs pt-3 text-muted"> 
            Forgot your password? 
            <a class="text-info" href="#">Reset password</a>
        </div>
     </form>
   </div>
   </main>
</body>
</html>