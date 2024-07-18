<?php
require('template/header.php');
echo "<div id=\"view\">";
$conn=mysqli_connect("localhost","root","","mci");
$sql=mysqli_query($conn,"select `collegename`,`city`,`state`,`degree`,`duration`,`fees`,`affiliation`,`website`,`logo` from `course` where `degree`='MCA'");
while(list($a,$b,$c,$d,$e,$f,$g,$h,$i)=mysqli_fetch_row($sql))
{
echo"
<div style=\"width:945px;height:140px;background-color:RGB(182,253,147);border:3px solid #ffffff;\">
<div id=\"image\">
<img src=\"logo/$i\" width=\"158\" height=\"140\">
</div>

<div id=\"desc\">
<div style=\"font-weight:bold;font-size:20px;color:RGB(136,0,21);font-family:Georgia;text-align:center;\">$a</div>
<div style=\"font-weight:bold;font-size:20px;color:RGB(136,0,21);font-family:Georgia;padding-top:5px;text-align:center;\">$b,$c</div>
<div style=\"color:blue;font-size:17px;font-family:Georgia;padding-top:5px;text-align:center;\"><b>Degree:</b>$d | <b>Duration:</b>$e</div>
<div style=\"color:blue;font-size:17px;font-family:Georgia;padding-top:5px;text-align:center;\"><b>Fees:</b>$f | <b>Affiliated By:</b>$g</div>
<div style=\"color:blue;font-size:17px;font-family:Georgia;padding-top:5px;text-align:center;\"><b>Official Website:</b><a href=\"$h\">Click Here</a></div>
</div>
	
</div><br>";	
}
echo "</div>";
require('template/footer.php');
?>