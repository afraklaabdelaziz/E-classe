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
    include ("AsideBar.php");
    echo '<div class="px-1 my-container active-cont">';
    include ("Header.php");
    ?>
     <section class="row col-12 d-flex w-100">
    <div class=" row d-flex flex-row justify-content-between p-2 border-bottom">
        <p class="h5 fw-bold col-12 col-md-4 col-lg-6 col-xl-8">Students list</p>
        <div class="row col-12 col-md-8 col-lg-6 col-xl-4">
            <i class='bx bxs-sort-alt btn text-info col-3'></i>
            <div class="btn btn-info col-9">ADD NEW STUDENTS</div>
        </div>
    </div>
   <div class="table-responsive">
            <?php
            echo "<table>";
            echo "<tr>";
            $thead=["img"=>"","name"=>"Name","email"=>"Email","phone"=>"Phone","number"=>"Enroll Number","date"=>"Date of admission","modifier"=>""];
            foreach($thead as $key=>$value){
            echo "<th class='head h-50'>$value</th>";
            }
            $tbody=array(["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"],
            ["img"=>'<img class="img p-2" src="Images/students.png">',"name"=>"Afrakla abdelaziz","email"=>"afraklaabdelaziz@gmail.com","phone"=>"0639616681","number"=>"12345678","date"=>"20/01/2022","modifier"=>"<i class='bx bx-pencil btn text-info'></i>
            <i class='bx bx-trash btn text-info'></i>"]);
            foreach($tbody as $key){
            echo "<tr class='bg-white'>";
            echo "<td>";
            echo $key["img"];
            echo "</td>";
            echo "<td>";
            echo $key["name"];
            echo "</td>";
            echo "<td>";
            echo $key["email"];
            echo "</td>";
            echo "<td>";
            echo $key["phone"];
            echo "</td>";
            echo "<td>";
            echo $key["number"];
            echo "</td>";
            echo "<td>";
            echo $key["date"];
            echo "</td>";
            echo "<td>";
            echo $key["modifier"];
            echo "</td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
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