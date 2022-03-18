   <aside id="sidebar" class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column">
    <div class="h-25 d-flex flex-column align-items-center">
    <p class="title fw-bold h5">E-classe</p>
    <div class="d-flex flex-column align-items-center mt-5">
    <img class="rounded-circle w-50" src="Aside_Header/abdelaziz.jpg" alt="">
   <span class="text-center"> <?php echo $_SESSION['user_name'] ?></span>
   <span class="text-info">admin</span>
   </div>
    </div>
    <div class="d-flex flex-column justify-content-around h-75 col-12">
    <ul class="list-group col-12 d-flex flex-column align-items-center mt-5" id="list-tab" role="tablist">
    <li class=" list-group list-group-item-action">
    <a class="btn" href="page-Acceuill.php">
       <i class="bx bx-home" ></i>
       <span class="fw-bold">Home</span>
    </a>
   </li>
   <li class=" list-group">
   <a class="btn mt-2 " href="courses.php">
   <i class="bx bx-bookmark"></i>
  <span class="fw-bold">Courses</span>
   </a>
   </li>
   <li class="list-group active">
   <a class="btn mt-2" href="page-Students.php">
   <i class="bx bxs-graduation"></i>
  <span class="fw-bold">Students</span>
    </a>
    <a class="btn mt-2" href="page-Payment.php">
   <i class="bx bx-dollar"></i>
  <span class="fw-bold">Payment</span>
   </a>
   </li>
   <li class="list-group">
    <a class="btn mt-2" href="">
   <i class="bx bxs-report" ></i>
  <span class="fw-bold mx-2">Report</span>
</a>
</li>
<li class="list-group">
<a class=" btn mt-2" href="">
   <i class="bx bxs-cog"></i>
  <span class="fw-bold mx-2">Setting</span>
</a>
</li>
</ul>
<div class="list-group">
<a class=" btn mt-2" href="PagesOperation/logout.php">
<i class="bx bx-log-out"></i>
 <span class="fw-bold">Logout</span>
</a>
</div>
</div>
</aside> 
