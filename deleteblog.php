<?php

include('session.php');
if(!isset($_SESSION['login_user'])){
  header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

$id = ($_POST['id']);

$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

$query1 = mysqli_query($connect_db, "DELETE FROM `blog_data` WHERE `blog_data`.`id` = $id");
echo"<script>
		window.location.href='blogedit.php';
	</script>";
?>