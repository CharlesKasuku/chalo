<?php
	
	require_once 'conn1.php';
include('loginprocess.php');
	
	
	
$queryfetc=mysqli_query($conn,"select * from computers where userid='".$_SESSION['id']."'") or die(mysqli_error());
while($kilab=mysqli_fetch_array($queryfetc)){
    $computer=$kilab['computer'];
}
$queryfetc=mysqli_query($conn,"select * from students where userid='".$_SESSION['id']."'") or die(mysqli_error());
while($kilab=mysqli_fetch_array($queryfetc)){
    $name=$kilab['firstname'];
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
   <style>
       
       
       
       
       .carousel-control.right, .carousel-control.left {
     background-image: none;
     color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 30px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
       
       
       
      .main-footer{position: fixed;
                   left:0;
                    bottom: 10px;
                    width: 100%;
           
           
       }
   body {background-color:ghostwhite;
   color:black;
   }
  
   H3 {color:white;}
   span {font-weight:bold;
           color:red;}
    
  </style>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

	<nav class="navbar  navbar-fixed-top navbar-inverse">
      
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
        
        <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"><strong>maseno university student portal</strong></a>
            </div>
          
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
        <style>
            .wel{
                color: white;
                margin-top: 20px;
                margin-left: 40px;
            }
            html,body{
                height: 100%;
            }
            .center-block{float:none;
            }
            .carousel img{width:500px;height:500px;
            
            }
            
            .caruosel slide,.item active,.item,.active{
                height: 100%;
            }
            .carousel-inner{
                height: 100%;
            }
            img{
                max-height: 100%;
            }
            </style>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="viewschedules.php">view schedules</a></li>
              <li><a href="studentdownload.php">download notes</a></li>
            <li><a href="studentportal.php">notice board</a></li>
              <li class="wel"><strong>Welcome:<?php echo $name;?> Your computer is..:<?php echo $computer ;?></strong></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              
                <li><a href="admin.php"><span class="span fade-in"class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
        
            </li>
          </ul>
        </div>
      </div>
    </nav> 
    
    <br/><br/>
     <hr>
  
    
    
    <h2>Students portal  </h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"All students can access rsource materials from rasfcp"<br><span>NB: access notes above</span></h4>
      </div>
      <div class="item">
        <h4>"UCI"<br><span>class schedules can viewed above</span></h4>
      </div>
      <div class="item">
        <h4>"Not sure what to do with common courses? "<br><span>Read more from maseno university portal</span></h4>
      </div>
    </div>

 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


    
    
    <hr>
</body>

    
   
<footer class="main-footer">

    <strong>Copyright &copy; 2018 <a href="#">RESOURCE ALOCATION SYSTEM FOR COMMON PROGRAMMES</a>.</strong> All rights
    reserved.<b>creation by</b> KASUKUde
  </footer>
    
    
    <script src="bootstrap1/jquery-1.11.3-jquery.min.js"></script>
    <script src="bootstrap1/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>