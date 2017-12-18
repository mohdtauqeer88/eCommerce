<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>My Shop</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
</head>
  <body>     
	 
	 
	 <!-- Main Container Starts Here -->
   <div class="main_wraper">
        
		<!-- header starts -->
       <div class="header_wraper"> 
	       <img src="images/shop.png" style="float:left;height:100px;width:300px">
	       <img src="images/ecom.png" style="float:right;height:100px;width:700px">	   
	   </div>
	   <!-- header ends -->
	   
	   <!-- Navigation Bar starts -->
	   <div id="navbar"> 
	       <ul id="menu">
		      <li><a href="#">Home</a></li>
			  <li><a href="#">All Products</a></li>
			  <li><a href="#">My Account</a></li>
			  <li><a href="#">Sign Up</a></li>
			  <li><a href="#">Shopping Cart</a></li>
			  <li><a href="#">About Us</a></li>
	       </ul> 
        <div id="form">
		   <form method="get" action="result.php" enctype="multipart/form-data">
		   <input type="text" name="user_query" placeholder="Search a Product" />
		   <input type="submit" name="search" value="Search" />
		   </form>
		</div>
          
	   </div>
	   <!-- Navigation Bar Ends -->
	   
	   <!-- Content area starts -->
	   <div class="content_wraper"> 
	         
	       <div id="left_content">
		      <div id="left_content_title">Categories</div>
		      <ul id="cats">
			       <li><a href="#">Computers</a></li>
				   <li><a href="#">Laptops</a></li>
				   <li><a href="#">Mobiles</a></li>
				   <li><a href="#">Shoes</a></li>
				   <li><a href="#">Fashion</a></li>
				   <li><a href="#">Toys</a></li>	  	   
		      </ul>
			  <div id="left_content_title">Brands</div>
		      <ul id="cats">
			       <li><a href="#">Sony</a></li>
				   <li><a href="#">Dell</a></li>
				   <li><a href="#">Samsung</a></li>
				   <li><a href="#">Nike</a></li>
				   <li><a href="#">Levis</a></li>
				   <li><a href="#">Motocorp</a></li>	  	   
		      </ul>
		   </div>
		   <div id="rigth_content">Right Content</div>
	   
	   
	   </div>
	   
	    <!-- Content area Ends -->
	  
	  <div class="footer"> Footer Area</div>
   </div>
   <!-- Main Container Ends Here -->
  </body>
</html>