<?php
/*$servername = "localhost";*/
$servername = "DESKTOP-R3I6ATK";
/*$username = "root";*/
$username = "bookstore";
/*$password = "";*/
$password = "bookstore";
$db_name = "book_store";
$email=$_POST['email'];
$pass=md5($_POST['password']);
$con=mysql_connect("$servername","$username","$password");

$qry1="SELECT * FROM profile_table WHERE email='$email' AND password='$pass'";

$result=mysqli_query($con,$qry1);
$row = mysqli_fetch_assoc($result);
if(!($row))
{
	echo("<script>alert('Invlid entry');window.location='user_login.html';</script>");
}
else
{
	session_start();
	$_SESSION['user_name']=$row['user_name'];
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['address']=$row['address'];
	$_SESSION['profile']=$row['profile_pic'];
	$_SESSION['email']=$email;
	header("location:home.php");
}


?>

