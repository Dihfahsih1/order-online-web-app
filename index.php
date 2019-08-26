<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P53HMWK');</script>
<!-- End Google Tag Manager -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/logo.jpg" rel="shortcut icon">
    <title>eazi cakes</title>
  
  <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P53HMWK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->   
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"><img src="images/logo.jpg"  width="15% "/> Sweet and Healthy Cakes</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Availables</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

<!--*********************************************START SLIDER************************************************-->

<div class="container-fluid">
    <br>
        <div class="col-md-9 wow fadeInDown">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="background-color:#000; padding:10px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="images/e.jpg" alt="" class=" img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/cake.jpg" alt="" class="img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/e2.jpg" alt="" class="img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/e4.jpg" alt="" class="img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/e3.jpg" alt=""class="img-responsive wow fadeInDown">
                </div>
                 <div class="item">
                  <img src="images/e5.jpg" alt=""class="img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/e6.jpg" alt=""class="img-responsive wow fadeInDown">
                </div>
                <div class="item">
                  <img src="images/e7.jpg" alt=""class="img-responsive wow fadeInDown">
                </div>
                
                <div class="item">
                  <img src="images/e1.jpg" alt=""class="img-responsive wow fadeInDown">
                </div>
                
               
              </div>
                              
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

<!--*********************************************Food PACKAGES************************************************-->
 
            
               
            </div>

        <div class="col-md-3" >
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
            
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome Guest it's <i class="glyphicon glyphicon-calendar"></i> <?php echo date('M d, Y');?></div>
            
            </div>
         
            <div class="panel panel-default wow fadeInDown">
              <!-- Default panel contents -->
              <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Cakes On Special Offer </div>
              <ul class="list-group">
               
                <li class="list-group-item wow fadeInDown">Wedding Cake - <span style="color:#8B8B00; font-weight:bold;">Negotiable Price</span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                 <li class="list-group-item wow fadeInDown">Small Cakes(7inch)   <span style="color:#8B8B00; font-weight:bold;">-Ugshs.60000 </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                  <li class="list-group-item wow fadeInDown">Average size Cakes- <span style="color:#8B8B00; font-weight:bold;">Ugshs.65000 and above </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                   <li class="list-group-item wow fadeInDown">customized Cakes- <span style="color:#8B8B00; font-weight:bold;">Ugshs.150000 and above </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
                    <li class="list-group-item wow fadeInDown">All Cakes, Prices range from <span style="color:#8B8B00; font-weight:bold;">Ugshs.60000 and above depending on the size you want </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>

            
              </ul>
              <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
            </div>
            <br>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location</div>
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown"">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview wow fadeInDown" href="images/map.jpg" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                </div>  
        </div>

        
</div><!--/.container-->
<br><br>

<!--*************************************************** FOOTERS **********************************************-->
 <footer id="footer" class="midnight-blue wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                &copy; 2019 <a target="_blank" href="#" title="#">Cake and Pastries</a>. All Rights Reserved.
                developed by <a href="facebook.com/MugoyaDihfahsih"> MUGOYA DIHFAHSIH</a>
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right wow fadeInDown">
                        <li class="wow fadeInDown"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        
                        <li class="wow fadeInDown"><a href="contacts.php"><i class="fa fa-phone"></i> Contacts</a></li>
                        <li class="wow fadeInDown"><a href="#loginModal" data-toggle="modal" data-target="#loginModal"><i class="fa fa-lock"></i> Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
 <!----loginModal----->
<?php include('loginModal.php');?>      
                     
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>