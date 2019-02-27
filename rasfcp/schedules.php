<html>
    
    
    <head>
    <title>Schedules</title>
         
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
            
        
        <style type="text/css">
            h2{
                color: blue;
            }
            body {background-color:aliceblue;
   }
           
        </style>
    </head>
    <a href="adminportal.php"> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home
</button></a><hr>
    
    <body>
        
  <?php include ('conn1.php');
     
    
    $querry=mysqli_query($conn,"CREATE table if not exists schedules (userid int(255) auto_increment primary key,year varchar(255) not null,course varchar(255) not null,unit varchar(255) not null,time varchar(255) not null,room varchar(255) not null,day varchar(255) not null)") or die(mysqli_error());
    
    ?> 
    
    <?php
    if(isset($_POST['submit'])){
      $year = $_POST['year'];
      $course = $_POST['course'];
      $unit = $_POST['unit'];
      $time = $_POST['time'];
      $room = $_POST['room'];
      $day = $_POST['day'];
      $all="ALL PROGRAMMES";
		
      if ($course==$all){
            echo '<script>window.alert("please select one course.")</script>';
        }
    
      else {
      $query = "INSERT INTO schedules (year,course,unit,time,room,day) VALUES ('$year' ,'$course', '$unit' , '$time', '$room','$day')";
          
      $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
      
      if (mysqli_affected_rows($conn) > 0) { 
        echo "<script>alert('RECORDS SUCCESSFULLY ADDED');</script>";
}
else {
  echo "<script>alert('Error Occured');</script>";
}
      }
    }
    ?>
    
    
    <form action="" method="post">
    
    <select name="year" >
     <option value="Year One">Year One</option>
     <option value="Year Two">Year Two</option>
    <option value="Year Three">Year Three</option>
    <option value="Year Four">Year Four</option>
    </select>
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
          <select name="unit" >
    <option value="UCI 101">UCI 101</option>
    <option value="UCI 102">UCI 102</option>
    <option value="UC1 103">UC1 103</option>
    <option value="UCI 104">UCI 104</option>
    <option value="UCI 201">UCI 201</option>
    <option value="UCI 202">UCI 202</option>
    <option value="UC1 203">UC1 203</option>
    <option value="UCI 204">UCI 204</option>
    <option value="UCI 301">UCI 301</option>
    <option value="UCI 302">UCI 302</option>
    <option value="UC1 303">UC1 303</option>
    <option value="UCI 304">UCI 304</option>
    <option value="UCI 401">UCI 401</option>
    <option value="UCI 402">UCI 402</option>
    <option value="UC1 403">UC1 403</option>
    <option value="UCI 404">UCI 404</option>
              
    </select>
          <select name="time" >
    <option value="8:00-10:00">8:00-10:00</option>
    <option value="10:30-12:30">10:30-12:30</option>
    <option value="14:00-16:00">14:00-16:00</option>
    </select>
          <select name="room" >
    <option value="TB1">TB1</option>
    <option value="TB2">TB2</option>
    <option value="TB3">TB3</option>
    <option value="TB4">TB4</option>
    </select>
        <select name="day" >
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
    </select>
        <br><br>
    
     <button type="submit" name="submit" class="btn btn-primary" value="login">Submit</button><br/>
    </form>       
    </body>
</html>