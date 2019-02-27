<html>
    <head>
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
        
        </style>
    </head>
    <body>
<?php
        include ('conn1.php');
        ?>

<hr/>
<link rel="stylesheet" href="style.css" type="text/css"/>
<table>
 <tr>
   <th>Note name</th>
   <th>Note size</th>
   <th>Note type</th>
    <th>Download notes</th>
  </tr>
 <?php
 $result=mysqli_query($conn,"SELECT * FROM uploads ORDER by ID DESC");
 while($row=$result->fetch_array()){
  ?>
 
  <tr>
  <td><?php echo $row['note_name'];?></td>
  <td><?php echo number_format($row['note_size']/(1024*1024),2);?>MB</td>
  <td><?php echo $row['note_type'];?></td>
  <td><a href="download.php?pdf=<?php echo $row['note_name'];?>">Download</a></td>
  </tr>
  <?php }?>
  </table>
        </body>
    </html>