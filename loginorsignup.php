<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SignUp/Login</title>
<style type="text/css">
#wrapper{
	max-width: 960px;
	margin-right:auto;
	margin-left:auto;
	}
ul {
  list-style-type:none;
  margin:0;
  padding:0;
  overflow:hidden;
  background-color:gray;
}

li {
  float:left;
}

li a {
  display:block;
  padding:14px 16px;
}

</style>
</head>

<div id="wrapper"><ul>
<?php
session_start();
  echo("<li><a href='home.php'>Home</a></li>");
  if(isset($_SESSION['userId'])){
  echo("<li><a href='specificuser.php?userId=".$_SESSION['userId']."'>My Profile</a></li>");
  }
  echo("<li><a href='contact.html'>Contact Us</a></li>");
  include "run.php";
  if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']== true){
  echo "<li><a href='logout.php'>Logout</a></li>";
  }
  else {
  echo "<li><a href='logout.php'>SignUp/Login</a></li>";
  }
  if ((isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']== true) && $_SESSION['isAdmin'] == true){
  echo "<li><a href='adminaddmovie.php'>Add Movie+</a></li>";
  }
  ?>
 </ul></div>
<br>
 <center>
	<h1>Sign Up or Login</h1>
<p><b>LOGIN FORM</b></p>
<form method="POST" action="login.php">
<p><input type="text" name= "username" placeholder="Enter Username"></p>
<p><input type="password" name= "password" placeholder="**********"></p>
<p><input type="submit" value="LOGIN"></p>
</form>
<br>
<hr>
<p>New User?</p>
<br>
<a href="signup.php">Sign-Up Here</a>
<br>
</center>
</body>
</html>
