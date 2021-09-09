<?php

include('session.php');
if(!isset($_SESSION['login_user'])){
  header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];

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
            <form action="editblog.php" method="post" class="myclass text-center" enctype="multipart/form-data">
              <h2 class="text-heading"><input type="text" name="title" value="<?=$row['title']?>"></h2>
              <h5><?=$row['time']?></h5>
              <a><img class="fakeimg" src="<?=$row['image']?>" style="height:400px;"></a>
              <br><br>

                <div class="tab">
                  
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    <table>
                      <tr>
                        <td>CHEMICAL NAME</td>
                        <td><input type="text" name="chem_name" value="<?=$row['chem_name']?>"></td>
                        <!-- <td><?=$row['chem_name']?></td> -->
                      </tr>
                      <tr>
                        <td>CAS NO</td>
                        <td><input type="text" name="cas_no" value="<?=$row['cas_no']?>"></td>
                      </tr>
                      <tr>
                        <td>HIGHLIGHTING FEATURE</td>
                        <td><input type="text" name="grade" value="<?=$row['grade']?>"></td>
                      </tr>
                      <tr>
                        <td>MAJOR APPLICATION</td>
                        <td><input type="text" name="maj_app" value="<?=$row['maj_app']?>"></td>
                      </tr>
                      <tr>
                        <td>INDUSTRIES USED IN</td>
                        <td><input type="text" name="industry" value="<?=$row['industry']?>"></td>
                      </tr>
                      <tr>
                        <td>COLOR</td>
                        <td><input type="text" name="color" value="<?=$row['color']?>"></td>
                      </tr>
                      <tr>
                        <td>PHYSICAL NATURE</td>
                        <td><input type="text" name="phy_nat" value="<?=$row['phy_nat']?>"></td>
                      </tr>
                    </table>
                  </div>
                <br>
                <!-- <p class="text"><input type="text" name="content" value="<?=$row['content']?>"></p>
                <p class="text"><input type="text" name="content2" value="<?=$row['content2']?>"></p>
                <p class="text"><input type="text" name="content3" value="<?=$row['content3']?>"></p> -->
                <textarea id="content" name="content" placeholder="Paragraph 1" style="height:170px;width: 100%;"><?=$row['content']?></textarea><br>
                <textarea id="content2" name="content2" placeholder="Paragraph 2" style="height:170px;width: 100%;"><?=$row['content2']?></textarea><br>
                <textarea id="content3" name="content3" placeholder="Paragraph 3" style="height:170px;width: 100%;"><?=$row['content3']?></textarea><br>
                <input type="file" id="image_upload" name="image_upload">
                <input type="submit">
            </form>
            <form action="deleteblog.php" method="post">
              <input type="hidden" name="id" value="<?=$row['id']?>">
              <input type="submit" value="Delete This Blog Entry (Unrecoverable)">
            </form>
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
                    
                    <?php
                      }
                  } else {
                      echo "No records found";
                  }
                  ?>
                    
<!--
            <a href="./images/2.jpg" target="_blank"><img class="fakeimg" src="./images/2.jpg" style="height:300px;"></a>
            <br><br>
                    <p class="text">Jatin Maheshwari</p>
            <p class="text">Some text about me in culpa qui officia deserunt mollit anim..</p>
-->
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
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