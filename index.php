<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Course</title>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">

<header>
<img src="images/icons/earth26 (1).png" width="100">
<h1>Pakistan Course</h1>
</header>

<div id="nav">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="">Home</a>
    </li>
    <li><a class="MenuBarItemSubmenu" href="center/?type=course">Courses</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="">Programming</a>
              <ul>
                <li><a href="center/?type=course">C</a></li>
                <li><a href="center/?type=course&value=1">C++</a></li>
                <li><a href="center/?type=course&value=6">CSS</a></li>
                <li><a href="center/?type=course&value=5">HTML</a></li>
                <li><a href="center/?type=course&value=2">Java</a></li>
                <li><a href="center/?type=course">JavaScript</a></li>
                <li><a href="center/?type=course&value=3">PHP</a></li>
                <li><a href="center/?type=course&value=4">MySQL</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="">Networking</a>
              <ul>
          		<li><a href="center/?type=course&value=7">CCNA</a></li>
              </ul>
          </li>
        </ul>
    </li>
	<li><a class="MenuBarItemSubmenu" href="center/?type=loc">Location</a>
        <ul>
          <li><a href="center/?type=loc&value=Karachi">Karachi</a></li>
          <li><a href="center/?type=loc&value=Hyderabad">Hyderabad</a></li>
          <li><a href="center/?type=loc&value=Lahore">Lahore</a></li>
          <li><a href="center/?type=loc&value=Islamabad">Islamabad</a></li>
          <li><a href="center/?type=loc&value=Jamshoro">Jamshoro</a></li>
        </ul>
    </li>
    <li><a href="websites">Websites</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="websites/?cata=1">Programming</a>
              <ul>
                <li><a href="websites/">C</a></li>
                <li><a href="websites/?course=1">C++</a></li>
                <li><a href="websites/?course=6">CSS</a></li>
                <li><a href="websites/?course=5">HTML</a></li>
                <li><a href="websites/?course=2">Java</a></li>
                <li><a href="websites/">JavaScript</a></li>
                <li><a href="websites/?course=3">PHP</a></li>
                <li><a href="websites/?course=4">MySQL</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="websites/?cata=2">Networking</a>
	          	<ul>
          		<li><a href="websites/?course=7">CCNA</a></li>
                </ul>
          </li>
        </ul>    
    </li>
    <li><a href="intern">Internship</a></li>
    <li><a href="images">Gallary</a></li>
    <li><a href="aboutus">About Us</a></li>
    <li><a href="contactus">Contact Us</a></li>
  </ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>

</div>

<content id="content">
<h1>Course</h1>
This Website give you information about course in pakistan.
This class will also introduce you to two other important tools—the CCIM Strategic Analysis Model, the fundamentals behind the numbers, and the CCIM Decision-Making Model, a process for analyzing and making real estate decisions.
This class will also introduce you to two other important tools—the CCIM Strategic Analysis Model, the fundamentals behind the numbers, and the CCIM Decision-Making Model, a process for analyzing and making real estate decisions.
This class will also introduce you to two other important tools—the CCIM Strategic Analysis Model, the fundamentals behind the numbers, and the CCIM Decision-Making Model, a process for analyzing and making real estate decisions.
This class will also introduce you to two other important tools—the CCIM Strategic Analysis Model, the fundamentals behind the numbers, and the CCIM Decision-Making Model, a process for analyzing and making real estate decisions.

<br>

<div class="tile">
<div class="logo"><img src="images/icons/pencil29.png" width="180"></div>
<div class="title">Catagory</div>
Find the course you need by catagory.<br>
Here you can get information about desired course.<br>
</div>

<a href="center/?type=loc" style="color:#000000;text-decoration:none;">
<div class="tile">
<div class="logo"><img src="images/icons/placeholder4.png" width="200"></div>
<div class="title">Location</div>
Find the course you need by location.<br>
Here you can get information about course closest to your desired location.
</div>
</a>

</content>

<script type="text/javascript">
function search_course()
	{
	var search_item = document.getElementById('search').value;
	window.location = './search.php?item='+search_item;
	}
</script>
<div id="sidebar">
<input type="search" id="search" onkeyup="search_course()" placeholder="Search For Courses">
<marquee behavior="scroll" direction="up">
<div style="border:1px solid #666666;border-radius:5px;overflow:hidden;">
<div style="background-color:#0066FF;font-size:16px;text-align:center;padding:10px;">Title</div>
<div style="font-size:12px;text-align:left;padding:10px;">
Hello aSxaS as as sac aas a sa adasdkk kfnadnfi kjdfkjnajfn as sa
Hello aSxaS as as sac aas a sa adasdkk kfnadnfi kjdfkjnajfn as sa
Hello aSxaS as as sac aas a sa adasdkk kfnadnfi kjdfkjnajfn as sa
Hello aSxaS as as sac aas a sa adasdkk kfnadnfi kjdfkjnajfn as sa
</div>
</div>
</marquee>
</div>

<?php
require_once('include/footer.html');
?>

</div>
</body>
</html>