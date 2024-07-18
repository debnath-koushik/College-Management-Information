<?php
if(isset($_GET['de']))
{
$del=$_GET['de'];
$conn=mysqli_connect("localhost","root","","mci");
mysql_query($conn,"delete from `contactus` where `id`='$del'");
header("LOCATION:contactusview.php");
}
?>