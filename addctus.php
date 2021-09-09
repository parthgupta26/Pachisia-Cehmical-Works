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
if (isset($_POST['cname']))
{
    $chemical = $_POST['cname'];
}
if (isset($_POST['quant']))
{
    $quantity = $_POST['quant'];
}
if (isset($_POST['phone']))
{
    $phone = $_POST['phone'];
}
if (isset($_POST['subject']))
{
    $message = $_POST['subject'];
}


mysqli_query($connect_db,"INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `chem`, `qty`, `msg`, `timestamp`, `resp`) VALUES (NULL, '$name', '$email', '$phone', '$chemical', '$quantity', '$message', CURRENT_TIMESTAMP, '0')");

echo "<script>alert('Record successfuly updated.');window.location.href='index.php';</script>";

?>