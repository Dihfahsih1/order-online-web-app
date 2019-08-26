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
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Availables</a></li>
                        <li class="active"><a href="contacts.php">Contacts</a></li>
                                                          
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<!--*********************************************START OF CONTACT INFO****************************************-->
<body>
<br><br>
<div class="container">
        <section id="contact-info">
                <center><span style="font-size:35px; font-weight:bold; font-family:verdana; color:#8B8B00;">How to Reach Us?</span></center>

            <div class="left wow fadeInDown">
                <hr>
               <div class="col-md-6">
                <img src="images/eazi.jpg" class="img-responsive pull-right" />
               </div> 
               <div class="col-md-6">
                <p class="lead">
                    <br>
                    <p><span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">Eazi Cakes</span>
                    <br><b>Address:</b> Bukoto, Kampala Uganda<b><br>Tel/Phone:</b> +256704706269 or +256784231485<b><br>Email Address:</b> eazicakes@gmail.com</p>
                    <hr>
                    <span style="font-size:20px; font-weight:bold; font-family:verdana; color:red;">We are open</span>
                    <p><b>MONDAY TO SATURDAY -- 8:00AM - 10:00PM</b></p>
                </p>
                <div class="panel panel-default wow fadeInDown">
                    <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Location Of Eazi Cakes</div>
                </div>

                    <div class="recent-work-wrap class="wow fadeInDown"">
                        <img class="img-responsive wow fadeInDown" src="images/map.jpg" alt="">
                       
                            <div class="recent-work-inner">
                                <a class="preview wow fadeInDown" href="images/map.jpg" rel="prettyPhoto"><br><span class="btn btn-success btm-sm pull-right">Preview Map</span></a>
                            </div> 
                    </div>
                <hr>
                <table style="width:80px;">
                    <tr>
                        <td><a href="http://www.facebook.com/eazicakes"><img data-toggle="tooltip" src="images/ico/Facebook.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.instagram.com"><img src="images/ico/icons_Instagram.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.twitter.com"><img src="images/ico/Twitter.png" class="img-responsive" /></a></td>
                        <td><a href="http://www.youtube.com"><img src="images/ico/YouTube.png" class="img-responsive" /></a></td>
                    </tr>
                </table>

                </div>
            </div>
        
        </section>
</div>
<br><br>
<!--*************************************************** FOOTERS **********************************************-->

<?php include('includes/footer.php');?><!--/#footer-->
    <?php include('loginModal.php')?>
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