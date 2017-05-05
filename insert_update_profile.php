<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "book_store";
 session_start();
$user_id=$_SESSION['user_id'];
$user_name=$_POST['name'];
$address=$_POST['address'];
$profile=$_FILES['profile']['name'];
$con=mysqli_connect("$servername","$username","$password","$db_name");
// if(isset($_FILES['profile'])){
      $errors= array();
      $file_name = $_FILES['profile']['name'];
      $file_size =$_FILES['profile']['size'];
      $file_tmp =$_FILES['profile']['tmp_name'];
      $file_type=$_FILES['profile']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
	  
	  
      $img_array= array('user_profile_pic/',$user_name,'.',$file_ext);
	  $img_name=implode('',$img_array);
      $expensions= array("jpeg","jpg","png");
     //checks for the extentions 
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      //checks for the size
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        move_uploaded_file($file_tmp,$img_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   // }


  if(! $con )
   {
     die('Could not connect:<br>'. mysql_error() );
   }
   
mysql_select_db("$db_name");
$qry="UPDATE profile_table SET user_name ='$user_name', address='$address', profile_pic='$img_name' WHERE user_id = '$user_id'";
$check_qry=mysqli_query($con,$qry);
$_SESSION['user_name']=$user_name;
$_SESSION['address']=$address;
$_SESSION['profile']=$img_name;
if(! $check_qry)
{
	die('<br>please check your inputs<br>' . mysql_error());
}

// session_destroy();
header("location:home.php");
?>