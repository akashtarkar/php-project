<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<html>
    <head>
        <title>SIGN UP</title>
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
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                </ul>
            </div>
      </div>
    </nav>
        <br><br><br>
        <div class="container">
            <div class="row">
                    <div class="col-lg-6 col-lg-offset4 col-md-6 col-md-offset3">
                        <h2>Sign Up</h2>
                        <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="Name" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Email" name="Email" required="true">
                        </div>
                        <div class="form-group">
                        <input class="form-control" placeholder="Enter Password" name="Password" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Contact" name="contact" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="City" name="City" required="true">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Address" name="Address" required="true">
                        </div>
                        <button type="button" name="Submit" class="btn btn-primary">Submit</button>
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
