<html>
<head>
<title>MANAGEMENT COLLEGE INFO</title>
<link rel='stylesheet' type='text/css' href='template/css/mci.css'>
<link rel='stylesheet' type='text/css' href='template/css/basic-jquery-slider.css'>
<link rel='stylesheet' type='text/css' href='template/css/slider.css'>
<link rel='stylesheet' type='text/css' href='template/css/jquery.simplyscroll.css'>
<link rel='stylesheet' type='text/css' href='template/css/jquery.slider.css.css'>
<link rel="stylesheet" href="template/css/jquery.simplyscroll.css" media="all" type="text/css">

<script type="text/javascript" src="template/js/sample1.js"></script>
<script type="text/javascript" src="template/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="template/js/libs/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="template/js/jquery.simplyscroll.js"></script>
<script type="text/javascript" src="template/js/jquery.simplyscroll.js"></script>
<script type="text/javascript" src="template/js/sample2.js"></script>

<link rel="stylesheet" href="template/css/s1.css" type="text/css" />
<script src="template/js/jquery-latest.js"></script>
<script type="text/javascript" src="template/js/jquery.validate.js"></script>
<script type="text/javascript" src="template/js/sample.js"></script>

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="template/css/ie.css" />
<![endif]-->

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="template/css/ie1.css" />
<![endif]-->

</head>

<body>
<div id="main">
<table align="center">
<tr><td>
<div id="header">
<img src="template/images/mgmt.png" style="margin-top:20px;margin-left:125px;"/>
<img src ="template/images/usocial.jpg" alt="usocial" usemap ="#map2" alt="" border="0" height="65" width="208"style="margin-left:730px;margin-top:-10px;"/>
<map name="map2">
<area shape="circle" coords="24,23,40" href="#" target="_blank">
<area shape="circle" coords="102,25,35" href="#" target="_blank">
<area shape="circle" coords="175,23,37" href="#" target="_blank">
</map>
</div></td></tr>
<tr><td>
<div id="menu">
<ul>
<?php
if(!isset($_COOKIE['shib']))
{
echo '<li><a href="index.php">Home</a></li>';
echo '<li><a href="admin.php">Admin</a><li>';
echo '<li><a href="mca.php">MCA</a></li>';
echo '<li><a href="mba.php">MBA</a></li>';
echo '<li><a href="contactus.php">Contact Us</a></li>';
}
else
{
echo '<li><a href="profile.php">ADD COURSE</a></li>';
echo '<li><a href="contactusview.php">CUSTOMER DATA</a></li>';
echo '<li><a href="#">MY ACCOUNT</a>';
echo '<ul>';
echo '<li><a href="logout.php">LOGOUT</a></li>';
echo '</ul>';
echo '</li>';
echo '<li><a href="manage.php">MANAGE PROFILE</a></li>';
echo '</li>';
echo '<li><a href="#">...............................</a></li>';
}
?>
</ul>
</div></td></tr>
<tr><td><div id="maincontent">
