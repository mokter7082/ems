 <?php
session_start();
if(isset($_SESSION['user_login'])){
  header('location: index.php');
}
//CONNECTION WITH DATABASE
$conn = mysqli_connect('localhost','root','','apsis_solutions');


if(isset($_POST['submit'])){
   $u_name = $_POST['user_name'];
   $u_pass = $_POST['password'];


 $user_check = mysqli_query($conn,"SELECT * FROM users WHERE user_name = '$u_name'");
if(mysqli_num_rows($user_check)> 0 ){
  $row = mysqli_fetch_assoc($user_check);
   if($row['password'] == $u_pass){
     $_SESSION['user_login'] = $u_name;
     header('location: index.php');
   }else {
     $p_error = 'Password is incorrect';
   }
}else {
  $u_error = 'Username is incorrect';
}
 //print_r($query);

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
  <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div class="container animated shake"><br>
  <h2 class="text-center">Employee Memagment Syatem</h2><br>
  <div class="row">
    <div class="col-sm-4 offset-sm-4">
      <h3 class="text-center">Admin Login From</h3>
      <form action="" method="post">
        <div class="form-group">
          <label for="">User name</label>
          <input type="text" name="user_name" class="form-control" required/>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" required/>
        </div>
        <div class="form-group">
            <a href="">Back</a>
            <input type="submit" name="submit" class="btn btn-info" value="Login" style="margin-left:230px;"/>
        </div>
      </form>
      <?php if(isset($p_error)){ echo "<p class='alert alert-danger'>$p_error</p>";}?>
      <?php if(isset($u_error)){ echo "<p class='alert alert-danger'>$u_error</p>";}?>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
