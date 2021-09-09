<?php

$connect_db = mysqli_connect("localhost","chemical_JATIN","5QaDk~i]r.Q-") or die("Cannot connect to server");
mysqli_select_db($connect_db,"chemical_PACHISIA") or die("Cannot connect to the database");

$query = mysqli_query($connect_db,"select * from blog_data ORDER BY id DESC");
$query1 = mysqli_query($connect_db, "SELECT * FROM `blog_data` ORDER BY id DESC LIMIT 0,3")
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style3.css">
    <script src="myscripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

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
                        <li><a href="index.php#about">ABOUT US</a></li>
                        
                        <li class="dropdown">
              <a onclick="myFunction()" class="dropbtn">OUR PRODUCTS</a>
              <div id="myDropdown" class="dropdown-content">
                <a href="poultry.html">VETERINARY FEED ADDITIVES</a>
                <a href="cattle.html">PHARMA ADDITIVES</a>
                            <a href="food.html">FOOD GRADE CHEMICALS</a>
                            <a href="agro.html">AGRO CHEMICALS</a>
                            <a href="special.html">CONSTRUCTION CHEMICALS</a>
                            <a href="cosmetic.html">COSMETIC/CLEANING CHEMICALS</a>
              </div>
            </li>
                        
                        <li><a href="index.php#industries">CONTACT US</a></li>
                        <li><a href="blog.php">BLOG</a></li>   
                        <li><a href="contact.php">VISIT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br>

  


          <!-- <div>
        <h2 class="header">MY BLOG</h2>
      </div> -->

      <div class="row">
        <div class="leftcolumn">
                  <?php
                  if(mysqli_num_rows($query)>0){
                      while ($row = mysqli_fetch_array($query)){
                          ?>
            
            
          <div class="card">
            <h2 class="text-heading"><?=$row['title']?></h2>
            <h5><?=$row['time']?></h5>
            <a style="padding-top: 56.25%"><img class="fakeimg" src="<?=$row['image']?>"></a>
            <br><br>
              <div class="tab">
                  <table>
                    <tr>
                      <td>CHEMICAL NAME</td>
                      <td><?=$row['chem_name']?></td>
                    </tr>
                    <tr>
                      <td>CAS NO</td>
                      <td><?=$row['cas_no']?></td>
                    </tr>
                    <tr>
                      <td>HIGHLIGHTING FEATURE</td>
                      <td><?=$row['grade']?></td>
                    </tr>
                    <tr>
                      <td>MAJOR APPLICATION</td>
                      <td><?=$row['maj_app']?></td>
                    </tr>
                    <tr>
                      <td>INDUSTRIES USED IN</td>
                      <td><?=$row['industry']?></td>
                    </tr>
                    <tr>
                      <td>COLOR</td>
                      <td><?=$row['color']?></td>
                    </tr>
                    <tr>
                      <td>PHYSICAL NATURE</td>
                      <td><?=$row['phy_nat']?></td>
                    </tr>
                  </table>
                </div>
              <br>
            <p class="text"><?=$row['content']?></p>
              <p class="text"><?=$row['content2']?></p>
              <p class="text"><?=$row['content3']?></p>

          </div>

                
                  
                <hr style="color: black">
                  <?php
                      }
                  } else {
                      echo "No records found";
                  }
                  ?>
                  
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2 class="text-heading">Recent</h2>
                    <?php
                  if(mysqli_num_rows($query1)>0){
                      while ($row1 = mysqli_fetch_array($query1)){
                          ?>
                    <h3><?=$row1['title']?></h3>
                    <!-- <img class="fakeimg" src="./images/22.png" style="
                      background-size: cover;
                      background-repeat: no-repeat;
                      background-position: center;
                      border: none;
                      /*padding-top: 56.25%;*/"> -->
                    <img class="fakeimg" src="<?=$row1['image']?>" style="/*background-image: url('./images/22.png');*/
                      background-size: cover;
                      background-repeat: no-repeat;
                      background-position: center;
                      border: none;
                      /*padding-top: 56.25%;*/">

                    <!-- <div class="fakeimg" src="<?=$row1['image']?>"
                  style="/*background-image: url('./images/22.png');*/
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center;
                  border: none;
                  padding-top: 56.25%;"></div> --><br>
                    
                    <?php
                      }
                  } else {
                      echo "No records found";
                  }
                  ?>
                  

                  <!-- <div class="fakeimg" src="./images/22.png" style="padding-top: 56.25%"></div><br> -->
                  
          </div>
        </div>
      </div>





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
                        <div class="myclass11"><a href="contact.php"><li>Contact Us</li></a>
                        <a href="index.php#products"><li>Our Products</li></a></div>
                        <div class="myclass2"><a href="blog.php"><li>Blog</li></a>
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