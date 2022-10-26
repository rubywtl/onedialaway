<!DOCTYPE html>
<html>
<header>
<title>1dialaway</title>
</header>

<body>
<link rel="stylesheet" href="setting.css">
<link rel="stylesheet" href="indexstyle.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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

<div class="card">
  <div class="container">
    <h4><b>account</b></h4>
	<p>username: <?php session_start(); echo $_SESSION['username'] ?></p> 
	<p>password: </p>
	<p>phone number:206053361 </p> 
	<button>log out</button> 
  </div>
</div>

<div class="card">
  <div class="container">
    <h4><b>my call</b></h4>
	<p>question</p>
	<button onclick="">edit</button>
  </div>
</div>

</body>

</html>