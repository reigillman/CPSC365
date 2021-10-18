<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<style type="text/css">
.box { border: 1px solid black; 
	text-align:center;}
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

<body>
<div id="wrapper"><ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="movies.html">Movies</a></li>
  <li><a href="contact.html">Contact Us</a></li>
  <?php 
  session_start();
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
	<center><h1>Home</h1></center>
	<p><div class="box">
	<br><br><br>
  A string of recently popular movie posters will go here.
  <br>
  Clicking on one of them will take the user to that movie's page.
  <br><br><br><br>
</div>
<br><br>
<center>A short description or eye-catching quote about the site will go here.
<br>
This page will mainly be movie posters and the navigation bar.</center></p>

</body>
</html>
