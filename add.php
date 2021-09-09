<?php

$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

if (isset($_POST['name']))
{
    $name = $_POST['name'];
}

if (isset($_POST['email']))
{
    $email = $_POST['email'];
}

if (isset($_POST['company']))
{
    $company = $_POST['company'];
}

if (isset($_POST['query']))
{
    $query = $_POST['query'];
}


mysqli_query($connect_db,"INSERT INTO `queries` (`id`, `name`, `email`, `company`, `query`) VALUES (NULL, '$name', '$email', '$company', '$query')");


echo "<script>alert('Record successfuly updated.');window.location.href='index.php';</script>";

?>