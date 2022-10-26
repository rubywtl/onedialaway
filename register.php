<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<header>
  <title>1DialAway</title>
  <link rel="stylesheet" type="text/css" href="registerstyle.css">
</header>

	
<body>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="indexstyle.css">
<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">&#9776;</button>
    <div class="dropdown-content">
	  <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="setting.php">setting</a>
    </div>
  </div> 
  <a> 1dialaway </a>
</div>
	
  <div class="header">register</div>
 
  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>phone number</label>
  	  <input type="tel" name="tel" value="<?php echo $tel; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		 <a href="index.php">Already have an account?</a>
  	</p>
  </form>
</body>
</html>