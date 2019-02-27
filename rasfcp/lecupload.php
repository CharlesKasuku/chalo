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
            h2{
                color: blue;
                font-size: xlarge;
                font-family: times new roman;
                
            }
 input[type=file]{
 padding:5px 0px 5px 5px;
 background:wheat;
 border-radius:5px;
}
            
            fieldset {
		border:0px solid #ddd !important;
         width: 30%;
            margin-left: 30%;
		
		padding: 10px;       
		border-radius:4px;
	
		padding-left:100px!important;
	}	
        </style>
    </head>

    <fieldset><a href="lecportal.php"><span class="glyphicon glyphicon-home"></span>home</a><br><h2>Upload file</h2>
<form method="POST" action="" enctype="multipart/form-data">
<input type="file" name="pdf"/><br>
<input type="submit" class="btn btn-primary" name="submit" value="Upload"/>
    </form></fieldset>
<?php
    session_start();
include("conn1.php");
$errors=1;
 
 $target="files/";
 
if(isset($_POST['submit'])){
    
 $target=$target.basename($_FILES['pdf']['name']);
 
 $type=pathinfo($target,PATHINFO_EXTENSION);
 
 if($type!='pdf' && $type!='doc' && $type!='docx' ){
  
     echo'<script>window.alert("Only PDF,DOC,DOCX files format are allowed to Upload")</script>';
  $errors=0;
 }
 
  $filesize=$_FILES['pdf']['size'];
if ($filesize < 100 && $filesize< 1000000){
   
    echo'<script>window.alert("You Can not Upload Large File(10MB)")</script>';
    $errors=0;
   }
  
  if(file_exists($target)){
   
      echo'<script>window.alert("File Already Exist.")</script>';
   $errors=0;
  }

 if($errors==0){
  
      echo'<script>window.alert("Your File Not Uploaded.")</script>';
 }else{
  
     $uplaod_success=move_uploaded_file($_FILES['pdf']['tmp_name'],$target);
   
  if($uplaod_success==TRUE){
   $user=$_SESSION['username'];
   $name=$_FILES['pdf']['name'];
   $size=$_FILES['pdf']['size'];
   $result=mysqli_query($conn,"INSERT INTO uploads (note_name,note_size,note_type,uploaded_by)VALUES('$name','$size','$type','$user')") or die(mysqli_error($conn));
   if($result==TRUE){
   
       echo'<script>window.alert("Successfully Uploaded note and Information Saved.")</script>';
   }
 }
}
}
?>
    </html>