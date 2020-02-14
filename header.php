<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="nothing">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<title></title>
</head>
<body>
<header>
<nav>

<ul>
  <li><a href="#">
<img id="hi" src="img/logo.png" alt="logo">
      </a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="#">index</a></li>
  <li><a href="#">about</a></li>
  
</ul>
<div class="bb">
<?php
if (isset($_SESSION['userid'])){
	echo '<form action="includes/logout.inc.php" method="post">
 <button type="submit" name="logout-submit">logout</button>
 </form>'; 
 }
 else
 {
	echo '<form action="includes/login.inc.php" method="post">
<input type="text" name="mailuid" placeholder="user/mail">
<input type="password" name="pwd" placeholder="password">
<button type="submit" name="login-submit">Login</button>
 </form>
 <a href="signup.php" style="color:white;">Signup</a>
';
 }

?>
 

</div>
</nav>

</header>