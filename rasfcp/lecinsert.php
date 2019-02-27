<html>
    <head>
     <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
<style type="text/css">
 body {background-color:aliceblue;
   }
    
     fieldset {
		border: 1px solid #ddd !important;
         width: 30%;
            margin-left: 30%;
		
		padding: 10px;       
		border-radius:4px;
		background-color:cadetblue;
		padding-left:100px!important;
	}	
    </style>
    </head>
    
<?php
  include('conn1.php');
    
    ?>
   
    <fieldset><legend>Add Computers</legend>
    <a href="lecportal.php"> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
</button></a><br><br>
    
<form action="" method="post"L>
  <input type="text" name="comp" placeholder="Enter computer name" required><br><br>
    

    <input type="submit" class="btn btn-primary" name="subb" value="Submit">
    
    </fieldset>
        
    <?php
if(isset($_POST['subb'])){
    
    $comp=$_POST['comp'];
    
    $queryconfirm=mysqli_query($conn, "select * from computers where computer='$comp'")or die(mysqli_error());
    $rowd=mysqli_num_rows($queryconfirm);
    if($rowd>0){
            echo'<script>window.alert("computer already added")</script>';
        
    }else{
    
    
    
    
    
$queryinsrt=mysqli_query($conn,"insert into computers(computer) values('$comp')") or die(mysqli_error());
    
if($queryinsrt){
    
    echo'<script>window.alert("successfully submitted")</script>';
    
} else{
        echo'<script>window.alert("failed. Please try again")</script>';
}   
    
    
    
    }
    
    
}
    
    
    
    ?>
    
        
    </form>


</html>