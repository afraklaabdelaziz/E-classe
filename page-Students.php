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
            <div class="btn btn-info col-9 d-none d-md-inline" data-bs-toggle="modal" data-bs-target="#add">ADD NEW STUDENTS</div>
            <div class="btn btn-info col-9 d-md-none" data-bs-toggle="modal" data-bs-target="#add">ADD</div>
            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <form class="modal-body" method="POST">
            <div class="d-flex">
            <h3 class="modal-title" id="addStudents">ADD NEW STUDENT</h3>
            <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <div>
            <label for="img" class="form-label">Image</label>
            <input class="form-control" type="file" name="img" id="img">
            </div>
            <div>
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name">
            </div>
            <div>
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="email">
         </div>
        <div>
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="number" class="form-label">Number</label>
            <input class="form-control" type="number" name="number" id="number">
        </div>
        <div>
            <label for="date" class="form-label">Date</label>
            <input class="form-control" type="date" name="date" id="date">
        </div>
        <input class="btn btn-info mt-2" type="submit" value="Save" name="save">
    </form>
    </div>
    </div>
    </div>
    </div>
    <?php
    if (isset($_POST['save'])) {
        $data = file_get_contents('Data_Students.json');
        $data = json_decode($data, true);
        $Student_add = array(
            'img' => $_POST['img'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'number' => (int) $_POST['number'],
            'date' => $_POST['date']

        );
        $data[] = $Student_add;
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('Data_Students.json', $data);
        echo "<script>
          window.location.href='page-Students.php';
          </script>";
    }
    ?> 
    </div>
   <div class="table-responsive">
            <?php
            echo "<table>";
            echo "<tr>";
            $thead=["img"=>"","name"=>"Name","email"=>"Email","phone"=>"Phone","number"=>"Enroll Number","date"=>"Date of admission","modifier"=>""];
            foreach($thead as $key=>$value){
            echo "<th class='head h-50'>$value</th>";
            }
            $data = file_get_contents('Data_Students.json');
            $data_students= json_decode($data,true);
            $index = 0;
            foreach($data_students as $key): 
            ?>
            <tr class="bg-white">
            <td>
            <img class='img p-2' src=" Images/<?php echo $key['img']?>">
            </td>    
            <td>
            <?php echo $key['name']?>      
            </td>
            <td>
            <?php echo $key['email']?>
            </td>
            <td>
            <?php echo $key['phone']?>
            </td>
            <td>
            <?php echo $key['number']?>
            </td>
            <td>
            <?php echo $key['date']?>
            </td>
            <td>
            <a href="edit_student.php?id=<?php echo $index?>" class='bx bx-pencil btn text-info'></a>
            <a href="Delete_students.php?id=<?php echo $index?>" class='bx bx-trash btn text-info'></a>
            </td>
            </tr>
            <?php
            $index++;
             endforeach;
             ?>
            </table>  
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