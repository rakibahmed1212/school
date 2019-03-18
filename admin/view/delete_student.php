<?php
include('../inc/config.php');
$p=$_GET['id'];
$delete="DELETE FROM student_list WHERE id='$p'";
$con->query($delete);
header("Location:student_output.php");
?>