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
    <title>Page Acceuill E-classe </title>
</head>
<body>
    <main>
    <?php
    include ("AsideBar.php");
    echo '<div class="px-1 my-container active-cont">';
    include ("Header.php");
    ?>
      <section class=" row col-12 d-flex ">
    <div class=" m-2 col-12 col-xl-2 col-md-4 div1 d-flex flex-column">
        <i class='bx bxs-graduation text-info'></i>
       <span>Students</span>
       <p class="h2 text-end m-2">234</p>
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2 div2 d-flex flex-column">
        <i class='bx bx-bookmark'></i>
        <span>Course</span>
        <p class="h2 text-end m-2">234</p>
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2 div3 d-flex flex-column">
        <i class='bx bx-dollar'></i>
        <span>Payment</span>
        <p class=" h4 text-end m-2">550.00
            <span class="h6">DHS</span>
        </p> 
    </div>
    <div class="m-2 col-12 col-md-4 col-xl-2 div4 d-flex flex-column">
        <i class='bx bx-user' ></i>
        <span>Users</span>
        <p class="text-end m-2 h2">3</p>
    </div>
</section>
</div>
</main>
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