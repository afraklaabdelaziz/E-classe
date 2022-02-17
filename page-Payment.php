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
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Page Payment E-classe </title>
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
                <p class="h5">Payment Details</p>
                <div><i class='bx bxs-sort-alt btn text-info col-1'></i>
                <div class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add">addPayment</div>
                </div>
            </div>

            <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <form class="modal-body" method="POST">
            <div class="d-flex">
            <h3 class="modal-title" id="addStudents">ADD NEW PAYMENT</h3>
            <i class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
        <div>
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div>
            <label for="payment_schedule" class="form-label">Payment Schedule</label>
            <input class="form-control" type="text" name="payment_schedule" id="payment_schedule">
        </div>
        <div>
            <label for="bill_number" class="form-label">Bill Number</label>
            <input class="form-control" type="number" name="bill_number" id="bill_number">
        </div>
        <div>
            <label for="amount_paid" class="form-label">Amount Paid</label>
            <input class="form-control" type="text" name="amount_paid" id="amount_paid">
        </div>
        <div>
            <label for="balance_amount" class="form-label">Balance Amount</label>
            <input class="form-control" type="text" name="balance_amount" id="balance_amount">
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
         if(isset($_POST['save'])){
         include ('PagesOperation/connexion.php');   
         $name = $_POST['name'];
         $payment_schedule = $_POST['payment_schedule'];
         $bill_number = $_POST['bill_number'];
         $amount_paid = $_POST['amount_paid'];
         $balance_amount = $_POST['balance_amount'];
         $date = $_POST['date'];
         $sql = $mysql->prepare("INSERT INTO payment_details (name,payment_schedule,bill_number,amount_paid,balance_amount,date) VALUES ('$name','$payment_schedule','$bill_number','$amount_paid','$balance_amount','$date')");
         $sql->execute();
        }
    ?> 
             <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                <?php
                $thead = ["name" => "Name", "pay" => "Payment Schedule", "number" => "Bill Number", "paid" => "Amount Paid", "balance" => "Balance amount", "date" => "Date", "vue" => ""];
                foreach ($thead as $key => $value) {
                    
                    echo "<th class='head'>$value</th>";
                }
                
                  include('PagesOperation/connexion.php');
                  $sql=$mysql->prepare("SELECT * FROM payment_details");
                  $sql->execute();
                  while($payment = $sql->fetch(PDO::FETCH_ASSOC)):
                ?>
                    </tr>
                     <tr>
                         <td><?php echo $payment['name'] ?></td>
                         <td><?php echo $payment['payment_schedule'] ?></td>
                         <td><?php echo $payment['bill_number'] ?></td>
                         <td><?php echo $payment['amount_paid'] ?></td>
                         <td><?php echo $payment['balance_amount'] ?></td>
                         <td><?php echo $payment['date'] ?></td>
                         <td><i class='bx bxs-show text-info'></i></td>
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
 } else{
     header('location:index.php');
 }
 ?>