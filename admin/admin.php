
<?php
    session_start();
if(!isset($_SESSION["admin_name"]))
{
    header("location: adminlogin.php");
}

?>







<!DOCTYPE HTML>
<html>
<head>
<title>Administrator</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>





<body>


<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
		 </div>
		 
		 
		 <div class="cart">
			
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					<li class="active"><a href="admin.php">Home</a></li>
					 <li><a href="admincars.php">cars</a></li>
                     <li><a href="adminaddcar.php">Car++</a></li>
                     <li><a href="adminorders.php">Orders</a></li>
                     <li><a href="adminlogout.php">Logout</a></li> 
		     	</ul>
               
               
                
			 <div class="clear"></div>
			 
			</div>	
                    
						
		</div>	
        <h1 style="margin-left: 500px; margin-top: 220px; color: aliceblue; font-size: 20px;"><u>ADMINISTRATOR</u></h1>
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>



<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">
		                
	      			</div>
			</div>
	</div>
</div>







<br><br>
<div class="footer">
	<div class="wrap">
	   <div class="footer-top">			
				
				
				
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>This is a CAR selling dealer</li>
						     	  <li>Please read our Terms and Conditions </li>
						     </ul>
						</div>
				   </div>
				</div>
								
				
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="https://www.google.com" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+1 111-111-1111</p>
						<span>support@autoexpress.com</span>
					</div>
				</div>
				
				<div class="clear"></div>
		</div>
	</div>
</div>

</body>
</html>
        
        
        
 
        
        
        
        
        
        
        
        
        
        

    	
    	
            