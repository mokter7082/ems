 <?php
  $conn = mysqli_connect('localhost','root','','apsis_solutions');
 ?>


<h1 class="text-primary"><i class="fa fa-user-plus"></i> Add Employee <small class="text-body">Add new Employee</small></h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i><a href="index.php?page=dashbord" style="text-decoration:none;"> Dashboard</a> </li>
      <li class="breadcrumb-item active" style="margin-left:20px;"><i class="fa fa-user-plus"></i> Add Employee </li>
    </ol>
   <?php
   if(isset($_POST['add_employee'])){
    $id = $_POST['e_id'];
    $name = $_POST['name'];
    $e_email = $_POST['e_email'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $city = $_POST['city'];
    $designation = $_POST['dagination'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $photo_exp = explode('.',$_FILES['photo']['name']);
    $photo_end = end($photo_exp);
    $photo_name = $id.'.'.$photo_end;
    $temp = $_FILES['photo']['tmp_name'];


    $query = mysqli_query($conn,"INSERT INTO employee_info(e_id,name,email,father_name,mother_name,city,designation,contact,date,photo)VALUES('$id','$name','$e_email','$f_name','$m_name','$city','$designation','$phone','$date','$photo_name')");
    if($query){
      $add = "Employee is added !";
      //UPLOAD IMAGE TO FOLDER
       move_uploaded_file($temp,"employee_images/".$photo_name);
    }else {
      echo "rong";
    }


   }



   ?>
<h2>Please Enter employee info</h2>
<div class="add_employee">
  <div class="row">
    <div class="col-md-8">
      <!---success alert--->
       <?php if(isset($add)){echo "<h3 class='text-success'>$add</h3>";} ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="">Employee Id</label>
          <input type="text" name="e_id" class="form-control" placeholder="Employee ID"/>
        </div>
        <div class="form-group">
          <label for="">Employee Name</label>
          <input type="text" name="name" class="form-control" placeholder="Employee Name"/>
        </div>
        <div class="form-group">
          <label for="">Employee E_mail</label>
          <input type="email" name="e_email" class="form-control" placeholder="Employee Email"/>
        </div>
        <div class="form-group">
          <label for="">Father Name</label>
          <input type="text" name="f_name" class="form-control" placeholder="Father Name"/>
        </div>
        <div class="form-group">
          <label for="">Mother Name</label>
          <input type="text" name="m_name" class="form-control" placeholder="Mother Name"/>
        </div>
        <div class="form-group">
          <label for="">Home City</label>
          <input type="text" name="city" class="form-control" placeholder="City"/>
        </div>
        <div class="form-group">
          <select name="dagination" id="" class="form-control">
            <option value="">Designation</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="Operation Enginner">Operation Enginner</option>
            <option value="Project Manager">Project Manager</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Contact</label>
          <input type="tel" name="phone" class="form-control" placeholder="Phone"/>
        </div>
        <div class="form-group">
          <label for="">Date</label>
          <input type="date" name="date" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="">Photo</label><br>
          <input type="file" name="photo" required/>
        </div>
        <div class="form-group"  style="text-align:right;">
            <input type="submit" name="add_employee" class="btn btn-info" value="Add Employee"/>
        </div>
      </form>
    </div>
  </div>
</div>
