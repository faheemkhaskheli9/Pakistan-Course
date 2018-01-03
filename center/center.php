<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Course</title>
    <style>
      #map_canvas {
        width: 100%;
        height: 600px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
<?php require_once('../include/connect.php'); ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM center WHERE id=$id");
while($row = mysqli_fetch_array($result))
	{
	echo '<h1>'.ucfirst($row['name']).'</h1>';
	echo '<p><b>Location : </b>'.$row['city'].' '.$row['loc'].'</p>';
	$c_c_result = mysqli_query($con,"SELECT * FROM course WHERE id IN (SELECT course_id FROM center_for WHERE center_id = ".$row['id'].')');
	$courses = '';
	while ($rows = mysqli_fetch_array($c_c_result))
		{
		$courses .= '<a href="./?type=course&value='.$rows['id'].'" style="color:#ffffff;text-decoration:none;"><div style="padding:10px;margin:5px;background-color:#1111FF;border-radius:5px;display:inline-block;">'.$rows['name'].'</div></a>';
		}
	echo '<p><b>Courses : </b>'.$courses.'</p>';
	}
?>
<div id="map_canvas"></div>
</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>