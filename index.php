<?php
require_once 'dbconnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>
        <div class="container">
            <h2 class="hello">DASK Movie</h2>
            <ul class="menu">
                <li class="item"><a href="register.php">Register</a></li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="unregsearch.php">Search</a></li>

            </ul>
            
            <?php require'slideshow.php';
            ?>
        </div>
    </body>
</html>
