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
  <li><a href="loginorsignup.php">SignUp/Login</a></li>
 </ul></div>
<br>
 <center>
	<h1>Sign Up</h1>
<p><b>SIGNUP FORM</b></p>
<form method="POST" action="signuplogin.php">
<p><input type="text" name= "usernameCreate" placeholder="Enter Username"></p>
<p><input type="password" name= "passCreate" placeholder="**********"></p>
<p><input type="submit" value="SIGNUP"></p>
</body>
</html>