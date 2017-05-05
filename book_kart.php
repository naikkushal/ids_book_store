<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
$book_id=$_POST['book'];




$con=mysqli_connect("$servername","$username","$password","$db_name");

$qry1="SELECT * FROM book_tbl WHERE book_id='$book_id'";

$result=mysqli_query($con,$qry1);
$row = mysqli_fetch_assoc($result);
if(!($row))
{
	echo("<script>alert('Invlid entry');window.location='home.php';</script>");
}
else
{
	 session_start();
	$_SESSION['book_name']=$row['book_name'];
	$_SESSION['book_type']=$row['book_type'];
	$_SESSION['book_by']=$row['book_by'];
	$_SESSION['book_rate']=$row['book_rate'];
	$_SESSION['book_id']=$book_id;

	
}

header("location:kart.php");
?>

