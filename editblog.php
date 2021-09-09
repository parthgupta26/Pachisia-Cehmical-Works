<?php

include('session.php');
if(!isset($_SESSION['login_user'])){
  header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

/*
ALTER TABLE `blog_data` ADD `chem_name` VARCHAR(100) NOT NULL AFTER `id`, ADD `cas_no` VARCHAR(50) NOT NULL AFTER `chem_name`, ADD `grade` VARCHAR(50) NOT NULL AFTER `cas_no`, ADD `maj_app` VARCHAR(50) NOT NULL AFTER `grade`, ADD `industry` VARCHAR(100) NOT NULL AFTER `maj_app`, ADD `color` VARCHAR(50) NOT NULL AFTER `industry`, ADD `phy_nat` VARCHAR(100) NOT NULL AFTER `color`;*/
$id = ($_POST['id']);
$chem_name = ($_POST['chem_name']);
$cas_no = ($_POST['cas_no']);
$grade = ($_POST['grade']);
$maj_app = ($_POST['maj_app']);
$industry = ($_POST['industry']);
$color = ($_POST['color']);
$phy_nat = ($_POST['phy_nat']);

$title = ($_POST['title']);		//Mandatory
$content = ($_POST['content']);				//Mandatory
if(isset($_POST['content2'])){
    $content2 = ($_POST['content2']);
}
if(isset($_POST['content3'])){
    $content3 = ($_POST['content3']);
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image_upload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $error = "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $error = "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image_upload"]["size"] > 5000000) {
  $error = "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  mysqli_query($connect_db,"UPDATE `blog_data` SET `chem_name` = '$chem_name', `cas_no` = '$cas_no', `grade` = '$grade', `maj_app` = '$maj_app', `industry` = '$industry', `color` = '$color', `phy_nat` = '$phy_nat', `title` = '$title', `content` = '$content', `content2` = '$content2', `content3` = '$content3' WHERE `blog_data`.`id` = '$id'");

	
    echo '<script>alert("Sorry, your file was not uploaded. '.$error.'")</script>';
    // echo '<script>alert("chem_name'.$chem_name.'")</script>';
    // echo '<script>alert("cas_no'.$cas_no.'")</script>';
    // echo '<script>alert("grade'.$grade.'")</script>';
    // echo '<script>alert("maj_app'.$maj_app.'")</script>';
    // echo '<script>alert("industry'.$industry.'")</script>';
    // echo '<script>alert("color'.$color.'")</script>';
    // echo '<script>alert("phy_nat'.$phy_nat.'")</script>';
    // echo '<script>alert("title'.$title.'")</script>';
    // echo '<script>alert("content'.$content.'")</script>';
    // echo '<script>alert("content2'.$content2.'")</script>';
    // echo '<script>alert("content3'.$content3.'")</script>';
    //echo '<script>alert("ID: '.$id.'")</script>';
    echo '<script>alert("The data has been updated")</script>';
    // echo '<script>alert("'..'")</script>';
    // echo '<script>alert("'..'")</script>';

 //    echo"<script>
	// 	window.history.back();
	// </script>";
// if everything is ok, try to upload file
} else {
	
	move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file);
    // mysqli_query($connect_db,"INSERT INTO `blog_data` (`id`, `chem_name`, `cas_no`, `grade`, `maj_app`, `industry`, `color`, `phy_nat`, `title`, `content`, `content2`, `content3`, `image`, `time`) VALUES (NULL, '$chem_name', '$cas_no', '$grade', '$maj_app', '$industry', '$color', '$phy_nat', '$title', '$content', '$content2', '$content3', '$target_file', current_timestamp())");
    mysqli_query($connect_db,"UPDATE `blog_data` SET `chem_name` = '$chem_name', `cas_no` = '$cas_no', `grade` = '$grade', `maj_app` = '$maj_app', `industry` = '$industry', `color` = '$color', `phy_nat` = '$phy_nat', `title` = '$title', `content` = '$content', `content2` = '$content2', `content3` = '$content3', `image` = '$target_file' WHERE `blog_data`.`id` = '$id'");
    //mysqli_query($connect_db,"INSERT INTO `blog_data` (`id`, `title`, `content`, `image`, `time`) VALUES (NULL, '$title', '$content', '$target_file', CURRENT_TIMESTAMP)");
	//mysqli_query($connect_db,"INSERT INTO `rewards` (`c_username`, `b_username`, `bill_no`, `rewards`, `timestamp`) VALUES ('$user', '$store_id', '$bill_no', '$reward', current_timestamp())");
}

echo"<script>
		window.location.href='blogedit.php';
	</script>";
?>
