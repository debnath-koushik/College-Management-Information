<?php
require('template/header.php');
if(isset($_POST['login']))
{
$myusername=$_POST['uname'];
$mypassword=$_POST['pword'];
$conn=mysqli_connect("localhost","root","","mci");
$x=mysqli_query($conn,"select `password` from `admin` where `username`='$myusername'");
list($p)=mysqli_fetch_row($x);
if($mypassword==$p)
{
setcookie("shib",$myusername,time()+60*60);
header("LOCATION:profile.php");
}
else
{
header("LOCATION:admin.php");
}
}

else
{
echo '
<table align="center">
<tr>
<td>
<div id="aboutus">
<br><br>
<fieldset style="width:273px;margin:auto;">
<legend style="font-family:bold,Bernard MT Condensed;color:#ffffff;">Admin Login Area</legend>
<form action="admin.php" method="POST" id="login">
<br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>USERNAME:</strong>
<input type="text" name="uname" class="required max(10)" minlength="5"/><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>PASSWORD:</strong>
<input type="password" name="pword" class="required max(10)" minlength="5"/><br/><br/>
<center><input type="submit" name="login" value="LOGIN"></center>
<br/>
</form>
</fieldset>
</div>
</td>
</tr>
</table>';
}
require('template/footer.php');
?>