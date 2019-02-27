<!DOCTYPE html>
<?php

$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
     mysqli_select_db($conn,"admin") or die(mysqli_error());
	
if ( isset($_POST['btn-signup']) ) {
		
		
		$fname = ($_POST['firstname']);
		$sname = ($_POST['secondname']);
        $pass = ($_POST['password']);
		
		
			
			$query = mysqli_query($conn,"INSERT INTO lecturer(firstname,secondname,password) VALUES ('$fname','$sname','$pass')") or die(mysqli_error($conn)) ;
    
			$res = mysqli_query($conn,$query);
				
			
		}			
	
?>
<html>
<head>
<title>student registration</title>
<link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
<style type="text/css">
    
   span {font-weight:bold;
           color:red;}
     body {background-image:url("*.jpg");
        
   color:crimson;
             
   }
    formm-group{width: 30%;
        
    }
    
  </style>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

	<div id="login-form">
    <form method="post" action="" autocomplete="off">
    
    	<div class="col-lg-4" >
        
        	<div class="form-group">
            	<h2 class="well">Kindly Sign Up Below.</h2>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="firstname" class="form-control" placeholder="Enter firstname" maxlength="50" />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="secondname" class="form-control" placeholder="Enter secondname" maxlength="40" />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	 already signed up? <strong><a href="signup.php">Sign in Here..</a></strong>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>
