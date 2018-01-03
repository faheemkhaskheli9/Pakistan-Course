<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Course</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../script.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
<style>
content
{
min-height:500px;
border:1px solid #333333;
border-radius:5px;
box-shadow:0px 0px 20px #000000;
overflow-x:scroll;
overflow-y:hidden;
}
#pages
{
height:400px;
}
#pages div
{
width:300px;
display:inline-block;

	transition-property: width;
	transition-duration: 1s;
	transition-timing-function: linear;
	transition-delay: 0s;
 /* Safari */
	-webkit-transition-property:width;
	-webkit-transition-duration:1s;
	-webkit-transition-timing-function:linear;
	-webkit-transition-delay:0s;
	
	box-shadow:0px 0px 20px #000;	
	margin:20px;
	padding:0px;
	padding-top:4px;
	border-radius:5px;
	overflow:hidden;
}
#pages div:hover
{
width:550px;
}
</style>
</head>

<body>
<div id="page">

<?php require_once('../include/header.html');?>

<?php require_once('../include/menubar.html');?>

<h1 style="margin-left:50px;;font-style:oblique;font-weight:200;font-size:50px;">Image Gallary</h1>

<content>
<center>
<table id="pages">
<tr>
<td><div><img src="./pics/44.jpg" width="100%"></div></td>
<td><div ><img src="./pics/44444.jpg" width="100%"></div></td>
<td><div ><img src="./pics/555.jpg" width="100%"></div></td>
<td><div ><img src="./pics/666.jpg" width="100%"></div></td>
<td><div ><img src="./pics/77.jpg" width="100%"></div></td>
<td><div ><img src="./pics/8888.jpg" width="100%"></div></td>
<td><div ><img src="./pics/computer-center.jpg" width="100%"></div></td>
<td><div ><img src="./pics/images.jpg" width="100%"></div></td>
<td><div><img src="./pics/img1.jpg" width="100%"></div></td>
<td><div><img src="./pics/ll.jpg" width="100%"></div></td>
<td><div><img src="./pics/photo.php.jpg" width="100%"></div></td>
</tr>
</table>
</center>
</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>