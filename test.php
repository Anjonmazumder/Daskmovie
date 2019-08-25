<?php
session_start();
$username = $_SESSION['name'];
echo $username;