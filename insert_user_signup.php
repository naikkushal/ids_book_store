<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/*$servername = "localhost";*/
$servername = "DESKTOP-R3I6ATK";
/*$username = "root";*/
$username = "bookstore";
/*$password = "";*/
$password = "bookstore";
$db_name = "book_store";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pass=md5($_POST['password']);
$profile=$_FILES['profile']['name'];
 $con = mysqli_connect("$servername", "$username", "$password","$db_name");
 //$con=mysqli_connect("$servername","$username","$password","$db_name");
  /*mysql_select_db("$db_name");*/
 $qry2="SELECT email FROM profile_table WHERE email='$email'";
$result=mysqli_query($con,$qry2);
// $r=mysql_num_rows ($qry1);
if(! mysqli_num_rows ($result)==0)
{
   /*echo("<h1>".$email." is already registered</h1><a href='user_sign_up.html'><h1>go back</h1></a>");*/
  echo("<script>alert('this Email ID is used by another user');window.location='user_sign_up.html';</script>");
}
else
{
if(isset($_FILES['profile'])){
      $errors= array();
      $file_name = $_FILES['profile']['name'];
      $file_size =$_FILES['profile']['size'];
      $file_tmp =$_FILES['profile']['tmp_name'];
      $file_type=$_FILES['profile']['type'];
      $file_ext=strtolower(end(explode('.',$file_name)));
    
    
      $img_array= array('user_profile_pic/',$email,'.',$file_ext);
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
         echo("<script>alert('you have successfully signed in');</script>");
      }else{
         // print_r($errors);
         echo("<script>alert('$errors[0]');window.location='user_sign_up.html';</script>");
      }
   }


  if(! $con )
   {
     die('Could not connect:<br>'. mysql_error() );
   }
   
 // mysql_select_db("$db_name");
$qry="insert into profile_table (user_name,email,password,address,profile_pic) values('$name','$email','$pass','$address','$img_name')";
 // $con=mysqli_connect("$servername","$username","$password","$db_name");
$check_qry=mysqli_query($con,$qry);
if(! $check_qry)
{
  die('<br>please check your inputs<br>' . mysql_error());
}
header("location:user_login.html");
}
?>