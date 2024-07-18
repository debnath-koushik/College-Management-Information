<?php
require('template/header.php');
if(isset($_POST['add']) && isset($_FILES['file']))
{
$filename=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"logo/".$filename);
$a=$_POST['college'];
$b=$_POST['city'];
$c=$_POST['state'];
$d=$_POST['course'];
$e=$_POST['duration'];
$f=$_POST['fees'];
$g=$_POST['affiliation'];
$h=$_POST['website'];
$conn=mysqli_connect("localhost","root","","mci");
mysqli_query($conn,"insert into `course`(`collegename`,`city`,`state`,`degree`,`duration`,`fees`,`affiliation`,`website`,`logo`) values('$a','$b','$c','$d','$e','$f','$g','$h','$filename')");
header("LOCATION:profile.php");
}

echo '
<table align="center">
<tr>
<td>
<div id="aboutus"><br/>
<fieldset style="width:223px;min-height:651px;max-height:auto;margin:auto;">
<legend style="font-family:bold,Bernard MT Condensed;color:#ffffff;font-size:1.3em;">Add Course Details</legend>
<form action="profile.php" method="POST" enctype="multipart/form-data" id="profile">
<br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>College:</strong><br/>
<input type="text" name="college" size="30" style="border:2px solid #d35400;"class="required max(200)" minlength="3"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>City:</strong><br/>
<input type="text" name="city" size="30" style="border:2px solid #d35400;"class="required max(200)" minlength="3"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>State:</strong><br/>
<input type="text" name="state" size="30" style="border:2px solid #d35400;"class="required max(70)" minlength="3"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Course:</strong><br/>
<select name="course" class="required course">
<option>MCA</option>
<option>MBA</option>
</select><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Duration:</strong><br/>
<input type="text" name="duration" size="30" style="border:2px solid #d35400;"class="required max(7)" minlength="4"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Fees:</strong><br/>
<input type="text" name="fees" size="30" style="border:2px solid #d35400;"class="required max(7)" minlength="4"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Affiliation:</strong><br/>
<input type="text" name="affiliation" size="30" style="border:2px solid #d35400;"class="required max(70)" minlength="3"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Website:</strong><br/>
<input type="text" name="website" size="30" style="border:2px solid #d35400;"class="required max(250)" minlength="7"><br/><br/>
<strong style="color:RGB(136,0,21);margin-left:0px;font-size:1.3em;"><font color="#FF0000">*</font>Logo:</strong><br/>
<input type="file" name="file"><br/><br/>

<center><input type="submit" name="add" value="ADD COURSE"></center>
<br/>
</form>
</fieldset>
</div>
</td>
</tr>
</table>';
require('template/footer.php');
?>