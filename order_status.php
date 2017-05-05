<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<?php 
$user_name=$_SESSION['user_name'];
            if(!(isset($_SESSION['user_name']) && $_SESSION['user_name'] != '')){
                header ("Location: login.php");
            }
            ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>sign up form</title>
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marko+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
</script>


</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
$kart_id=$_POST['kart_id'];
if(!($kart_id))
{
	 echo("<script>alert('You have no orders to show');window.location='home.php';</script>");
	 exit();
}
else
{ 

$con=mysqli_connect("$servername","$username","$password","$db_name");

$qry1="SELECT * FROM book_kart WHERE kart_id='$kart_id'";
$result=mysqli_query($con,$qry1);


$row = mysqli_fetch_assoc($result);

	$_SESSION['delivery_time']=$row['delivery_time'];
	$_SESSION['order_time']=$row['order_time'];
	$order_time=$row['order_time'];
	$delivery_time=$row['delivery_time'];
	$book_name=$row['book_name'];
	$total_rate=$row['total_rate'];
	$_SESSION['book_id']=$row['book_id'];

	$qry2="SELECT * FROM book_kart WHERE delivery_time > CURRENT_DATE and kart_id = '$kart_id'";
$result2=mysqli_query($con,$qry2);
$row2 = mysqli_fetch_assoc($result2);
if(!($row2))
{
	$disabled ="disabled='disabled'";
	$cancel_btn="DELIVERED";
}
else
{
	$disabled = " ";
	$cancel_btn="CANCEL NOW"; 
}
}
?>
<div class="header1">
<h1>BOOK STORE</h1>
</div>
<button type="submit" class="btn btn-info signin"><a href="my_orders.php">BACK</a></button>
<div class="parallax1">

</div>
<div class="container">
<div class="table_form">
<div class="page-header tb1">
<h1>YOUR ORDER</h1>
</div>
<table class="table table-striped tb1">
<form method="POST"  enctype="multipart/form-data" id="form" action="delete_order.php" >
<tr>
<td>
<label>BOOK NAME :</label>
</td>
<td>
<label><?php echo($book_name); ?></label>
</td>
</tr>
<tr>
<td>
<label>RATE :</label>
</td>
<td>
<label><?php echo($total_rate); ?></label>
</td>
</tr>
<tr>
<td>
<label>ORDERED ON :</label>
</td>
<td>
<label><?php echo($order_time); ?></label>
</td>
</tr>
<tr>
<td>
<label>DELIVERED BY:</label>
</td>
<td>
<label><?php echo($delivery_time); ?></label>
</td>
</tr>

<tr>
<td>
</td>
<td>
<button type="submit" id="btn1" class="btn btn-success" name="kart_id" value="<?php echo $kart_id ?>"<?php echo $disabled ?>><?php echo $cancel_btn ?></button>
</td>
</tr>
</form>
</table>
</div>
</div>
<div class="parallax1">
</div>
<div class="panel-footer">
<h3>Please provide the correct information</h3>
</div>
<!-- <script type="text/javascript">
$(document).ready(function (e) {
jQuery("#form").live('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "book_kart.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
  alert("ordered successfully");
  header("location:user_home.php");

}
});
}));
})
</script> -->

</body>
</html>
