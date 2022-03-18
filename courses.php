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
        <title>Page Courses E-classe </title>
    </head>

    <body>
        <main>
            <?php
            include("Aside_Header/AsideBar.php");
            echo "<div class=\"px-1 my-container active-cont\">";
            include("Aside_Header/Header.php");
            ?>
            <section class="row col-12 d-flex w-100">
                <div class="d-flex flex-row justify-content-between p-2 border-bottom">
                    <p class="h5">List courses</p>
                    <div><i class='bx bxs-sort-alt btn text-info col-1'></i>
                        <!-- to add courses -->
                        <div class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add">add Course</div>
                    </div>
                </div>
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addCourses" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form id="addCourse" class="modal-body" method="POST">
                                    <div class="d-flex">
                                        <h3 class="modal-title" id="addCourses">ADD NEW COURSE</h3>
                                        <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                                    </div>
                                    <div>
                                        <label for="title" class="form-label">Title</label>
                                        <input class="form-control" type="text" name="title" id="title">
                                        <div class="error text-danger"></div>
                                    </div>
                                    <div>
                                        <label for="type" class="form-label">Type</label>
                                        <input class="form-control" type="text" name="type" id="type">
                                        <div class="error text-danger"></div>
                                    </div>
                                    <div>
                                        <label for="price" class="form-label">Price</label>
                                        <input class="form-control" type="text" name="price" id="price">
                                        <div class="error text-danger"></div>
                                    </div>
                                    <div>
                                        <label for="duration" class="form-label">Duration</label>
                                        <input class="form-control" type="date" name="duration" id="duration">
                                        <div class="error text-danger"></div>
                                    </div>
                                    <input class="btn btn-info mt-2" type="submit" value="Save" name="save">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="JavaScript/formValidationCourse.js"></script>
                <?php
                if (isset($_POST['save'])) {
                    include('PagesOperation/connexion.php');
                    $title = $_POST['title'];
                    $type = $_POST['type'];
                    $price = $_POST['price'];
                    $duration = $_POST['duration'];
                    $sql = $mysql->prepare("INSERT INTO courses (title,type,price,duration) VALUES ('$title','$type','$price','$duration')");
                    $sql->execute();
                }
                ?>

                <!-- to up-date courses -->
                <?php
                // include('PagesOperation/connexion.php');
                // $id = $_SESSION['id_c'];
                // echo ($id);
                // $sql = $mysql->prepare("SELECT * FROM courses WHERE  id_c = $id");
                // $sql->execute();
                // $course = $sql->fetch(PDO::FETCH_ASSOC);
                ?>
                <!-- <div class="modal fade" id="upDate" tabindex="-1" aria-labelledby="upDateCourses" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form class="modal-body" method="POST">
                                    <div class="d-flex">
                                        <h3 class="modal-title" id="upDateCourses">UPDATE COURSE</h3>
                                        <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="title" class="form-label">Title</label>
                                        <input class="form-control" type="text" name="title" id="title" value="<?php echo $course['title'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="form-label">Type</label>
                                        <input class="form-control" type="text" name="type" id="type" value="<?php echo $course['type'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="form-label">Price</label>
                                        <input class="form-control" type="text" name="price" id="price" value="<?php echo $course['price'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="duration" class="form-label">Duration</label>
                                        <input class="form-control" type="date" name="duration" id="duration" value="<?php echo $course['duration'] ?>">

                                    </div>
                                    <input type="submit" value="Save" name="update">
                                </form> -->
                <?php
                // if (isset($_POST['update'])) {
                //     $title = $_POST['title'];
                //     $type = $_POST['type'];
                //     $price = $_POST['price'];
                //     $duration = $_POST['duration'];
                //     $sql = $mysql->prepare("UPDATE courses SET title='$title',type='$type',price='$price',duration='$duration' WHERE id_c=$id");
                //     $sql->execute();
                // }
                ?>
                <!-- </div>
                        </div>
                    </div>
                </div> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <?php
                            $thead = ["title" => "Title", "type" => "Type", "price" => "Price", "duration" => "Duration", "up" => ""];
                            foreach ($thead as $key => $value) {
                                echo "<th class='head'>$value</th>";
                            }
                            include('PagesOperation/connexion.php');
                            $sql = $mysql->prepare("SELECT * FROM courses");
                            $sql->execute();
                            while ($courses = $sql->fetch(PDO::FETCH_ASSOC)) :
                                $_SESSION['id_c'] = $courses['id_c'];
                            ?>
                        </tr>
                        <tr>
                            <td><?php echo $courses['title'] ?></td>
                            <td><?php echo $courses['type'] ?></td>
                            <td><?php echo $courses['price'] ?></td>
                            <td><?php echo $courses['duration'] ?></td>
                            <td>
                                <!-- <i class='bx bx-pencil btn text-info' data-bs-toggle="modal" data-bs-target="#upDate"></i> -->
                                <a href="PagesOperation/editCourse.php?id_c=<?php echo $courses['id_c'] ?>" class='bx bx-pencil btn    text-info'></a>
                                <a href="PagesOperation/deleteCourse.php?id_c=<?php echo $courses['id_c'] ?>" class='bx bx-trash btn
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
<?php
} else {
    header('location:index.php');
}
?>