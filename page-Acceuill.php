<?php 
session_start();
if(isset($_SESSION['user_email'] )){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <?php
    include ("Aside_Header/AsideBar.php");
    echo '<div class="px-1 my-container active-cont">';
    include ("Aside_Header/Header.php");
    include("PagesOperation/connexion.php");
    $students=$mysql->prepare('SELECT COUNT(*) as numberS  FROM students');
    $students->execute();
    $nStudents= $students->fetch(PDO::FETCH_ASSOC);
    $courses=$mysql->prepare('SELECT COUNT(*) as numberC  FROM courses');
    $courses->execute();
    $nCourses= $courses->fetch(PDO::FETCH_ASSOC);
    $payment=$mysql->prepare('SELECT SUM(balance_amount) as totalP FROM payment_details');
    $payment->execute();
    $tpayment= $payment->fetch(PDO::FETCH_ASSOC);
    ?>
      <section class=" m-2 row col-11 d-flex">
    <div class=" m-1 col-12 col-xl-2 col-md-4 div1 d-flex flex-column">
        <i class='bx bxs-graduation text-info'></i>
       <span>Students</span>
       <p class="h2 text-end m-2"><?php echo $nStudents['numberS']?></p>
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2 div2 d-flex flex-column">
        <i class='bx bx-bookmark'></i>
        <span>Course</span>
        <p class="h2 text-end m-2"><?php echo $nCourses['numberC']?></p>
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2    div3 d-flex flex-column">
        <i class='bx bx-dollar'></i>
        <span>Payment</span>
        <p class=" h4 text-end m-2"><?php echo $tpayment['totalP']?><span class="h6">DHS</span></p> 
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2 div4 d-flex flex-column">
        <i class='bx bx-user taille' ></i>
        <span>Users</span>
        <p class="text-end m-2 h2">3</p>
    </div>
</section>
</div>
<script>
    var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
        });</script>
</body>
</html>
<?php 
 } else{
     header('location:index.php');
 }
 ?>