<!DOCTYPE html>
<?php

$conn=mysqli_connect("localhost","root","") or die(mysqli_error($conn));
     mysqli_select_db($conn,"UCI") or die(mysqli_error());
	

if ( isset($_POST['btn-signup']) ) {
		
		$course = ($_POST['course']);
		$fname = ($_POST['firstname']);
		$sname = ($_POST['secondname']);
		$admno = ($_POST['admno']);
        $pass = ($_POST['password']);
        $all="ALL PROGRAMMES";
		
    $query_confirm = mysqli_query($conn,"SELECT * FROM students WHERE admno='$admno'");
    $query_con=mysqli_num_rows($query_confirm);
        if ($query_con>0){
            echo '<script>window.alert("admno already exist")</script>';
        }
            
    else  if ($course==$all){
            echo '<script>window.alert("please select one course.")</script>';
        }
    
			
    else  if (strlen($fname) < 3) {
			
			echo '<script>window.alert("name cannot contain less than 3 characters")</script>';
		} 
   else if (strlen($sname) < 3) {
			
			echo '<script>window.alert("name cannot contain less than 3 characters")</script>';
		}
   else if (strlen($admno) < 3) {
			
			echo '<script>window.alert("admission no cannot contain less than 3 characters")</script>';
		}
		else{
		
    
			$query = mysqli_query($conn,"INSERT INTO students(course,firstname,secondname,admno,password) VALUES ('$course','$fname','$sname','$admno','$pass')") or die(mysqli_error($conn)) ;
    
			
				
			if ($query) {
				echo '<script type="text/javascript">';
                echo 'alert("successfully registered");';
                
                    echo'window.location.href="admin.php";';
                    echo '</script>';
                    
			
		}
}
}
	
?>
<html>
<head>
<title>student registration</title>
<link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
<style type="text/css">
    
   span {font-weight:bold;
           color:red;}
  body {background-color:aliceblue;
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
             <select name="course" >       
    <option selected="selected">ALL PROGRAMMES</option>
	<option value="BA COUNSELLING"> BACHELOR OF ARTS (COUNSELLING PSYCHOLOGY, WITH IT) (BA COUNSELLING)</option>
	<option value="BUS ENTREP"> BACHELOR OF BUSINESS ENTREPRENEURSHIP , WITH IT (BUS ENTREP)</option>
	<option value="BSC HRM"> BACHELOR OF SCIENCE ( HUMAN RESOURCE MANAGEMENT, WITH IT) (BSC HRM)</option>
	<option value="BA BUS">BACHELOR OF ARTS (BUSINESS STUDIES) WITH IT (BA BUS)</option>
	<option value="BA CRIM">BACHELOR OF ARTS (CRIMINOLOGY) WITH IT (BA CRIM)</option>
	<option value="BA DEV">BACHELOR OF ARTS (DEVELOPMENT STUDIES) WITH IT (BA DEV)</option>
	<option value="BA ECONO">BACHELOR OF ARTS (ECONOMICS) WITH IT (BA ECONO)</option>
	<option value="BA FINE">BACHELOR OF ARTS (FINE ARTS) WITH IT (BA FINE)</option>
	<option value="BA FRENCH">BACHELOR OF ARTS (FRENCH) WITH IT (BA FRENCH)</option>
	<option value="BA GENDER">BACHELOR OF ARTS (GENDER STUDIES) WITH IT (BA GENDER)</option>
	<option value="BA HIST">BACHELOR OF ARTS (HISTORY AND ARCHEOLOGY) WITH IT (BA HIST)</option>
	<option value="BA INTERIOR">BACHELOR OF ARTS (INTERIOR DESIGN) WITH IT (BA INTERIOR)</option>
	<option value="BA INTREL">BACHELOR OF ARTS (INTERNATIONAL RELATIONS AND DIPLOMACY) WITH IT (BA INTREL)</option>
	<option value="BA KIS">BACHELOR OF ARTS (KISWAHILI) WITH IT (BA KIS)</option>
	<option value="BA LANGUAGE AND COMM">BACHELOR OF ARTS (LANGUAGE AND COMMUNICATION, WITH IT) (BA LANGUAGE AND COMM)</option>
	<option value="BA LIT">BACHELOR OF ARTS (LITERATURE) WITH  IT (BA LIT)</option>
	<option value="BA MUSIC">BACHELOR OF ARTS (MUSIC) WITH IT (BA MUSIC)</option>
	<option value="BA PHIL">BACHELOR OF ARTS (PHILOSOPHY) WITH IT (BA PHIL)</option>
	<option value="BA POLITICAL">BACHELOR OF ARTS (POLITICAL SCIENCE) WITH IT (BA POLITICAL)</option>
	<option value="BA PSYCH">BACHELOR OF ARTS (PSYCHOLOGY) WITH IT (BA PSYCH)</option>
	<option value="BA REL">BACHELOR OF ARTS (RELIGION) WITH IT (BA REL)</option>
	<option value="BA SOCIAL">BACHELOR OF ARTS (SOCIAL WORK, WITH IT) (BA SOCIAL)</option>
             </select>
                </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="firstname" class="form-control" placeholder="Enter firstname" maxlength="50" required/>
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="secondname" class="form-control" placeholder="Enter secondname" maxlength="40" required />
                </div>
            </div>
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            	<input type="text" name="admno" class="form-control" placeholder="Enter your admno" maxlength="40" required/>
                </div>
            </div>
            
            
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" required />
                </div>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
            	<hr/>
            </div>
            
            <div class="form-group">
            	 already signed up? <strong><a href="admin.php">Sign in Here..</a></strong>
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>
