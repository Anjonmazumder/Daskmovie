<?php
session_start();
if($_SESSION["type"] == "user"){
    header('Location: userHome.php');
}
else if($_SESSION["type"] == "admin"){
    header('Location: adminHome.php');
}