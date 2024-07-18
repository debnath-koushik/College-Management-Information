<?php
if(isset($_GET['del']))
{
$del=$_GET['del'];
$conn=mysqli_connect("localhost","root","","mci");
mysqli_query($conn,"delete from `course` where `id`='$del'");
header("LOCATION:manage.php");
}
?>