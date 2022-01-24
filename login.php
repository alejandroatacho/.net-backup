<?php include('server.php') ?>
<?php include('include/menu.inc.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration your accountL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
<footer><div id="footertemp">
  Copiright &copy; 2021 Books Are Us<br>
  <a href="terms.php">Terms And Conditions</a>
  <p>Contact us at : +59997371245 <br>
  or Email us at : Info@BooksAreUs.com</p>
  </div>
</footer>
</html>