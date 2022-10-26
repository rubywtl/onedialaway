<!DOCTYPE html>
<header>
<title>1dialaway</title>
</header>

<body>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="indexstyle.css">
<link rel="stylesheet" href="login.css">
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

<form method='post' action='server.php'>
	<h1>Login</h1>
		<div class='input-group'>
			<label>Username</label>
			<input type='text' name='username'required >
		</div>
		<div class='input-group'>
			<label>Password</label>
			<input type='password' name='password' required>
		</div>	
		<div class='input-group'>
			<button type='submit' class='btn' name='login_user'>Login</button>
		</div>
		
		<a href="register.php">create account</a>
</form>
</body>
