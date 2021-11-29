<?php
include 'run.php';

$FILE_DIR= 'avatars/';
$myAvi= $pdo->query("SELECT * FROM users WHERE userId='".$_GET['userId']."'");
$getAvi= $myAvi->fetch();
$aviNum= $getAvi['avatar'];

if($_FILES['upload']['error']){
		echo "ERROR: Please try to upload the avatar again.";
		exit();
	}
	else {
		if($_FILES['upload']['error'] == UPLOAD_ERR_OK){
			$finfo= new finfo(FILEINFO_MIME_TYPE);
			$ftype= $finfo->file($_FILES['upload']['tmp_name']);
			move_uploaded_file($_FILES['upload']['tmp_name'], $FILE_DIR.$aviNum.'.png');
			
			$image= imagecreatefrompng($FILE_DIR.$aviNum.'.png');
			$width= imagesx($image);
			$height= imagesy($image);

			$thumbHeight= 100;
			$thumbWidth= floor($width * ($thumbHeight/$height));
			$thumbnail= imagecreatetruecolor($thumbWidth, $thumbHeight);
			imagecopyresampled ($thumbnail, $image, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);
			imagepng($thumbnail, $FILE_DIR.$aviNum.'(thumbnail).png');
		}
	}
header('Location: http://localhost/movie%20reviews/specificuser.php?userId='.$_GET['userId']);
?>