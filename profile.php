<?php $conn = mysqli_connect('localhost','root','','apsis_solutions');?>
<h1 class="text-primary"><i class="fa fa-user"></i> User Profile</h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i><a href="index.php?page=dashbord" style="text-decoration:none;"> Dashboard</a> </li>
      <li class="breadcrumb-item active" style="margin-left:20px;"><i class="fa fa-user"></i> Profile</li>
    </ol>
    <?php

     $session_user = $_SESSION['user_login'];
     $user_db = mysqli_query($conn,"SELECT * FROM users WHERE user_name='$session_user'");
     $user_fetch = mysqli_fetch_assoc($user_db);
    foreach ($user_db as $value) {
     //$value['id'];
      //exit();
    }
     $p_id = $value['id'];



    ?>

<div class="row">
  <div class="col-md-5">
    <table class="table table-bordered">
      <tr>
          <td>User ID</td>
          <td><?php echo $value['id'];?></td>
      </tr>
      <tr>
          <td>Name</td>
          <td><?php echo $value['name'];?></td>
      </tr>
      <tr>
          <td>User Name</td>
          <td><?php echo $value['user_name'];?></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><?php echo $value['email'];?></td>
      </tr>
      <tr>
          <td>SignUp Date</td>
          <td><?php echo $value['date'];?></td>
      </tr>
      <tr>
          <td class="text-center" colspan="2">
            <a href="index.php?page=update_regi_user">
              <input type="submit" name="edit_profile" value="Update Profile" class="btn btn-primary"/>
            </a>
          </td>
      </tr>
    </table>
   </div>

  <div class="col-md-6">
     <a href="">
        <img src="images/<?php echo $user_fetch['photo']; ?>" type="file" alt="" style="height:150px;width:150px;">
     </a>
     <?php
     //upload photo area
        if(isset($_POST['upload'])){
          $tmp = $_FILES['photo']['tmp_name'];
          $u_photo = explode('.',$_FILES['photo']['name']);
          $end_photo = end($u_photo);
          $photo_name = $session_user.'.'.$end_photo;

          $profile_update = mysqli_query($conn,"UPDATE `users` SET `photo`= '$photo_name' WHERE `id` ='$p_id'");
          if($profile_update){
             move_uploaded_file($tmp,'images/'.$photo_name);
          }
        }
     ?>
     <form action="" method="post" enctype="multipart/form-data">
       <label for="" class="font-weight-bold">Profile Picture</label><br>
       <input type="file" name="photo" required><br>
       <input type="submit" name="upload" value="Upload" class="btn btn-info btn-sm" style="margin-top:05px;">
     </form>
  </div>
</div>
