<!DOCTYPE html>
<?php
require_once 'dbconnection.php';
require_once 'Hall.php';
?>
<?php
if (isset($_POST['submit'])) {
    $Hall = new Hall();
    $Hall->addHall($con);
}
?>
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
            <?php 
            require'adminMenu.php';?>
            <h2><center>Add a hall</center></h2>
            <form action="#" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Hall Name</label>
                    <div class="col-lg-4">
                        <input type="text" name="hall"id="hall" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label"></label>
                    <div class="col-lg-4">
                        <input type="submit" value="Add" name="submit" class="form-control">
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
