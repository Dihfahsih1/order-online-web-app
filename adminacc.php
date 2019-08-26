<?php
 session_start();
 include('includes/dbconn.php');
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
    <title>ADMIN | EAZI CAKES</title>
    
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
<body>
  <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  /button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"><img src="images/logo.jpg"  width="15% "/> Sweet and Healthy Cakes</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th"></span> Cakes Module<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="addcnp.php"> Add Cakes </a></li>
                              <li><a href="update_cnp.php"> Update Cakes </a></li>
                            </ul>
                        </li>
                        <li id="reservation" class="wow fadeInDown"><a href="index.php"><span class="glyphicon glyphicon-calendar"></span> Orders</a></li>
                        <li id="admin" class="active wow fadeInDown"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li id="logout" class="wow fadeInDown"><a id="logoutbtn" href='<?php echo "logout_process.php?logout=1"?>'><span class="glyphicon glyphicon-share"></span> Logout</a></li>                  
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        <br>
     
<div class="container wow fadeInDown">
    <div class="row">
        </div>
        <div class="col-md-6" style="border: solid #CFCFCF 2px; border-radius: 10px;">
        <div class="alert alert-success" id="infomsg" style="text-align: center"></div> 
        <center><img src="images/logo.jpg" class="img-responsive wow fadeInDown" style="height:200px;" /></center>
        <div>
            <?php
                
                
                $id = $_SESSION['proprietor_id'];
                $sql = ("SELECT * FROM admininfo WHERE id='$id'");
                $result=mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result))
                    {
                        $name = $row['name'];
                        $avatar = $row['avatar'];
						$email = $row['email'];
						$phone = $row['contact'];
                        $username = $row['username'];
                        $password = $row['password'];
						
                    }
                ?>
            
        <h3 style="text-align:center; font-weight:bold;" class="wow fadeInDown">Admin Account Information</h3>
        <hr>
            <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                <dt>Admin Name</dt><dd><?php echo @$name ?></dd>
                
                <dt>Phone#</dt><dd><?php echo @$phone ?></dd>
                <dt>Email </dt><dd><?php echo @$email ?></dd>
                <dt>Username</dt><dd><?php echo @$username ?></dd>
                <dt>Password</dt><dd><?php echo '********'; ?></dd>
              
            </dl>
        <hr>
        </div>  
             <form class="form-horizontal" name="adminacc" id="adminacc" method="POST" action="adminacc_process.php" style="margin-top: 20px;">
                <table>
                   <tr>
                            <td style="text-align:right;font-weight:bold;">Profile Avatar: &emsp;</td>
                            <td style="text-align:center;">&emsp; <input type="file" name="image" required /></td>
                    </tr>
                </table>
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label wow fadeInDown">Admin Name</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="name" name="proprietor_name" placeholder="<?php echo $name?>" required>
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Phone</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="Phone" name="phone" placeholder="<?php echo $phone?>"required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Email</label>
                    <div class="col-sm-6">
                    <input type="email" class="form-control wow fadeInDown" id="email" name="email" placeholder="<?php echo $email?>"required>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Username</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="username" name="nuname" placeholder="New username here." required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="npassword" class="col-sm-4 control-label wow fadeInDown">Password</label>
                    <div class="col-sm-6">
                    <input type="password" class="form-control wow fadeInDown" id="npassword" name="npword" placeholder="New password here." required>
                    </div>
                </div> 
                 
                            
                
                <hr>
                <em style="color:red;" class="wow fadeInDOwn"> Note Fill up the fields before hitting save changes button</em>
                <div class="form-group">
                   
                    <center><input type="submit" class="btn btn-success wow fadeInDown" name="update" value="Save Changes">
                </center></div>
              </form>  
              </div>
        </div>
   
</div>

<script>
    $("#page").removeClass();
    $("#messages").removeClass();
    $("#admin").addClass("active");
    
    $("#infomsg").hide();
    
    $('#submit').click( function() {
          $.post( $("#adminacc").attr("action"),
                 $("#adminacc :input").serializeArray(),
                 function(info) { 
                   $("#infomsg").show();
                   $("#infomsg").empty();
                   $("#infomsg").html(info);
                 });    
        $("#adminacc").submit( function() {
           return false;    
        });
    });

</script>

<br><br><br>
<!--*************************************************** FOOTERS **********************************************-->
  
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>&copy; 2018 eazicakes. All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>