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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <title>Document</title>
    </head>

    <body>
        <?php
        include("Aside_Header/AsideBar.php");
        echo '<div class="px-1 my-container active-cont">';
        include("Aside_Header/Header.php");
        ?>
        <section class="row col-12 d-flex w-100">
            <div class=" row d-flex flex-row justify-content-between p-2 border-bottom">
                <p class="h5 fw-bold col-12 col-md-4 col-lg-6 col-xl-8">Students list</p>
                <div class="row col-12 col-md-8 col-lg-6 col-xl-4">
                    <i class='bx bxs-sort-alt btn text-info col-3'></i>
                    <!-- to add students  -->
                    <div class="btn btn-info col-9 d-none d-md-inline" data-bs-toggle="modal" data-bs-target="#add">ADD NEW STUDENTS</div>
                    <div class="btn btn-info col-9 d-md-none" data-bs-toggle="modal" data-bs-target="#add">ADD</div>
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <form id="addStud" class="modal-body" method="POST" enctype="multipart/form-data">
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
                                            <div class="error text-danger"></div>
                                        </div>
                                        <div>
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" type="email" name="email" id="email">
                                            <div class="error text-danger"></div>
                                        </div>
                                        <div>
                                            <label for="phone" class="form-label">Phone</label>
                                            <input class="form-control" type="text" name="phone" id="phone">
                                            <div class="error text-danger"></div>
                                        </div>
                                        <div>
                                            <label for="number" class="form-label">Number</label>
                                            <input class="form-control" type="number" name="number" id="number">
                                            <div class="error text-danger"></div>
                                        </div>
                                        <div>
                                            <label for="date" class="form-label">Date</label>
                                            <input class="form-control" type="date" name="date" id="date">
                                            <div class="error text-danger"></div>
                                        </div>
                                        <input class="btn btn-info mt-2" type="submit" value="Save" name="save">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="JavaScript/formValidationStudents.js"></script>
                    <?php
                    if (isset($_POST['save'])) {
                        include('PagesOperation/connexion.php');
                        $name_img = $_FILES['img']['name'];
                        $type = $_FILES['img']['type'];
                        $data = file_get_contents($_FILES['img']['tmp_name']);
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $number = $_POST['number'];
                        $date = $_POST['date'];
                        $sql = $mysql->prepare("INSERT INTO students (name,email,phone,number,date,name_img,type_img,data_img) VALUES ('$name','$email','$phone','$number',' $date','$name_img','$type',?)");
                        $sql->bindParam(1, $data);
                        $sql->execute();
                    }
                    ?>
                </div>

                <!-- to up_date students -->
                <!-- <?php
                        // $id = $_GET['id'];
                        // include('./connexion.php');
                        // $sql = $mysql->prepare("SELECT * FROM students WHERE  $id=id");
                        // $sql->execute();
                        // $row = $sql->fetch(PDO::FETCH_ASSOC);
                        ?> -->
                <!-- <div class="modal fade" id="up_date" tabindex="-1" aria-labelledby="up_dateStudents" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form class="modal-body" method="POST" enctype="multipart/form-data">
                                    <div class="d-flex">
                                        <h3 class="modal-title" id="up_dateStudents">UPDATE STUDENTS</h3>
                                        <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="img" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="img" id="img" accept=".jpg,.jpeg,.png">
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $row['phone'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="form-label">Number</label>
                                        <input class="form-control" type="number" name="number" id="number" value="<?php echo $row['number'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="date" class="form-label">Date</label>
                                        <input class="form-control" type="date" name="date" id="date" value="<?php echo $row['date'] ?>">
                                    </div>
                                    <input type="submit" value="Save" name="upDate">
                                </form>
                                <?php
                                // if (isset($_POST['upDate'])) {
                                //     $name_img = $_FILES['img']['name'];
                                //     $type = $_FILES['img']['type'];
                                //     $data = file_get_contents($_FILES['img']['tmp_name']);
                                //     $name = $_POST['name'];
                                //     $email = $_POST['email'];
                                //     $phone = $_POST['phone'];
                                //     $number = (int) $_POST['number'];
                                //     $date = $_POST['date'];
                                //     $sql = $mysql->prepare("UPDATE students SET name='$name',email='$email',phone='$phone',number='$number',date='$date',name_img='$name_img', type_img='$type',data_img=? WHERE id=$id");
                                //     $sql->bindParam(1, $data);
                                //     $sql->execute();
                                // }
                                ?>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="table-responsive">
                    <?php
                    echo "<table>";
                    echo "<tr>";
                    $thead = ["img" => "", "name" => "Name", "email" => "Email", "phone" => "Phone", "number" => "Enroll Number", "date" => "Date of admission", "modifier" => ""];
                    foreach ($thead as $key => $value) {
                        echo "<th class='head h-50'>$value</th>";
                    }
                    include('PagesOperation/connexion.php');
                    $sql = $mysql->prepare('SELECT * FROM students');
                    $sql->execute();
                    while ($students = $sql->fetch(PDO::FETCH_ASSOC)) :

                    ?>
                        <tr class="bg-white">
                            <td>
                                <?php echo "<img class='img' src='data:" . $students['type_img'] . ";base64," . base64_encode($students['data_img']) . "'>" ?>
                            </td>
                            <td>
                                <?php echo $students['name'] ?>
                            </td>
                            <td>
                                <?php echo $students['email'] ?>
                            </td>
                            <td>
                                <?php echo $students['phone'] ?>
                            </td>
                            <td>
                                <?php echo $students['number'] ?>
                            </td>
                            <td>
                                <?php echo $students['date'] ?>
                            </td>
                            <td>
                                <!-- <i class='bx bx-pencil btn text-info' data-bs-toggle="modal" data-bs-target="#up_date"></i> -->
                                <a href="PagesOperation/editStudent.php?id=<?php echo $students['id'] ?>" class='bx bx-pencil btn text-info'></a>
                                <a href="PagesOperation/deleteStudent.php?id=<?php echo $students['id'] ?>" class='bx bx-trash btn text-info'></a>
                            </td>
                        </tr>
                    <?php

                    endwhile;
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
            });
        </script>
    </body>

    </html>
<?php
} else {
    header('location:index.php');
}
?>