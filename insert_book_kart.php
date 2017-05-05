<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
session_start();
$book_id=$_SESSION['book_id'];
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
	
	$book_name=$row['book_name'];
	$book_type=$row['book_type'];
	$book_by=$row['book_by'];
	$book_rate=$row['book_rate'];
	$user_name=$_SESSION['user_name'];
	$user_id=$_SESSION['user_id'];
	// printf($book_rate);
	

$qry2="insert into book_kart (book_name,book_id,user_name,user_id,total_rate,order_time,delivery_time) values('$book_name','$book_id','$user_name','$user_id','$book_rate',Curdate(),curdate() + interval 12 day)";
mysqli_query($con,$qry2);
echo("<script>alert('your book will be delivered in 12 days');window.location='home.php';</script>");
 // header("location:home.php");
}
?>

