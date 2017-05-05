<?php 
session_start();
$user_name=$_SESSION['user_name'];
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
  <?php
      error_reporting(E_ALL ^ E_DEPRECATED);
      $servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";

      // $connector = mysql_connect($servername,$username,$password)
$con=mysqli_connect("$servername","$username","$password","$db_name")
          or die("Unable to connect");
        // echo "Connections are made successfully::";
      // $selected = mysql_select_db("$db_name", $connector)
      //   or die("Unable to connect");

      //execute the SQL query and return records
          $qry1="SELECT book_name,kart_id FROM book_kart WHERE user_name='$user_name'";
      $result = mysqli_query($con,$qry1); 
      ?>
<div class="header1">
<h1>BOOK STORE</h1>
</div>
<button type="submit" class="btn btn-info signin"><a href="home.php">BACK</a></button>
<div class="parallax1">

</div>
<div class="container">
<div class="table_form">
<div class="page-header tb1">
<h1>YOUR ORDERS</h1>
</div>
<table class="table table-striped tb1">
<form method="POST"  enctype="multipart/form-data" id="form" action="order_status.php" >
 <thead>
        <tr>
          
          <th>BOOK NAME</th>
        
        </tr>
      </thead>
           <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
            <td>
            {$row['book_name']}
            </td>
            <td>
            <input type='radio' name='kart_id' value='{$row['kart_id']}'><h3> view </h3>
            </td>
            </tr>\n";
          }  
        ?>
      </tbody>
<tr>
<td>
</td>
<td>
<button type="submit" id="btn" class="btn btn-success">ORDER STATUS</button>
</td>
</tr>
</form>
</table>
</div>
</div>
<div class="parallax1">
</div>
<div class="panel-footer">
<h3>“Reading is a basic tool in the living of a good life.” </h3>
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