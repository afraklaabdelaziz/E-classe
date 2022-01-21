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
    <div class="d-flex flex-row justify-content-between p-2 border-bottom">
        <p class="h5 col-11">Payment Details</p>
        <i class='bx bxs-sort-alt btn text-info col-1'></i>
    </div>
   <div class="table-responsive">
        <?php
        echo "<table>";
        echo "<tr>";
        $thead=["name"=>"Name","pay"=>"Payment Schedule","number"=>"Bill Number","paid"=>"Amount Paid","balance"=>"Balance amount","date"=>"Date","vue"=>""];
        foreach($thead as $key=>$value){
        echo "<th class='head h-50'>$value</th>";
        }
        $tbody=array(
        array("name"=>"abdelaziz","pay"=>"First","number"=>"123456","paid"=>"100,000","balance"=>"500,000","date"=>"21/01/2022"),
        array("name"=>"abdelaziz","pay"=>"First","number"=>"123456","paid"=>"100,000","balance"=>"500,000","date"=>"21/01/2022"),
        array("name"=>"abdelaziz","pay"=>"First","number"=>"123456","paid"=>"100,000","balance"=>"500,000","date"=>"21/01/2022"),
        array("name"=>"abdelaziz","pay"=>"First","number"=>"123456","paid"=>"100,000","balance"=>"500,000","date"=>"21/01/2022")
        );
        foreach($tbody as $key):
        echo "<tbody class=\"bg-white\">";
            echo "<td>";
            echo $key["name"];
            echo "</td>";
            echo "<td>";
            echo $key["pay"];
            echo "</td>";
            echo "<td>";
            echo $key["number"];
            echo "</td>";
            echo "<td>";
            echo $key["paid"];
            echo "</td>";
            echo "<td>";
            echo $key["balance"];
            echo "</td>";
            echo "<td>";
            echo $key["date"];
            echo "</td>";
            echo "<td>";
            echo "<i class='bx bxs-show text-info'></i>";
            echo "</td>";
        echo "</tbody>";

            // echo "<tr class='bg-white'>";
            // echo "<td>";
            // echo $key["name"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["pay"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["number"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["paid"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["balance"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["date"];
            // echo "</td>";
            // echo "<td>";
            // echo $key["vue"];
            // echo "</td>";
            // echo "</tr>";
        endforeach;
        echo "</table>"
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