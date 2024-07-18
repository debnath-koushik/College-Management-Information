<?php
require('template/header.php');
if(isset($_POST['contactus']))
{
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","mci");
mysqli_query($conn,"insert into `contactus`(`name`,`mobile`,`email`,`message`) values('$name','$mobile','$email','$message')");
header("contactus.php");
}

echo '
<table align="center">
<tr>
<td>
<div id="aboutus"><br/>
<fieldset style="width:273px;min-height:347px;max-height:auto;marginauto;">
<legend style="font-family:bold,Bernard MT Condensed;color:#ffffff;">Contact Us</legend>
<form action="contactus.php" method="POST" id="contactus">
<br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>NAME:</strong><br/>
<input type="text" name="name" size="30" class="required max(25)" minlength="5"/><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>MOBILE:</strong><br/>
<input type="text" name="mobile" size="30" class="required max(13)" minlength="10"/><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>EMAIL-ID:</strong><br/>
<input type="text" name="email" size="30" class="required email"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1em;"><font color="#ffffff">*</font>MESSAGE:</strong><br/>
<textarea rows="3" cols="31" name="message" size="30" class="required max(150)" minlength="15"/></textarea><br/><br/>

<center><input type="submit" name="contactus" value="CONTACT-US"></center>
<br/>
</form>
</fieldset><br/>
</div>
</td>
</tr>
</table>';
require('template/footer.php');
?>