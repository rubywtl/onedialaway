<!DOCTYPE html>
<html>
<header>
<title>1dialaway</title>
</header>

<body>
<?php
session_start();
if ($_SESSION['login']==1) {
    header('location: aftercall.php');
}else {
    header('location: login.php');
}
?>

</body>
</html>