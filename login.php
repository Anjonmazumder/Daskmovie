<!DOCTYPE html>
<?php
session_start();
require_once 'dbconnection.php';
require_once 'UserHelper.php';
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
            <ul class="menu">

                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="register.php">Register</a></li>
                <li class="item"><a href="unregsearch.php">Search</a></li>

            </ul>
            <h2>Login</h2>
            <?php
            if (isset($_POST['submit'])) {
                $userHelper = new UserHelper();
                $userHelper->checkLogin($con);
            }
            ?>
            <form action="#" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-1 control-label">Username:</label>
                    <div class="col-lg-4">
                        <input type="text"name="uname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Password:</label>
                    <div class="col-lg-4">
                        <input type="password" name="pass" class=" form-control">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1"></label>
                    <div class="col-lg-4">
                        <input type="submit" value="Login" name="submit" class="col-lg-2 form-control">
                    </div>

                </div>
            </form>
        </div>
    </body>
</html>
