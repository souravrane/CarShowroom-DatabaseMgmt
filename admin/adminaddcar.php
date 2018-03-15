



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
          <h2>Add a car
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="adminaddcar.php" method="post" >
                    
           <div>
              <label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:566px; height: 40px;" >
                <option value = "">|--select car--|</option>
                <option value = ""> </option>
                
                
				<option value = "Land Cruiser Prado">Toyota Land Cruiser Prado</option>
				<option value = "Fortuner"> Toyota Fortuner </option>
				<option value = "Camry"> Toyota Camry </option>
				<option value = "Innova Crysta"> Toyota Innova Crysta </option>
				<option value = "Etios Cross">Toyota Etios Cross</option>
				
				<option value = ""> </option>
				
				<option value = "R8"> Audi R8</option>
				<option value = "R8"> Audi Q7 </option>
				<option value = "RS7"> Audi RS7 </option>
				<option value = "A8">Audi A8</option>
				<option value = "TT"> Audi TT</option>
				
				<option value = ""> </option>
				
				<option value = "M4"> BMW M4 </option>
				<option value = "X6"> BMW X6 </option>
				<option value = "i8">BMW i8</option>
				<option value = "M3"> BMW M3</option>
				<option value = "X3"> BMW X3 </option>
				
				<option value = ""> </option>
				
				<option value = "Trailblazer"> Chervolet Trailblazer </option>
				<option value = "Cruze">Chervolet Cruze</option>
				<option value = "Sail"> Chervolet Sail</option>
				<option value = "Beat"> Chervolet Beat </option>
				<option value = "Volt"> Chervolet Volt</option>
								
				<option value = ""> </option>
				
				<option value = "Db11"> Aston Martin Db11 </option>
				<option value = "Rapide">Aston Martin Rapide</option>
				<option value = "Vanquish"> Aston Martin Vanquish</option>
				<option value = "Vantage"> Aston Martin Vantage </option>
				<option value = "Vulcan"> Aston Martin Vulcan</option>				
				<option value = ""> </option>
				
				<option value = "Cedia"> Mitsubishi Cedia </option>
				<option value = "Lancer">Mitsubishi Lancer</option>
				<option value = "Montero"> Mitsubishi Montero</option>
				<option value = "Outlander"> Mitsubishi Outlander </option>
				<option value = "Pajero"> Mitsubishi Pajero</option>
			</select>
             </div>
             
    
             
             
            <div><br/>
               <label>Chasis Number</label>
      <input type="number" class="form-control transparent-input"  placeholder="chasis" name="chasis">
             </div>
             
             
            <div><br/>
               <label>Color</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="color" name="color">
             </div>
 
 
            <div><br/>
                <button type="submit" name="add" class="btn btn-warning" value="add" onClick='alert("Car added to the Database")'>Add car</button>
             </div>
         </form>     
          </div>
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>








<div class="footer">
	<div class="wrap">
	   <div class="footer-top">				
				
		</div>
	</div>
</div>		

</body>
</html>





<?php 

$db=mysqli_connect("localhost","root","root","car_showroom");

// REGISTER USER
if(isset($_POST['add'])) 
{
    
    $cmodel = $_POST['model'];	// receive all input values from the form
    $chasis = $_POST['chasis'];    
	$color = $_POST['color'];
    
    
    $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
                
                $numrows =mysqli_num_rows($getmodelno);
                if($numrows !=0)
                {
                    while($row=mysqli_fetch_assoc($getmodelno))
                    {
                        $dbmodelno=$row['model'];

                    }
                }
    
	
	
		
    
        $query = "INSERT into car values ('$chasis','$dbmodelno','$color')";
        
		mysqli_query($db, $query);

       
		
	
	
}

 ?>

    	
    	
            