<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
$kart_id=$_POST['kart_id'];
$user_id=$_SESSION['user_id'];
$book_id=$_SESSION['book_id'];
$delivery_time=$_SESSION['delivery_time'];
$order_time=$_SESSION['order_time'];

$con=mysqli_connect("$servername","$username","$password","$db_name");

$qry1="DELETE FROM book_kart WHERE kart_id ='$kart_id';";
$qry2="insert into order_canceled (kart_id,book_id,user_id,order_date,delivery_date,cancel_date) values('$kart_id','$book_id','$user_id','$order_time','$delivery_time',CURRENT_DATE)";

$result2=mysqli_query($con,$qry2);
$result=mysqli_query($con,$qry1);
header("location:my_orders.php");


?>

