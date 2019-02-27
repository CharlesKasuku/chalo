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
        h2{
            color: blue;
        }
        </style>
    </head>
    <body>
<?php
        include ('conn1.php');
        ?>

<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
        <h2><a href="studentportal.php">Home</a></h2>
<table>
 <tr>
   <th>Note name</th>
   <th>Note size</th>
   <th>Note type</th>
    <th>uploaded by</th>
  </tr>
 <?php
 $results=mysqli_query($conn,"SELECT * FROM uploads ORDER by userid DESC");
 while($row=mysqli_fetch_array($results)){
     
  ?>
 
  <tr>
  <td><?php echo $row['note_name'];?></td>
  <td><?php echo number_format($row['note_size']/(1024*1024),2);?>MB</td>
  <td><?php echo $row['note_type'];?></td>
  <td><?php echo $row['uploaded_by'];?></td>
  </tr>
  <?php }?>
  </table>
        </body>
    </html>