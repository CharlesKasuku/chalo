<html>

<?php
 
    include('loginprocess.php');
$conn=mysqli_connect("localhost","root","","") or die(mysqli_error());
$querydb=mysqli_query($conn,"create database if not exists UCI") or die(mysqli_error());
$queryuse=mysqli_query($conn,"use UCI") or die(mysqli_error());
$querytable=mysqli_query($conn,"create table if not exists adminstrator(userid int(255) auto_increment primary key,username varchar(255) not null,password varchar(255) not null)")or die(mysqli_error());
    
$querytable1=mysqli_query($conn,"create table if not exists students(userid int(255) auto_increment primary key,course varchar(255) not null,firstname varchar(255) not null,secondname varchar(255) not null,admno varchar(255) not null,password varchar(255) not null)")or die(mysqli_error($conn));
    
    $querytable2=mysqli_query($conn,"create table if not exists lecturer(userid int(255) auto_increment primary key,firstname varchar(255) not null,secondname varchar(255),password varchar(255) not null)")or die(mysqli_error());
    
    $querytable3=mysqli_query($conn,"create table if not exists technicians(userid int(255) auto_increment primary key,firstname varchar(255) not null,secondname varchar(255) not null,password varchar(255) not null)")or die(mysqli_error());
     
    $querry=mysqli_query($conn,"CREATE table if not exists schedules (userid int(255) auto_increment primary key,year varchar(255) not null,course varchar(255) not null,unit varchar(255) not null,time varchar(255) not null,room varchar(255) not null,day varchar(255) not null)") or die(mysqli_error());
    
    $computer=mysqli_query($conn,"CREATE table if not exists computers(userid int(255) auto_increment primary key,computer varchar(255) not null)") or dir(mysqli_error());

    $querytables=mysqli_query($conn,"create table if not exists uploads(userid int(255) auto_increment primary key,note_name varchar(255) not null,note_size varchar(255) not null,note_type varchar(255) not null,uploaded_by varchar(255) not null)")or die(mysqli_error($conn));
    
    
    $pass="kilambo";
    $fpass=password_hash($pass, PASSWORD_DEFAULT);
    
    
    $queryad=mysqli_query($conn,"select * from adminstrator") or die(mysqli_error($conn));
    $roq=mysqli_num_rows($queryad);
    if($roq<1){
        $queryins=mysqli_query($conn,"insert into adminstrator(username,password) values('charlo','$fpass')") or die(mysqli_error($conn)); 
    }
    
?>
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
    <style>
        fieldset{
            width: 30%;
            margin-left: 30%;
            height: 60%;
            border-radius: 10px;
            padding-left:100px!important;
            background-image:url("images/RASFCP2.JPG");  
       }
        
        
    body {background-color:aliceblue;
   }
        span{
            color:aliceblue;
        }
        H6{
             color:aliceblue;
            font-size: medium;
            font-family: times new roman;
        }
        h2{
            color: blue;
                        font-family: times new roman;

        }
    </style>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">

  <ul class="nav navbar-nav navbar">
      <li><a href="admin.php" ><strong><H6>Resource Allocation System For Common Programmes</H6></strong></a></li>


	  
	</ul>


<ul class="nav navbar-nav navbar-right">
    
     <li><a href="studentregister.php"><span class="glyphicon glyphicon-user"></span> student registration</a></li>

      
    </ul>



</div>
        </nav>
             <hr>
        <hr>
       <hr>
    <fieldset><legend>User login</legend>
       
        
<form action="" method="post">
    <select name="drop" >
     <option value="1">Student</option>
     <option value="2">Admin</option>
    <option value="3">Lecturer</option>
    <option value="4">Lab Technician</option>
    </select>
    
    <p><input type="text" name="user" placeholder="enter firstname" required></p>
    <p><input type="password" name="pass" placeholder="enter password" required></p>
     <button type="submit" name="sub" class="btn btn-info" value="login">login</button><br/>
    </form>    
    
    </fieldset>
     
           <footer class="main-footer">

    <strong>Copyright &copy; 2018 <a href="#">RASFCP</a>.</strong> All rights
    reserved.<b>creation by</b> KASUKUde
  </footer>
        
    
    <script src="bootstrap1/jquery-1.11.3-jquery.min.js"></script>
    <script src="bootstrap1/js/bootstrap.min.js"></script>
    </body>
    </html>
