<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Course</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../script.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">

<?php require_once('../include/header.html');?>

<?php require_once('../include/menubar.html');?>
<content>

<?php
require_once('../include/connect.php');
$result = mysqli_query($con,'SELECT * FROM internship');
?>
<table cellpadding="10" cellspacing="10">
<tr><th width="500"><h2>Internship</h2></th><th width="200"><h2>Price</h2></th><th></th></tr>
<?php
while($row = mysqli_fetch_array($result))
	{
?>
	<tr>
    <td colspan="2">
    <form action="#">
    <table>
    <tr>
	<td width="500">
    <div><h2><?php echo $row['title']; ?></h2></div>
    <div><?php echo $row['description']; ?></div>
    </td>
	<td width="200">
    <center>
    <div><b><?php echo $row['price']; ?></b></div>
    </center>
    <br>
    <center>
    <div><input type="button" value="Apply" id="apply_intern" style="padding:10px;border-radius:5px;width:100px;box-shadow:0px 0px 10px #000000;"></div>
    </center>
    </td>
    </tr>
    </table>
    </form>
    </td>
	</tr>
<?php
	}
echo '</table>';
?>

</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>