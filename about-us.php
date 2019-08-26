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
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Availables</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Mission</h2>
                <p style="text-align:left;margin-right:10%;margin-left:10%">At <b>Eazi Cakes</b> strive to bring a delightful experience offering more than 15 varieties of cakes and cupcakes. using intricate designs and delicate flavor pairings, we are the master of the whole cake concept. Our cakes are not only beautiful, they are mouth watering</p>
            </div>
            <div class="center wow fadeInDown">
                <h2>Vision</h2>
                <p style="text-align:left;margin-right:10%;margin-left:10%">To be premier company thats meets and eceeds the demands of today's lifestyles by providing ready, convenient, innovative and healthy cakes to multi-location requesters nationally while adhering to our core values </p>
               
            </div>
            <div class="center wow fadeInDown">
                <h2>Impressum</h2>
                <p style="text-align:left;margin-right:10%;margin-left:10%">Eazi Cakes is a start-up bakery retail establishment located in Bukoto Kampala.
Eazi Cakes expects to catch the interest of a regular loyal customer base with 
its broad variety of pastry products. <br>
Eazi Cakes aims to offer its products at a competitive price to meet the demand 
of the middle-to higher-income local market area residents</p>
               
            </div>
        
            <div class="center wow fadeInDown">
                <h2>Cake Ordering Profile</h2>
                <p style="text-align:left;margin-right:10%;margin-left:10%">Eazi Cakes Services aim to provide excellent quality service to client ensuring customer satisfaction through a service with value and personalization performed by a highly knowledgeable and experienced professional.<br> My concentration shall and always will be to assist the clients in achieving their dream of a perfect food eating while maintaining my ideas and integrity in the line of customer.</p>
            </div>
        </section>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

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