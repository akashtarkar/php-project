<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="assignment2css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <?php
        include "header.php";
        ?>
        <br><br><br><!-- comment -->
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>   
                            </form>
                        </div>
                        <div class="panel-footer"><p>Dont't have an account?<a href='#'>Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include"footer.php";
        ?>
    </body>
</html>
