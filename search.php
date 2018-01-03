<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pakistani Course</title>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="search_course()">
<div id="page">

<header>
<img src="images/icons/earth26 (1).png" width="100">
<h1>Pakistan Course</h1>
</header>

<div id="nav">
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="./">Home</a>
    </li>
    <li><a class="MenuBarItemSubmenu" href="center/?type=course">Courses</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="">Programming</a>
              <ul>
                <li><a href="center/?type=course&value=">C</a></li>
                <li><a href="center/?type=course&value=1">C++</a></li>
                <li><a href="center/?type=course&value=6">CSS</a></li>
                <li><a href="center/?type=course&value=5">HTML</a></li>
                <li><a href="center/?type=course&value=2">Java</a></li>
                <li><a href="center/?type=course&value=">JavaScript</a></li>
                <li><a href="center/?type=course&value=3">PHP</a></li>
                <li><a href="center/?type=course&value=4">MySQL</a></li>
              </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="">Networking</a>
              <ul>
          		<li><a href="center/?type=course&value=7">CCNA</a></li>
              </ul>
          </li>
          <li><a href="#">Computer Architecture</a></li>
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
    <li><a href="websites">Websites</a></li>
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

<content id="content"></content>
<div id="sidebar">
<input type="search" id="search" onkeyup="search_course()" placeholder="Search For Courses" value="<?php echo $_GET['item'];?>">
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

</body>
</html>