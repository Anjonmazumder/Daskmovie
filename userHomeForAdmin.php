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
                <li class="item"><a href="adminHome.php">Admin Options</a></li>
                <li class="item"><a href="Searchversion.php">Search</a></li>
                <li class="item"><a href="booking.php">Book</a></li>
                <li class="item"><a href="showMovie.php">Movies</a></li>
                <li class="item"><a href="logout.php">Logout</a></li>
            </ul>
            <?php require'slideshow.php';
            ?>
        </div>
    </body>
</html>
