<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
	header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from contactus");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style_admin_new.css">
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
                    <a href="index.php" style="text-decoration: none;" class="navbar-brand temp1">PACHISIA CHEMICALS</a>
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

		<?php
		if (mysqli_num_rows($query)>0) {
			while ($row = mysqli_fetch_array($query)) { ?>

				<div id="about" class="container-fluid">
		            <div class="row">
		                <div class="col-sm-8">
		                    <ul>
		                    	<li>Name: <?=$row['name']?></li>
		                    	<li>Email: <?=$row['email']?></li>
		                    	<li>Phone: <?=$row['phone']?></li>
		                    	
		                    	<li>Chemical: <?=$row['chem']?></li>
		                    	<li>Quantity: <?=$row['qty']?></li>
		                    	<li>Message: <?=$row['msg']?></li>
                                <li>Date/Time: <?=$row['timestamp']?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		        <hr>
		        <!--<div class="container-fluid bg-grey">
		            <div class="row">
		                <div class="col-sm-8">
		                    <ul>
		                    	<li>Name: <?=$row['name']?></li>
		                    	<li>Email: <?=$row['email']?></li>
		                    	<li>Phone: <?=$row['phone']?></li>
		                    	<li>Country: <?=$row['country']?></li>
		                    	<li>Chemical: <?=$row['chem']?></li>
		                    	<li>Quantity: <?=$row['qty']?></li>
		                    	<li>Message: <?=$row['msg']?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>-->
		<?php

			}
		} else {
			echo "No records Found";
		}

		?>

        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 4000); 
            }
        </script>
            

        

        <!--<footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </footer>-->

    </body>
</html>
