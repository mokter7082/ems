
<?php
//CONNECTION WITH DATABASE
$conn = mysqli_connect('localhost','root','','apsis_solutions');

if(isset($_POST['regi'])){
  $r_name = $_POST['name'];
  $r_email = $_POST['email'];
  $r_u_name = $_POST['u_name'];
  $r_pass = $_POST['password'];
  $r_date = $_POST['date'];
  $r_photo = explode('.',$_FILES['image']['name']);
  $r_photo = end($r_photo);
  $photo_name = $r_u_name.'.'.$r_photo;


  $email_check = mysqli_query($conn,"SELECT * FROM users WHERE email = '$r_email'");
  if(mysqli_num_rows($email_check)==0){
    $user_name_check = mysqli_query($conn,"SELECT * FROM users WHERE user_name = '$r_u_name'");
    if(mysqli_num_rows($user_name_check)==0){
      $submit_query = mysqli_query($conn,"INSERT INTO users(name,email,user_name,password,date,photo)VALUES('$r_name','$r_email','$r_u_name','$r_pass','$r_date','$photo_name')");
      if($submit_query){
        $succ = 'User registrtion successfull';
        move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$photo_name);
      }else {
        $wen = 'server hpoblem';
      }
    }else {
      $user_error = 'username already eixts';
    }
  }else {
    $email_error = 'email already eixts';
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
    <?php if(isset($succ)){ echo "<h4 class='text-success'>$succ</h4>"; } ?>
    <?php if(isset($wen)){ echo "<h4 class='text-success'>$wen</h4>"; } ?>
    <h2>User Registration From</h2>
    <div class="col-md-4">
    <hr></hr>
     <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="enter your name" required/>
        </div>
        <div class="form-group">
          <label for="">E_mail</label>
          <input type="email" name="email" class="form-control" placeholder="Please enter your valid email" required/>
          <?php if(isset($email_error)){
            echo "<p class='text-danger'>$email_error</p>";
          }?>
        </div>
        <div class="form-group">
          <label for="">User_name</label>
          <input type="text" name="u_name" class="form-control" placeholder="Please enter your user name" required/>
          <?php if(isset($u_name_error)){
            echo "<p class='text-danger'>$u_name_error</p>";
          }?>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required/>
        </div>
        <div class="form-group">
          <label for="">Date</label>
          <input type="date" name="date" class="form-control" required/>
        </div>
        <div class="form-group">
          <label for="">Photo</label>
          <input type="file" name="image" id="fileToUpload">
        </div>
        <div class="form-group" style="margin-bottom:0px;">
            <input type="submit" name="regi" class="btn btn-primary" value="Registration"/>
        </div>
              <p>If you have an account? Please <a href="logout.php">login</a></p>
      </form>
      <footer>
        <p>Copyright &copy 2020 - <?php echo date("Y"); ?> All Right Reserved</p>
      </footer>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
