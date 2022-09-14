<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<html>
    <head>
        <title>Settings Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="assignment2css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Lifestyle store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.html" target="blank"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a>
                    </li>
                    <li><a href="setting.html" target="blank"><span class="glyphicon glyphicon-user"></span>  Settings</a></li>
                    <li><a href="logout.html" target="blank"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                </ul>
            </div>
      </div>
        </nav><br><br><br><br>
        
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-lg-offset4 col-md-6 col-md-offset3">
                    <h2>Change Password</h2>
            <form>
                <div class="form-group">
                    <input class="form-control" placeholder="Old Password" name="Old password" required="true">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="New Password" name="New password" required="true">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Re-type New Password" name="Re-type New Password" required="true">
                </div>
                <button type="button" name="Change" class="btn btn-primary">Change</button> 
                </form>
                </div>
                </div>
                
        </div><br><br>
        <footer>
                    <center>
                        <p>Copyright © Lifestyle Store. All Rights 
Reserved | Contact Us: +91 90000 00000</p>
                    </center>    
        </footer>
    </body>
</html>
