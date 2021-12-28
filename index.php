<?php
session_start();
if(!isset($_SESSION['user_login'])){
  header('location: login.php');
}


 $conn = mysqli_connect('localhost','root','','apsis_solutions');
 $query = mysqli_query($conn,"SELECT * FROM users");
 $fetch = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>EMS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/ind_style.css" media="all" />
</head>
<body>
  <div class="container-fluid border">
    <div class="container">
      <div class="row">
        <div class="col-md-3 logo">
          <h4><a href="#">EMS</a></h4>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-7 menu text-right">
          <ul class="">
            <li><a href="#"><i class="fa fa-user"></i>Welcome <?= $fetch['name'];?></a></li>
            <li><a href="registration.php"><i class="fa fa-user-plus"></i>Add User</a></li>
            <li><a href="index.php?page=profile"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
          </ul>
        </div>
      </div>
   </div>
  </div>
  <!---2ns area--->

    <div class="container" style="min-height:600px;">
      <div class="row">
      <div class="col-md-3 dsb">
        <ul class="list-group">
            <a href="index.php?page=dashbord" class="list-group-item active"><i class="fa fa-dashboard"></i> Dashbord</a>
            <a href="index.php?page=add_employee" class="list-group-item"><i class="fa fa-user-plus"></i> Add Employee</a>
            <a href="index.php?page=all_emp" class="list-group-item"><i class="fa fa-users"></i> All Employee</a>
            <a href="index.php?page=all_users" class="list-group-item"><i class="fa fa-users"></i> All Users</a>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="contant">

         <?php
              @$page = $_GET['page'].'.php';
              //ERROR PROBLEM SOLF
              if(isset($_GET['page'])){
                $page = $_GET['page'].'.php';
              }else {
                $page = "dashbord.php";
              }

              //INCLUID PAGES
              if(file_exists($page)){
                include $page;
              }else {
                echo '<h1 class="text-danger">File not found</h1>';
              }

         ?>

    </div>
    </div>
    </div>
    </div>
    <!---FOOTER AREA--->
    <footer style="text-align:center; background:#54a0ff;margin-top:20px;padding:10px 0px;">
      <p>CopyRight &COPY: 2020 Employee Managment System. All Right Are Reserved</p>
    </footer>








    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
