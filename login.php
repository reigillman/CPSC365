<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=moviesite', 'root', 'root');
$pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec ('SET NAMES "utf8"');
}
catch (PDOException $e){
echo $e->getMessage ();
exit();
}
	$stmt= $pdo->prepare("SELECT * FROM users WHERE username = ?");
	$stmt->execute([$_POST['username']]);
	$user= $stmt->fetch();
	
	if(password_verify($_POST['password'], $user['password'])){
		session_start();
		session_regenerate_id (true);
		$_SESSION['LOGIN']= true;
		if(isset($_SESSION['LOGIN'])){
			if($user['adminFlag'] != NULL){
			$_SESSION['isAdmin']= true;
			header('Location: http://localhost/movie%20reviews/home.php');
		}
		else {
			$_SESSION['isAdmin']= false;
			header('Location: http://localhost/movie%20reviews/home.php');
		}
	}
	}
	else {
		echo 'ERROR: Incorrect password!';
		exit();
	}

?>