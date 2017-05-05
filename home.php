<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php 
            if(!(isset($_SESSION['user_name']) && $_SESSION['user_name'] != '')){
                header ("Location: login.php");
            }
            ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>home</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/goldstaub.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Marko+One" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
</script>


</head>

<body>
<!-- <?php session_start(); ?> -->
<div class="header1">
<h1>BOOK STORE</h1>



</div>
<button type="submit" class="btn btn-info signout"><a href="logout.php">sign out</a></button>
<button type="submit" class="btn btn-info signout"><a href="my_orders.php">my orders</a></button>
<button type="submit" class="btn btn-info signin"><a href="user_sign_up.html">sign in</a></button>
<div class="container">
	<div class="profile_img">
		<a href="update_profile.php"><img src="<?php echo($_SESSION['profile']); ?>" class="img-circle" alt="profile-pic" width="154" height="106"></a>

	</div>
</div>
<div class="panel-footer">
		<h3>WELCOME <?php echo($_SESSION['user_name']); ?><br></h3>
		
</div>
<div class="container">
<div class="heading">
<h1>BOOKS</h1>
</div>
</div>
<div class="container">
<form method="POST"  enctype="multipart/form-data" id="add_to_kart" action="book_kart.php" >
<div class="row big-flex">
<div class="col-sm-3">
	<div class="topic-1">
    <span>DRAMA</span>
	  <img src="images/drama_icon.png" alt=""/>
       </div>
        <div class="main-cont">
      		
       		<div class="hover-cont">	
       <div class="main-col">
      
    	
             
            
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>A Midsummer Night's Dream</h4>
                     <img src="images/drama_01.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">500</span>
                    </span>
                    
                    <input type="radio" name="book" value="101"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Lyricist: William Shakespeare</p>
    			</div>
    		
            
       </div>
       </div>
       
      
       <div class="hover-cont">	
        <div class="main-col">
    		
			<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>To Kill a Mockingbird</h4>
                     <img src="images/drama_02.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">550</span>
                    </span>
                    <input type="radio" name="book" value="102"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Harper Lee</p>
    			</div>
    		
       </div>
       </div>
       <div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>The Great Gatsby</h4>
                     <img src="images/drama_03.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">749</span>
                    </span>
                    <input type="radio" name="book" value="103"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by F. Scott Fitzgerald</p>
    			</div>
    		
       		</div>
       		</div>


       		<div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>The Fault in Our Stars</h4>
                     <img src="images/drama_04.png">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">799</span>
                    </span>
                    <input type="radio" name="book" value="104"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by John Green</p>
    			</div>
    		
       		</div>
       		</div>


       </div>
    
</div>



<div class="col-sm-3">
	<div class="topic-2">
		<span>ROMANCE</span>
	  <img src="images/romance_icon.png" alt=""/>
	</div>
    
    <div class="main-cont">
      		
       		<div class="hover-cont">	
       <div class="main-col">
      
    	
             
            
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Half Girlfriend</h4>
                     <img src="images/romance_01.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">1500</span>
                    </span>
                    <input type="radio" name="book" value="105"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Chetan Bhagat</p>
    			</div>
    		
            
       </div>
       </div>
       
      
       <div class="hover-cont">	
        <div class="main-col">
    		
			<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>2 States</h4>
                     <img src="images/romance_02.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">550</span>
                    </span>
                    <input type="radio" name="book" value="106"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Chetan Bhagat</p>
    			</div>
    		
       </div>
       </div>
       <div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>I Too Had a Love Story</h4>
                     <img src="images/romance_03.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">749</span>
                    </span>
                    <input type="radio" name="book" value="107"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Ravinder Singh</p>
    			</div>
    		
       		</div>
       		</div>


       		<div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Outlander</h4>
                     <img src="images/romance_04.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">799</span>
                    </span>
                    <input type="radio" name="book" value="108"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Diana Gabaldon</p>
    			</div>
    		
       		</div>
       		</div>


       </div>
</div>




<div class="col-sm-3">
<div class="topic-3">
<span>BIOGRAPHIES</span>
	  <img src="images/bio_icon.png" alt=""/>
</div>
  <div class="main-cont">
      		
       		<div class="hover-cont">	
       <div class="main-col">
      
    	
             
            
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Wings of Fire</h4>
                     <img src="images/bio_01.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">1500</span>
                    </span>
                    <input type="radio" name="book" value="109"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by A. P. J. Abdul Kalam</p>
    			</div>
    		
            
       </div>
       </div>
       
      
       <div class="hover-cont">	
        <div class="main-col">
    		
			<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Steve Jobs</h4>
                     <img src="images/bio_02.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">550</span>
                    </span>
                    <input type="radio" name="book" value="110"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Walter Isaacson</p>
    			</div>
    		
       </div>
       </div>
       <div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>I Am Malala</h4>
                     <img src="images/bio_03.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">749</span>
                    </span>
                    <input type="radio" name="book" value="111"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Christina Lamb and Malala Yousafzai</p>
    			</div>
    		
       		</div>
       		</div>


       		<div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>The Diary of a Young Girl</h4>
                     <img src="images/bio_04.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">799</span>
                    </span>
                    <input type="radio" name="book" value="112"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Anne Frank</p>
    			</div>
    		
       		</div>
       		</div>


       </div>
</div>


<div class="col-sm-3">
	<div class="topic-2">
		<span>COMICS</span>
	  <img src="images/comic_icon.png" alt=""/>
	</div>
    
     <div class="main-cont">
      		
       		<div class="hover-cont">	
       <div class="main-col">
      
    	
             
            
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Justice League, Vol. 1</h4>
                     <img src="images/comic_01.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">999</span>
                    </span>
                    <input type="radio" name="book" value="113"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Geoff Johns</p>
    			</div>
    		
            
       </div>
       </div>
       
      
       <div class="hover-cont">	
        <div class="main-col">
    		
			<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Maus</h4>
                     <img src="images/comic_02.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">559</span>
                    </span>
                    <input type="radio" name="book" value="114"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Author: Art Spiegelman</p>
    			</div>
    		
       </div>
       </div>
       <div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>Arkham Asylum</h4>
                     <img src="images/comic_03.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">1299</span>
                    </span>
                    <input type="radio" name="book" value="115"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Grant Morrison</p>
    			</div>
    		
       		</div>
       		</div>


       		<div class="hover-cont">	
        <div class="main-col">
    		
				<div class="col-1">
                <div class="fa-cont">
      				 <i class="fa fa-file fa-2x white" aria-hidden="true"></i>
      			</div>
   					 <div class="top-cont">
                     <h4>X-Men: Days of Future Past</h4>
                     <img src="images/comic_04.jpg">
                     
   					</div>
					<div class="bot-cont">
                    <div class="pricing-cost">
                    <span class="price-value">
                    <sup>&#8377</sup>
                    <span class="price-number">1799</span>
                    </span>
                    <input type="radio" name="book" value="116"><h3> add</h3>
                    </div>
					</div>
				</div>
    
    			<div class="col-2">
                <p>Book by Chris Claremont</p>
    			</div>
    		
       		</div>
       		</div>


       </div>
</div>


</div>
<button type="submit" id="btn" class="btn btn-success" name="to_kart">add to kart</button>
</form>
</div>
<div class="panel-footer">
<h3>“Reading is a basic tool in the living of a good life.” </h3>
</div>
</body>
</html> 