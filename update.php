 <?php
  $conn = mysqli_connect('localhost','root','','apsis_solutions');
 ?>


<h1 class="text-primary"><i class="fa fa-pencil-square-o"></i> Update Employee</h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i><a href="index.php?page=dashbord" style="text-decoration:none;"> Dashboard</a> </li>
      <li class="breadcrumb-item active" style="margin-left:20px;"><i class="fa fa-pencil"></i> Update Employee </li>
    </ol>
    <?php
        $u_id = base64_decode($_GET['id']);// base64_decode($_GET['id']);
        $u_query = mysqli_query($conn,"SELECT * FROM employee_info WHERE id='$u_id'");
        $u_fetch = mysqli_fetch_assoc($u_query);
        //print_r($u_fetch);
        if(isset($_POST['update'])){
         $id = $_POST['e_id'];
         $name = $_POST['name'];
         $e_email = $_POST['e_email'];
         $f_name = $_POST['f_name'];
         $m_name = $_POST['m_name'];
         $city = $_POST['city'];
         $designation = $_POST['dagination'];
         $phone = $_POST['phone'];
         $date = $_POST['date'];

      $ub_query = mysqli_query($conn,"UPDATE employee_info SET e_id ='$id', name ='$name', email ='$e_email', father_name ='$f_name', mother_name ='$m_name', city ='$city', designation ='$designation', contact ='$phone', date ='$date' WHERE id='$u_id'");
      if($ub_query){
        echo "<h3 class='text-success'>Your data has been updeded</h3>";
      }else{
        echo "<h3 class='text-danger'>Server Problem</h3>";
      }


        }

    ?>
<div class="add_employee">
  <div class="row">
    <div class="col-md-8">
      <!---success alert--->
       <?php if(isset($add)){echo "<h3 class='text-success'>$add</h3>";} ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Employee Id</label>
          <input type="text" name="e_id" class="form-control" placeholder="Employee ID" value="<?php echo $u_fetch['e_id'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Employee Name</label>
          <input type="text" name="name" class="form-control" placeholder="Employee Name" value="<?php echo $u_fetch['name'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Employee E_mail</label>
          <input type="email" name="e_email" class="form-control" placeholder="Employee Email" value="<?php echo $u_fetch['email'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Father Name</label>
          <input type="text" name="f_name" class="form-control" placeholder="Father Name" value="<?php echo $u_fetch['father_name'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Mother Name</label>
          <input type="text" name="m_name" class="form-control" placeholder="Mother Name" value="<?php echo $u_fetch['mother_name'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Home City</label>
          <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $u_fetch['city'];?>"/>
        </div>
        <div class="form-group">
          <select name="dagination" id="" class="form-control" required>
            <option value="">Designation</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="Operation Enginner">Operation Enginner</option>
            <option value="Project Manager">Project Manager</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Contact</label>
          <input type="tel" name="phone" class="form-control" placeholder="Phone" value="<?php echo $u_fetch['contact'];?>"/>
        </div>
        <div class="form-group">
          <label for="">Date</label>
          <input type="date" name="date" class="form-control" value="<?php echo $u_fetch['date'];?>"/>
        </div>
        <div class="form-group"  style="text-align:right;">
            <input type="submit" name="update" class="btn btn-info" value="Update"/>
        </div>
      </form>
    </div>
  </div>
</div>
