<!DOCTYPE html>
<?php
session_start();
    require 'dbconnection.php';
    if(!isset($_SESSION['name'])){
        return '';
    }
    $username = $_SESSION['name'];
    $results = mysqli_query($con, "select * from user where name='$username'");
    $result = mysqli_fetch_array($results);
    return $result['name'];

function is_logged_in() {
    if (isset($_SESSION['name'])) {
        return true;
    }
    return false;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
