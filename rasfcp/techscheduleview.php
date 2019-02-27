<html> 
    
    <head>
           <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
    <style>
        
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 2px ;
        border: black;
}

th, td {color: blue;
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: wheat;
    border: black;
        
} 
    body {background-color:aliceblue;
   }
        </style>
    </head>
    
    <a href="technicianportal.php"> <button type="button" class="btn btn-primary" aria-label="Left Align">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</button></a><br/><br>
    <body>
<?php
    session_start();
    include ('conn1.php');
  

?>
    
    
    <?php

include ('conn.php');

if ($result = $mysqli->query("SELECT * FROM schedules"))
{

if ($result->num_rows > 0)
{

echo "<table border='1' cellpadding='10'bold>";


echo "<tr><th>userid</th>
          <th>year</th>
          <th>course</th>
          <th>unit</th>
          <th>time</th>
          <th>room</th>
          <th>day</th>
     </tr>";

while ($row = $result->fetch_object()){

      echo "<tr>";
           echo "<td>" . $row->userid . "</td>";
           echo "<td>" . $row->year . "</td>";
           echo "<td>" . $row->course . "</td>";
           echo "<td>" . $row->unit . "</td>";
           echo "<td>" . $row->time . "</td>";
           echo "<td>" . $row->room . "</td>";
           echo "<td>" . $row->day. "</td>";
echo "</tr>";
}

echo "</table>";
}

else
{
echo "No results to display!";
}
}
else
{
echo "Error: " . $mysqli->error;
}


$mysqli->close();

?>
        </body>
</html>