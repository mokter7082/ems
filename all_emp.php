<?php $conn = mysqli_connect('localhost','root','','apsis_solutions');?>
<h1 class="text-primary"><i class="fa fa-users"></i> All Employee <small class="text-body">All Employee</small></h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i><a href="index.php?page=dashbord" style="text-decoration:none;"> Dashboard</a> </li>
      <li class="breadcrumb-item active" style="margin-left:20px;"><i class="fa fa-user-plus"></i> Add Employee </li>
    </ol>

<div class="table-responsive">
  <h2>Employee</h2>
  <table class="table table-bordered table-hover" id="tbl">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E_mail</th>
        <th>Designation</th>
        <th>Photo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
           $db_e_info = mysqli_query($conn,"SELECT * FROM `employee_info`");
            while ($row = mysqli_fetch_assoc($db_e_info)) {
                    ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['designation'];?></td>
                    <td><img src="employee_images/<?php echo $row['photo'];?>" alt="" style="height:50px;width:50px;"></td>
                    <td>
                      <a href="index.php?page=update&id=<?php echo base64_encode($row['id']);?>" class="btn btn-warning btn-sm">Update</a>
                      <a href="delete.php?id=<?php echo base64_encode($row['id']);?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
            </tr>
            <?php
            }
            ?>

    </tbody>
  </table>
</div>
</div>
