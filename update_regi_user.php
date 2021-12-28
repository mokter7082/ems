<?php
 $conn = mysqli_connect('localhost','root','','apsis_solutions');
?>

<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i> Update User</h1>
   <ol class="breadcrumb">
       <li><i class="fa fa-dashboard"></i><a href="index.php?page=dashbord" style="text-decoration:none;"> Dashboard</a> </li>
     <li class="breadcrumb-item active" style="margin-left:20px;"><i class="fa fa-pencil"></i> Update User </li>
   </ol>
   <?php
    $edit_query = mysqli_query($conn,"SELECT * FROM users");
    $edit_fetch = mysqli_fetch_assoc($edit_query);
    foreach ($edit_query as $u_value) {
      // code...
    }
     $u_id = $u_value['id'];

    if(isset($_POST['edit_user'])){
      $name = $_POST['name'];
      $u_name = $_POST['user_name'];
      $email = $_POST['email'];
      $date = $_POST['date'];
    //  print_r($_POST);
    $query = mysqli_query($conn,"UPDATE users SET name ='$name',user_name ='$u_name',email ='$email',date ='$date' WHERE id ='$u_id'");
     if($query){
       echo "<h3 class='text-success'>Update Success</h3>";
     }else {
       echo 'not';
     }

    }




   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="container"><br>
    <h2>User Registration From</h2>
    <div class="col-md-6">
    <hr></hr>
     <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="enter your name" value="<?php echo $u_value['name'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="user_name" class="form-control" placeholder="Please enter your valid email" value="<?php echo $u_value['user_name'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Please enter your user name" value="<?php echo $u_value['email'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Date</label>
          <input type="date" name="date" class="form-control" value="<?php echo $u_value['date'];?>"/>
        </div>
        <div class="form-group" style="margin-bottom:0px;">
            <input type="submit" name="edit_user" class="btn btn-primary" value="Update"/>
        </div>
      </form>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
