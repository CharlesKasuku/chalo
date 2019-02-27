<?php
	ob_start();
	session_start();
	require_once 'conn.php';
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>

<link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css" type="text/css"  />
 <link rel="stylesheet" href="bootstrap1/css/bootstrap.css" type="text/css"  /> 
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap.min.css.map" type="text/css"  />
    <link rel="stylesheet" href="bootstrap1/css/bootstrap-theme.css" type="text/css"  />
<style type="text/css">
   .main-footer{position: fixed;
                   left:0;
                    bottom: 10px;
                    width: 100%;
         }
    body {background-color:aliceblue;
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
            <a href="#" class="navbar-brand"><strong>Lecturer management site</strong></a>
            </div>
          
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="lecview.php">View Students</a></li>
              <li><a href="lecupload.php">Upload Resources</a></li>
            <li><a href="lecschedules.php">Schedule Classes</a></li>
              <li><a href="lecinsert.php">Add Computers</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            
              
             
                <li><a href="admin.php"><span class="span fade-in"class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
            
          </ul>
        </div>
      </div>
    </nav> 
    
    <br/><br/>
     <hr>
    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="carousel-ex">
            <ol class="carousel-indicators">
                                <li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-ex" data-slide-to="1"></li>
                                <li data-target="#carousel-ex" data-slide-to="2"></li>
                                <li data-target="#carousel-ex" data-slide-to="3"></li>
                                <li data-target="#carousel-ex" data-slide-to="4"></li>
                                <li data-target="#carousel-ex" data-slide-to="5"></li>
                                <li data-target="#carousel-ex" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                <img src="images/image7.jpg" class="img-circle" width="50%" height="100%"alt="image6">
                    <div class="carousel-caption">
                   <br/> <h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image7.jpg" class="img-circle" width="50%" alt="image6">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image5.JPG" class="img-circle" width="50%" alt="image5">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image2.jpg" class="img-circle" width="50%" alt="image7">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image7.jpg" class="img-circle" width="50%" alt="image7">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image4.jpg" class="img-circle" width="50%" alt="image4">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <div class="item">
                <img src="images/image5.jpg" class="img-circle" width="50%" alt="image5">
                    <div class="carousel-caption">
                    <br/><h2>lec portal</h2>
                    </div>
                </div>
                <a href="#carousel-ex" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left">previous</span>
                </a>
                 <a href="#carousel-ex" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right">next</span>
                </a>
            </div>
        </div>
    </div>
    
    <hr>
</body>

    
   
<footer class="main-footer" position="center">

    <strong>Copyright &copy; 2018 <a href="#">RASFCP</a>.</strong> All rights
    reserved.<b>creation by</b> KASUKUde
  </footer>
    
    
    <script src="bootstrap1/jquery-1.11.3-jquery.min.js"></script>
    <script src="bootstrap1/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>