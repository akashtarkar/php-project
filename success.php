<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<html>
    <head>
        <title>Success Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="assignment2css.css" rel="stylesheet" type="text/css"/>
   
    </head>
    <body>
        <div class="jumbotron"><h3>Your order is confirmed.</h3><br><h1>Thank you for shopping with us.</h1><a href="productspage.html">Click here</a> to purchase any other item.</div>
    </body>
</html>
