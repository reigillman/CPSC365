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

<body><div id="wrapper"><ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="movies.html">Movies</a></li>
  <li><a href="contact.html">Contact Us</a></li>
  <li><a href="login.html">SignUp/Login</a></li>
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
<br>
Once a user is logged in, the "SignUp/Login" button on the top will switch to something like "My profile"
and "Logout" will appear next to it.
<br>
If an admin signs in, an "Add Movie+" button will appear as well.</center>
</body>
</html>
