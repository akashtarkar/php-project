<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<html>
    <head>
        <title>Products page</title>
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
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1><p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p></div>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="img/5.jpg" class="img-responsive">
                <div class="caption">
                    <h3>Canon EOS</h3>
                    <p>Price:Rs.36000.00</p> 
                    <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/2.jpg" alt="item2" class="img-responsive"/>
                    <div class="caption">
                        <h3>Sony DSLR</h3><P>Price:Rs.40000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/3.jpg" alt="item3" class="img-responsive"/>
                    <div class="caption">
                        <h3>Sony DSLR</h3><P>Price:Rs.50000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/4.jpg" alt="item4" class="img-responsive"/>
                    <div class="caption">
                        <h3>Olympus DSLR</h3><P>Price:Rs.80000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/9.jpg" alt="item5" class="img-responsive"/>
                    <div class="caption">
                        <h3>Titan Model#301</h3><P>Price:Rs.13000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/10.jpg" alt="item6" class="img-responsive"/>
                    <div class="caption">
                        <h3>Titan Model#201</h3><P>Price:Rs.3000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/11.jpg" alt="item7" class="img-responsive"/>
                    <div class="caption">
                        <h3>HMT Milan</h3><P>Price:Rs.8000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/12.jpg" alt="item8" class="img-responsive"/>
                    <div class="caption">
                        <h3>Faber Luba #111</h3><P>Price:Rs.18000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/8.jpg" alt="item9" class="img-responsive"/>
                    <div class="caption">
                        <h3>H&W</h3><P>Price:Rs.800.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/6.jpg" alt="item10" class="img-responsive"/>
                    <div class="caption">
                        <h3>Luis Phil</h3><P>Price:Rs.1000.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/13.jpg" alt="item11" class="img-responsive"/>
                    <div class="caption">
                        <h3>John Zok</h3><P>Price:Rs.1500.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/14.jpg" alt="item12" class="img-responsive"/>
                    <div class="caption">
                        <h3>Jhalsani</h3><P>Price:Rs.1300.00</P>
                        <button type="button" name="Add to cart" class="btn btn-primary">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer>
            
                <center><p>Copyright © Lifestyle Store. All Rights 
Reserved | Contact Us: +91 90000 00000</p></center>
            
        </footer>
    </body>
</html>
