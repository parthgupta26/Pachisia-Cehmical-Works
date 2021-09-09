<?php
/*
$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from queries");
$row = mysqli_fetch_array($query);
*/
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                
                $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                    
                    if (this.hash !== "") {
                      event.preventDefault();
                      var hash = this.hash;
                      $('html, body').animate({
                        scrollTop: $(hash).offset().top
                      }, 900, function(){
                        window.location.hash = hash;
                      });
                    } 
                  });
                  
                  $(window).scroll(function() {
                    $(".slideanim").each(function(){
                      var pos = $(this).offset().top;
                      var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                          $(this).addClass("slide");
                        }
                    });
                  });
                })
        </script>
        <script>
            function closenav(){
                var element = document.getElementById("myNavbar");
                element.classList.remove("collapse in");
                element.classList.add("collapsing");
                element.classList.remove("collapsing");
                element.classList.add("collapse");
            }
        </script>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-default navbar-fixed-top">
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
                        <li><a href="#about">ABOUT US</a></li>
                        <li><a href="#products">OUR PRODUCTS</a></li>
                        <li><a href="#industries">CONTACT US</a></li>
                        <li><a href="blog.php">BLOG</a></li>   
                        <li><a href="contact.php">VISIT US</a></li>
                        <li><a href="admin.php">ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="w3-content w3-section">
            <img class="mySlides temp">
            <div class="centered xyz">YOUR ONE POINT SOLUTION TO ALL YOUR CHEMICAL ADDITIVES</div>
            <button onclick="location.href='index.php#products'" class="btn1 xyz1">Know More</button>
            <img class="mySlides temp5">
            <div class="centered xyz">WE QUOTE YOU FOR QUALITY</div>
            <button onclick="location.href='contact.php'" class="btn2 xyz1">Get a Quote</button>
            <img class="mySlides temp6">
            <div class="centered xyz">EXPERIENCE OF MORE THAN 25 YEARS</div>
            <button onclick="location.href='index.php#about'" class="btn3 xyz1 bitch">About Us</button>
        </div>

        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              var y = document.getElementsByClassName("xyz");
              var z = document.getElementsByClassName("xyz1");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
                y[i].style.display = "none";
                z[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              y[myIndex-1].style.display = "block";  
              z[myIndex-1].style.display = "block";  
              setTimeout(carousel, 4000);
            }
        </script>
            
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Company</h2><br>
                    <h4 id="temp">Delhi Based Pachisia Chemical Works is a distinguished name engaged in trade of Industrial and Fine 
                        Chemicals established in the year 1994. The sole proprietor firm after establishing its presence in the local 
                        market and having an extensive understanding and knowledge of the Indian Chemical Industry has made a name for 
                        itself in North India. In Pachisia Chemical Works, we make sure what we supply is of the asked quality and nothing 
                        less.</h4><br>    
                </div>
                <div class="col-sm-4" style="padding-left: 150px; padding-top: 50px;">
                    <span class="glyphicon glyphicon-signal logo hide_small"></span>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey ">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo slideanim hide_small"></span>
                </div>
                <div class="col-sm-8">
                    <h2 style="margin-top: 0px;">Our Motto</h2>
                    <h4 id="temp" style="margin-bottom: 0px;"><strong>VISION: </strong>We at, Pachisia Chemicals, cofunction to provide consistent, reliable and quality products to our customers at attractive rates.
                    We want to keep working closely with our customers to ensure Product Satisfaction and focus on their current and future needs.
                     That distinguishes us from others in the market, hence we are fully conscious that at any cost we will maintain our credibility.
                    With huge potential for our products in the market, we are taking risks  and exploring all  facets of the market and are financially as well emotionally invested in our work and we plan to keep it that way.</h4>
                </div>
            </div>
        </div>

        <div id="products" class="container-fluid demo">
            <div class="text-center" id="addspc">
                <h2 class="extra" style="font-size: 40px;color: white">Our Products</h2>
            </div>
            <div class="row slideanim">
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="padding-bottom: 25px;">
                            <h5 style="padding: 0px 10px 0px 10px">VETERINARY FEED ADDITIVES</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='poultry.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>     
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="padding-bottom: 25px;">
                            <h5 style="padding-top: 18px;">PHARMA ADDITIVES</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='cattle.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>       
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="padding-bottom: 25px;">
                            <h5 style="padding-top: 18px;">FOOD GRADE CHEMICALS</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='food.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>    
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="padding-bottom: 25px;">
                            <h5 style="padding-top: 18px;letter-spacing: 2px;">AGRO CHEMICALS</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='agro.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>   
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="padding-bottom: 25px;">
                            <h5 style="padding-top: 18px;">CONSTRUCTION CHEMICALS</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='special.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>   
                <div class="col-sm-2 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h5 style="padding-top: 10px;">COSMETIC / CLEANING CHEMICALS</h5>
                        </div>
                        <div class="panel-footer">
                            <button onclick="location.href='cosmetic.html'" class="btn btn-lg">LIST</button>
                        </div>
                    </div>      
                </div>     
            </div>
        </div>


<div id="industries" class="container-fluid btm_form bg-grey">
    <h2 class="text-center" style="font-size: 40px;">CONTACT US</h2> 
    <div class="container temp3">
        <div class="row">
            <div class="column">
                <p class="normal">GET IN TOUCH</p>
                <p class="light">SEND US A</p>
                <p class="thick">MESSAGE</p>
                <p class="myclass hide_small1"><i class="fa fa-map-marker temp4" aria-hidden="true"></i>Plot No. 71, Khasra No. 20/1, Street No. 8, Burari</p>
                <p class="myclass2 hide_small1">Road, Swarup Nagar, New Delhi, India</p>
                <p class="show_small text-center" hidden><i class="fa fa-map-marker temp4" aria-hidden="true"></i>Street No. 8, Burari Road, Swarup Nagar, New Delhi</p>
                <p class="myclass"><i class="fa fa-phone temp4 " aria-hidden="true"></i>9958636330 / 8860429715</p>      
                <p class="myclass"><i class="fa fa-envelope temp4" aria-hidden="true"></i>pcworks111@gmail.com</p>
            </div>
            <div class="column">
                <form action="add.php" method="post">
                    <div class="myclass3">
                        <input type="text" id="name" name="name" placeholder="Name" style="height: 60px;" required>
                    </div>
                    <div class="myclass4">
                        <input type="email" id="email" name="email" placeholder="Email Id" style="height: 60px;" required>
                    </div>
                    <input type="text" id="cname" name="company" placeholder="Company Name" style="height: 60px;">
                    <textarea id="subject" name="query" placeholder="Write your message.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>
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
                    <ul>
                        <div class="myclass11"><a href="#products"><li>Our Products</li></a>
                        <a href="blog.php"><li>Blog</li></a></div>
                        <div class="myclass22"><a href="contact.php"><li>Contact Us</li></a>
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



