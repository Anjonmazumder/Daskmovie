<?php
require 'dbconnection.php';
require_once 'UserHelper.php';
if (isset($_POST['submit'])) {
    $userHelper = new UserHelper();
    $userHelper->registration($con);
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
            <ul class="menu">
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="register.php">Register</a></li>
                <li class="item"><a href="unregsearch.php">Search</a></li>
            </ul><br><br><br>
            <h2>Register</h2>
            <form action="#" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-1 control-label">Email:</label>
                    <div class="col-lg-4">
                        <input type="text" name="email"id="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Password:</label>
                    <div class="col-lg-4">
                        <input type="password" name="password"id="password" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-1 control-label">Name:</label>
                    <div class="col-lg-4">
                        <input type="text" name="name"id="name" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-1"></label>
                    <div class="col-lg-4">
                        <input type="submit" value="register" name="submit" class="col-lg-2 form-control">
                    </div>

                </div>
                
            </form>
        </div>
    </body>
</html>
