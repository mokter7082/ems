<?php $conn = mysqli_connect('localhost','root','','apsis_solutions');?>
<h1 class="text-primary"><i class="fa fa-dashboard"></i> Dashboard <small class="text-body">Employee Overview</small></h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-dashboard"></i> Dashboard </li>
    </ol>

<div class="row">
<div class="col-md-5">
    <!---PANEL HEADING--->
  <div class="card" style="background-color:#2e86de;">
 <div class="card-body">
   <div class="row">
     <div class="col-md-3"><i class="fa fa-users fa-5x" style="color:#fff;"></i></div>
      <div class="col-md-9">
        <div class="clearfix"><p class="text-right">All Employee</p></div>
        <div><p class="text-right" style="font-size:30px;">49</p></div>
      </div>
   </div>
 </div>
 <!---PANEL FOTER--->
     <a href="" style="color:#000; text-decoration:none;">
       <div class="card-footer">All Employee <i class="fa fa-users text-right" style="color:#fff;"></i></div>
     </a>
  </div>
</div>
<!---PANEL HEADING--->
<div class="col-md-5">
  <!---PANEL HEADING--->
<div class="card" style="background-color:#2e86de;">
<div class="card-body">
 <div class="row">
   <div class="col-md-3"><i class="fa fa-users fa-5x" style="color:#fff;"></i></div>
    <div class="col-md-9">
      <div class="clearfix"><p class="text-right">All Employee</p></div>
      <div><p class="text-right" style="font-size:30px;">49</p></div>
    </div>
 </div>
</div>
<!---PANEL FOTER--->
   <a href="" style="color:#000; text-decoration:none;">
     <div class="card-footer">All Employee <i class="fa fa-users text-right" style="color:#fff;"></i></div>
   </a>
</div>
</div>
</div>
<div class="" style="margin-top:20px;">
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
            </tr>
            <?php
            }
            ?>

    </tbody>
  </table>
</div>
</div>
