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
            
            <?php require'userMenu.php';?>
            <?php require'slideshow.php';
            ?>
        </div>
    </body>
</html>
