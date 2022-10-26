<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</header>

<?php
session_start();
$username = "";
$tel= "";
$errors = array(); 
require("conn.php");

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $tel = mysqli_real_escape_string($db, $_POST['tel']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($tel)) { array_push($errors, "Phone number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM user WHERE username='$username' OR tel='$tel' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['tel'] === $tel) {
      array_push($errors, "Phone number already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO user (username, tel, password) 
  			  VALUES('$username', '$tel', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
	$_SESSION['loggedin'] = true;
	$_SESSION['login'] = 1;
  	header('Location: home.php');
  }
}


// LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
	  $_SESSION['loggedin'] = true;
	  $_SESSION['login'] = 1;
  	  header('Location: home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  $_SESSION['login'] = 1;
  	  header('Location: home.php');
}
?>