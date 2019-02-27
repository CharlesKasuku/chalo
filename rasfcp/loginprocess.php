 <?php
session_start();
include('conn1.php');
    if(isset($_POST['sub'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $drop=$_POST['drop'];
        $passh=mysqli_real_escape_string($conn,$pass);
        
        if($drop=="1"){
        
        
        $queryfets=mysqli_query($conn,"SELECT * FROM students where firstname='$user' AND password='$pass'") or die(mysqli_error($conn));
        $rows=mysqli_num_rows( $queryfets);
        if($rows>0){
            while($dat=mysqli_fetch_array($queryfets)){
            $_SESSION['id']=$dat['userid'];
          header('location:studentportal.php');
            }
        }else{
            echo'<script>window.alert("Wrong username or password")</script>';
        }
        
        
    }
        
       else if  ($drop=="2"){
        $queryuser=mysqli_query($conn,"select * from adminstrator where username='$user'") or die(mysqli_error($conn));
           $count=mysqli_num_rows($queryuser);
           if($count>0){
               
               
               $querypass=mysqli_query($conn,"select * from adminstrator where username='$user'")or die(mysqli_error($conn));
               while($data=mysqli_fetch_array($querypass)){
                   $passw=$data['password'];
               }
               if (password_verify($pass,$passw)){
                    $_SESSION['user']=$user;
                   
                     header('location:adminportal.php');  
               }else{
            echo'<script>window.alert("Wrong username or password")</script>';
        }
           }else{
            echo'<script>window.alert("Wrong username or password")</script>';
        }
           
           
        
    }
        
        
    else if ($drop=="3"){
       $queryfetz=mysqli_query($conn,"SELECT * FROM lecturer where firstname='$user' AND password='$pass'") or die(mysqli_error($conn));
        $rowz=mysqli_num_rows($queryfetz);
        if($rowz>0){
            $_SESSION['username']=$user;
          header('location:lecportal.php');  
       }else{
            echo'<script>window.alert("Wrong username or password")</script>';
    }
       }
        
   else if($drop=="4"){
            
        $queryfetx=mysqli_query($conn,"SELECT * FROM technicians where firstname='$user' AND password='$pass'") or die(mysqli_error($conn));
        $rowx=mysqli_num_rows( $queryfetx);
        if($rowx>0){
          header('location:technicianportal.php');  
        }else{
            echo'<script>window.alert("Wrong username or password")</script>';
       }
        
   }
    }
    
    
    ?>