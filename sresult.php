<?php
$search_item = $_GET['item'];

include('include/connect.php');

$result = mysqli_query($con,"SELECT * FROM center WHERE id IN (SELECT center_id FROM center_for WHERE course_id IN (SELECT id FROM course WHERE name LIKE '%$search_item%') ) ");
?>
		<h1>Centers</h1>
		<table cellpadding="10" cellspacing="0" border="1" style="box-shadow:0px 0px 10px #555555;">
    	<tr>
    		<th width="40">S - id</th>
    		<th width="100">Name</th>
    		<th width="200">Courses</th>
    		<th width="100">City</th>
    		<th width="100">Location</th>
    	</tr>
<?php
$count = 0;
while ($row = mysqli_fetch_array($result))
	{
	$c_c_result = mysqli_query($con,"SELECT * FROM course WHERE id IN (SELECT course_id FROM center_for WHERE center_id = ".$row['id'].')');
	$courses = '';
	while ($rows = mysqli_fetch_array($c_c_result))
		{
		$courses .= '<a href="./?type=course&value='.$rows['id'].'"><div style="padding:10px;margin:5px;background-color:#1111FF;color:#ffffff;border-radius:5px;display:inline-block;">'.$rows['name'].'</div></a>';
		}

?>
	<tr>
		<td><?php echo $count++;?></td>
		<td><a href="center/center.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></td>
        <td><?php echo $courses;?></td>
    	<td><?php echo $row['city'];?></td>
    	<td><?php echo $row['loc'];?></td>
	</tr>
<?php	
	}
?>
</table>