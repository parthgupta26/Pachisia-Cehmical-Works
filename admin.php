<?php
/*include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: admin.php"); //Redirecting to Login
}

$user = $_SESSION['login_user'];*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style_admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    <a href="index.php" style="text-decoration: none;" class="navbar-brand">PACHISIA CHEMICAL WORKS</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" style="text-decoration: none;">HOME</a></li>
                        <li><a href="admin.php" style="text-decoration: none;">ADMINISTRATOR LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br><br><br><br><br><br><br><br><br>

                  <div class="container temp3">
                      <div class="row">
                        <div class="column text-center">

                          <form action="login.php" method="post">

                            <h1 style="margin-top: 0px;">Login Here</h1><br>
                            <input type="text" name="username" placeholder="Username" autocomplete="off" required><br>
                            <input type="password" name="password" placeholder="Password" autocomplete="off" required><br>
                            <input type="submit" name="submit" value="Submit">

                          </form>

                       </div>
                      </div>
                    </div>
                                
    </body>
</html>
