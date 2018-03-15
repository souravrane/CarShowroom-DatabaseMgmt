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
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>THE COMPANY ORDER SUMMARY
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
         
         
         
          <div class="s">
                 
                 
                  <table class="table table-bordered table-responsive table-striped table-hover table-condensed text-center " >
        
                    <tr>
                        <th class = "text-center">ORDER NUMBER</th>
                        <th class = "text-center">CUSTOMER ID</th>
                        <th class = "text-center">CUSTOMER NAME</th>
                        <th class = "text-center">CAR MODEL</th>
                        <th class = "text-center">DATE OF ORDER</th>
                       </tr>
                              <?php
                                    $db=mysqli_connect("localhost","root","root","car_showroom");
                                    
                                    //to the  orders    
                                    $getorders= mysqli_query($db, "SELECT * from sale2 ");
                                    $numrows3 =mysqli_num_rows($getorders);
                                    if($numrows3 !=0)
                                    {
                                        while($row3=mysqli_fetch_assoc($getorders))
                                        {
                                                        $dbsaleid=$row3['sale_id'];
                                                        $dbcustomerid=$row3['customer_id'];
                                                        $carnumber=$row3['carmodel'];
                                                        $date=$row3['ordertime'];
                                        
                                                    

                                                    // get his car model name

                                                $getusercarname = mysqli_query($db, "SELECT name from model where model = '".$carnumber."'");
                                                $numrows2 =mysqli_num_rows($getusercarname);
                                                if($numrows2 !=0)
                                                {
                                                    while($row2=mysqli_fetch_assoc($getusercarname))
                                                    {
                                                        $dbusercarname=$row2['name'];
                                                    }
                                                }
                                                  
                                                   // to get the customer  name 
                                                $getusername= mysqli_query($db, "SELECT name from customer where c_id = '".$dbcustomerid."'");
                                                $numrows =mysqli_num_rows($getusername);
                                                if($numrows !=0)
                                                {
                                                    while($row=mysqli_fetch_assoc($getusername))
                                                    {
                                                        $dbusername=$row['name'];
                                                    }
                                                }
                                                            echo "<tr>" ;
                                                            echo "<td>$dbsaleid</td>";
                                                           echo "<td>$dbcustomerid</td>";
                                                           echo "<td>$dbusername</td>";
                                                            echo "<td>$dbusercarname</td>";
                                                             echo "<td>$date</td>";
                                                            echo" </tr>";
                                        }
                                    }
                                      
                            ?>
                   </table>

          </div>
          
         
          
          
          
          
          
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>








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
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
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






        
        
       
    	
    	
            





        
        
       
    	
    	
            