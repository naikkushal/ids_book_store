<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<?php 
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
<div class="header1">
<h1>BOOK STORE</h1>
</div>
<button type="submit" class="btn btn-info signin"><a href="home.php">BACK</a></button>
<div class="parallax1">

</div>
<div class="container">
<div class="table_form">
<div class="page-header tb1">
<h1>YOUR KART</h1>
</div>
<table class="table table-striped tb1">
<form method="POST"  enctype="multipart/form-data" id="form" action="insert_book_kart.php" >
<tr>
<td>
<label>BOOK NAME :</label>
</td>
<td>
<label><?php echo($_SESSION['book_name']); ?></label>
</td>
</tr>
<tr>
<td>
<label>TYPE :</label>
</td>
<td>
<label><?php echo($_SESSION['book_type']); ?></label>
</td>
</tr>
<tr>
<td>
<label>BOOK BY :</label>
</td>
<td>
<label><?php echo($_SESSION['book_by']); ?></label>
</td>
</tr>
<tr>
<td>
<label>RATE :</label>
</td>
<td>
<label><?php echo($_SESSION['book_rate']); ?></label>
</td>
</tr>

<tr>
<td>
</td>
<td>
<button type="submit" id="btn" class="btn btn-success">ORDER NOW</button>
</td>
</tr>
</form>
</table>
</div>
</div>
<div class="parallax1">
</div>
<div class="panel-footer">
<h3>“The great objection to new books is that they prevent our reading old ones.”</h3>
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