<?php
  $conn = mysqli_connect('localhost','root','','apsis_solutions');
$id = base64_decode($_GET['id']);
 mysqli_query($conn,"DELETE FROM `employee_info` WHERE id='$id'");
 header('location: index.php');


?>
