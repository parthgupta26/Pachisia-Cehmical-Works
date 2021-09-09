<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
  header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style2.css">
        <script src="myscripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" style="background: #3d7ab8">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a href="index.php" style="text-decoration: none;" class="navbar-brand temp1">PACHISIA CHEMICAL WORKS</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right temp2">
                    	<li><a href="queries.php">Queries</a></li>
                    	<li><a href="contact_queries.php">Contact Queries</a></li>
                        <li><a href="addblogs.php">Add Blogs</a></li>
                        <li><a href="blogedit.php">Edit Blogs</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br>


       <!--  <div class="row">
            <div class="col">
                <h2 class="text-center">OUR LOCATION</h2> 
            </div>
        </div> -->

        <img class="bg-image" src="./images/22.png">
        <div class="bg-text">
          <h1 style="font-size: 60px;">BLOGS</h1>
        </div>

        <br><br><br><br>
<!--
        <div class="container">
            <div class="row">
                <div class="column demo3">
                    <p class="demo1" style="color: darkgrey">HEADQUARTERS</p>
                    <p class="demo2">NEW DELHI, INDIA</p>
                    <p class="card-text"><i class="fa fa-map-marker temp" aria-hidden="true"></i>Plot No. 71, Khasra No. 20/1, Street No. 8, Burari Road, Swarup Nagar</p>
                    <p class="card-text"><i class="fa fa-phone temp" aria-hidden="true"></i>9958636330 / 8860429715</p>      
                    <p class="card-text"><i class="fa fa-envelope temp" aria-hidden="true"></i>pcworks111@gmail.com</p>
                    <button onclick="location.href='maps.html'" class="button">Directions &rarr;</button>
                </div>
                <div class="column demo4">
                    <img src="./images/21.jpeg" width="500" height="350">
                </div>
            </div>
        </div>

        <br><br><br><br>
-->

<div class="container temp3">
    <div class="row">
        <div class="column">
            <form action="blog_upload.php" method="post" class="myclass text-center" enctype="multipart/form-data">
                <p class="text-center myclass1">Please Enter Your Blog Details Below</p>
                <div class="myclass3">
                    <input type="text" id="chem_name" name="chem_name" placeholder="Chemical Name" style="height: 60px;" required>
                </div>
                <div class="myclass4">
                    <input type="text" id="cas_no" name="cas_no" placeholder="Cas Number" style="height: 60px;" required>
                </div>
                <div class="myclass3">
                    <input type="text" id="grade" name="grade" placeholder="Grade" style="height: 60px;" required>
                </div>
                <div class="myclass4">
                    <input type="text" id="maj_app" name="maj_app" placeholder="Major Application" style="height: 60px;" required>
                </div>
                <div class="myclass3">
                    <input type="text" id="industry" name="industry" placeholder="Industry" style="height: 60px;" required>
                </div>
                <div class="myclass4">
                    <input type="text" id="color" name="color" placeholder="Color" style="height: 60px;" required>
                </div>
                <div class="myclass3">
                    <input type="text" id="phy_nat" name="phy_nat" placeholder="Physical Nature" style="height: 60px;" required>
                </div>
                <div class="myclass4">
                    <input type="text" id="title" name="title" placeholder="Blog Title" style="height: 60px;" required>
                </div>
                <textarea id="content" name="content" placeholder="Write your blog here.." style="height:170px"></textarea>
                <textarea id="content2" name="content2" placeholder="Paragraph 2" style="height:170px"></textarea>
                <textarea id="content3" name="content3" placeholder="Paragraph 3" style="height:170px"></textarea>
                <input type="file" id="image_upload" name="image_upload">
                <input type="submit">
            </form>
        </div>
    </div>
</div>
<br><br><br><br>

    <div class="footer">

            <div class="footer-content">
                <div class="footer-section about">
                    <h1 class="logo-text"><span>PACHISIA</span> CHEMICALS</h1>
                    <p>
                        The sole proprietor firm after establishing its presence in the local 
                        market and having an extensive understanding and knowledge of the Indian Chemical Industry has made a name for 
                        itself in North India. In Pachisia Chemical Works, we make sure what we supply is of the asked quality and nothing 
                        less.
                    </p>
                    <div class="contact">
                        <span><i class="fa fa-phone"></i> &nbsp; 9958636330 / 8860429715</span>
                        <span><i class="fa fa-envelope"></i> &nbsp; pcworks111@gmail.com</span>
                    </div>
                    <div class="socials">
                        <a href="index.php"><i style="color: #1DA1F2" class="fa fa-facebook"></i></a>
                        <a href="index.php"><i style="color: #C13584" class="fa fa-instagram"></i></a>
                        <a href="index.php"><i style="color: #1DA1F2" class="fa fa-twitter"></i></a>
                        <a href="index.php"><i style="color: #FF0000" class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <br>
                    <ul class="a">
                        <div class="myclass11"><a href="contact.php"><li>Blog</li></a>
                        <a href="contact.php"><li>Contact Us</li></a></div>
                        <div class="myclass2"><a href="index.php#products"><li>Our Products</li></a>
                        <a href="maps.html"><li>Our Location</li></a></div>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; Pachisia Chemicals 2020 | Privacy Policy | Terms & Conditions | <a href="authors.html">Design Credits</a>
            </div>

        </div>

    </body>
</html>