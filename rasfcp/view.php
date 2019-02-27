<html>
<head>
<title>View Records</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
<style type="text/css">
    h1,h2 {color: blue;
        font-family: sans-serif;
        
    }
    
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
    
<body>

    <h1><a href="adminportal.php">Home</a></h1>

    
<?php

include('conn.php');


if ($result = $mysqli->query("SELECT * FROM students ORDER BY userid"))
{

if ($result->num_rows > 0)
{

echo "<table border='1' cellpadding='10'bold>";


echo "<tr><th>userid</th>
          <th>firstname</th>
          <th>secondname</th>
          <th>admno</th>
          <th>Edit records</th>
          <th>Delete user</th>
     </tr>";

while ($row = $result->fetch_object())
{

      echo "<tr>";
           echo "<td>" . $row->userid . "</td>";
           echo "<td>" . $row->firstname . "</td>";
           echo "<td>" . $row->secondname . "</td>";
           echo "<td>" . $row->admno . "</td>";
           echo "<td><a href='records.php?userid=" . $row->userid . "'>Edit</a></td>";
           echo "<td><a href='delete.php?userid=" . $row->userid . "'>Delete</a></td>";
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