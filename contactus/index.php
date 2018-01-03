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
<h1>Contact Us</h1>
<div id="contactus">
<form action="submit.php" method="post">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" placeholder="Your Name" required title="Your Name is Required"/><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="email" value="" size="30" placeholder="Your Email" required title="Your Email is Required"/><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="10" cols="30" placeholder="Feedback / Comment / Suggestion" required title="You Must Write Something Here." pattern="{a-zA-Z0-9}[10,1000]"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>
</div>
</content>

<?php
require_once('../include/sidebar.html');
require_once('../include/footer.html');
?>

</div>
</body>
</html>