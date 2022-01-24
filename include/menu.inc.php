<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
	 <link href="favicon.png" rel="shortcut icon"  type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script type="text/javascript">
function equalHeight(group) {
    tallest = 0;
    group.each(function() {
        thisHeight = $(this).height();
        if(thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.height(tallest);
}
 
$(document).ready(function(){
    equalHeight($(".EqHeightDiv"));
});
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<div id="def"><?php include "definitions.inc.php";?></div>


</head>
<body>
<div id ='header'><h1>Books Are Us</h1></div>
<nav>
	<ul>
		<a href="index.php"><li>Home</li></a>
		<li><a href="register.php">Register</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		

	</ul>
</nav>
