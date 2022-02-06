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
    <title>Page Courses E-classe </title>
</head>

<body>
    <main>
        <?php
        include("AsideBar.php");
        echo "<div class=\"px-1 my-container active-cont\">";
        include("Header.php");
        ?>
        <section class="row col-12 d-flex w-100">
            <div class="d-flex flex-row justify-content-between p-2 border-bottom">
                <p class="h5">List courses</p>
                <div><i class='bx bxs-sort-alt btn text-info col-1'></i>
                <div class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add">add Course</div>
                </div>
            </div>

            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <form class="modal-body" method="POST">
            <div class="d-flex">
            <h3 class="modal-title" id="addStudents">ADD NEW COURSE</h3>
            <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
        <div>
            <label for="title" class="form-label">Title</label>
            <input class="form-control" type="text" name="title" id="title">
        </div>
        <div>
            <label for="type" class="form-label">Type</label>
            <input class="form-control" type="text" name="type" id="type">
        </div>
        <div>
            <label for="price" class="form-label">Price</label>
            <input class="form-control" type="text" name="price" id="price">
        </div>
        <div>
            <label for="duration" class="form-label">Duration</label>
            <input class="form-control" type="date" name="duration" id="duration">
        </div>
        <input class="btn btn-info mt-2" type="submit" value="Save" name="save">
    </form>
    </div>
    </div>
    </div>
    </div> 
    <?php 
         if(isset($_POST['save'])){
         include ('dataBase/connexion.php');   
         $title = $_POST['title'];
         $type = $_POST['type'];
         $price = $_POST['price'];
         $duration = $_POST['duration'];
         $sql = $mysql->prepare("INSERT INTO courses (title,type,price,duration) VALUES ('$title','$type','$price','$duration')");
         $sql->execute();
        }
    ?> 
             <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                <?php
                $thead = ["title" => "Title", "type" => "Type", "price" => "Price", "duration" => "Duration","up" => ""];
                foreach ($thead as $key => $value) {
                    
                    echo "<th class='head'>$value</th>";
                }
                
                  include('dataBase/connexion.php');
                  $sql=$mysql->prepare("SELECT * FROM courses");
                  $sql->execute();
                  while($courses = $sql->fetch(PDO::FETCH_ASSOC)):
                ?>
                    </tr>
                     <tr>
                         <td><?php echo $courses['title'] ?></td>
                         <td><?php echo $courses['type'] ?></td>
                         <td><?php echo $courses['price'] ?></td>
                         <td><?php echo $courses['duration'] ?></td>
                        <td> 
                        <a href="dataBase/editCourse.php?id_c=<?php echo $courses['id_c']?>" class='bx bx-pencil btn    text-info'></a>
                        <a href="dataBase/deleteCourse.php?id_c=<?php echo $courses['id_c']?>" class='bx bx-trash btn
                        text-info'></a>
                        </td>
                     </tr>
                <?php 
                endwhile;
                ?>
                </table>
                

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
        });
    </script>
</body>

</html>