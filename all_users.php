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
        <th>Email</th>
        <th>Username</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
      <?php
           $db_e_info = mysqli_query($conn,"SELECT * FROM `users`");
            while ($row = mysqli_fetch_assoc($db_e_info)) {
                    ?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['user_name'];?></td>
                    <td><img src="images/<?php echo $row['photo'];?>" alt="" style="height:50px;height:50px;"></td>
            </tr>
            <?php
            }
            ?>

    </tbody>
  </table>
</div>
</div>
