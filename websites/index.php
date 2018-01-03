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
a
{
text-decoration:none;
color:#000000;
padding:20px;
}
a:hover
{
color:#FF0000;
}
</style>
</head>

<body>
<div id="page">

<?php
require_once('../include/header.html');
?>

<?php require_once('../include/menubar.html');?>
<content>
<?php require_once('../include/connect.php'); ?>
<?php
if (isset($_GET['course']))
	{
	$value = $_GET['course'];
	$result = mysqli_query($con,"SELECT * FROM course WHERE id = ".$value);
	$row = mysqli_fetch_array($result);
	$count = 1;
?>
	<h1>Website For <?php echo $row['name'];?></h1>
	<table cellpadding="10" cellspacing="0" border="1" style="box-shadow:0px 0px 10px #555555;">
    <tr>
	    <th width="40">S - id</th>
	    <th width="100">Website</th>
	    <th width="200">Courses</th>
    </tr>
<?php
	$center_result = mysqli_query($con,"SELECT * FROM websites WHERE id IN (SELECT w_id FROM web_course WHERE c_id = (".$value.'))');
	if ($center_result != '')
	while ($rows = mysqli_fetch_array($center_result))
		{
		$courses = '';
		$course_result = mysqli_query($con,"SELECT * FROM course WHERE id IN (SELECT c_id FROM web_course WHERE w_id =".$rows['id'].')');
		while ($crows = mysqli_fetch_array($course_result))
			{
			$courses .= '<a href="./?type=course&value='.$crows['id'].'"><div style="padding:10px;margin:5px;background-color:#1111FF;color:#ffffff;border-radius:5px;display:inline-block;">'.$crows['name'].'</div></a>';
			}
		?>
		<tr>
			<td><?php echo $count++;?></td>
			<td><a href="website.php"><?php echo $rows['title'];?></a>
            <br/>
            <a href="<?php echo $rows['link'];?>"><?php echo $rows['link'];?></a></td>
      	    <td><?php echo $courses;?></td>
		</tr>			
		<?php
		}
echo '</table>';
	}
else if (isset($_GET['cata']))
	{
	$value = $_GET['cata'];
	$result = mysqli_query($con,"SELECT * FROM catagory WHERE id = ".$value);
	$count = 1;
?>
	<h1>Website By Course</h1>
	<table cellpadding="10" cellspacing="0" border="1" style="box-shadow:0px 0px 10px #555555;">
    <tr>
	    <th width="40">S - id</th>
	    <th width="100">Website</th>
	    <th width="200">Courses</th>
    </tr>
<?php
	$cata_ids = '';
	while($row = mysqli_fetch_array($result))
		{
		if($cata_ids == '')
			$cata_ids = $row['id'];
		else
			$cata_ids .= ','.$row['id'];
		}
	$courses = '';
	$course_ids = '';
	$course_result = mysqli_query($con,"SELECT * FROM course WHERE catagory IN (".$cata_ids.")");
	while ($crows = mysqli_fetch_array($course_result))
		{
		$courses .= '<a href="./?type=course&value='.$crows['id'].'"><div style="padding:10px;margin:5px;background-color:#1111FF;color:#ffffff;border-radius:5px;display:inline-block;">'.$crows['name'].'</div></a>';
		if($course_ids == '')
			$course_ids = $crows['id'];
		else
			$course_ids .= ','.$crows['id'];
		}
	$center_result = mysqli_query($con,"SELECT * FROM websites WHERE id IN (SELECT w_id FROM web_course WHERE c_id IN (".$course_ids.'))');
	while ($rows = mysqli_fetch_array($center_result))
		{
		$courses = '';
		$course_result = mysqli_query($con,"SELECT * FROM course WHERE id IN (SELECT c_id FROM web_course WHERE w_id =".$rows['id'].')');
		while ($crows = mysqli_fetch_array($course_result))
			{
			$courses .= '<div style="padding:10px;margin:5px;background-color:#1111FF;color:#ffffff;border-radius:5px;display:inline-block;">'.$crows['name'].'</div>';
			}
		?>
		<tr>
			<td><?php echo $count++;?></td>
			<td><a href="website.php"><?php echo $rows['title'];?></a>
            <br/>
            <a href="<?php echo $rows['link'];?>"><?php echo $rows['link'];?></a></td>
       	    <td><?php echo $courses;?></td>
		</tr>			
		<?php
		}
echo '</table>';
	}
else
	{
	$result = mysqli_query($con,"SELECT * FROM websites");
	$count = 1;
?>
	<h1>Websites</h1>
	<table cellpadding="10" cellspacing="0" border="1" style="box-shadow:0px 0px 10px #555555;">
    <tr>
	    <th width="40">S - id</th>
	    <th width="100">Website</th>
	    <th width="200">Courses</th>
    </tr>
<?php
	while($row = mysqli_fetch_array($result))
		{
		$c_c_result = mysqli_query($con,"SELECT * FROM course WHERE id IN (SELECT c_id FROM web_course WHERE w_id = ".$row['id'].')');	
		$courses = '';
		while ($rows = mysqli_fetch_array($c_c_result))
			{
			$courses .= '<a href="./?type=course&value='.$rows['id'].'"><div style="padding:10px;margin:5px;background-color:#1111FF;color:#ffffff;border-radius:5px;display:inline-block;">'.$rows['name'].'</div></a>';
			}
?>
		<tr>
			<td><?php echo $count++;?></td>
			<td><a href="website.php"><?php echo $row['title'];?></a>
            <br/>
            <a href="<?php echo $row['link'];?>"><?php echo $row['link'];?></a></td>
		    <td><?php echo $courses;?></td>
		</tr>
<?php
		}
?>
	</table>
<?php
	}
?>
</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>