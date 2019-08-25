<?php
session_start();
require_once 'dbconnection.php';
$username = $_SESSION['name'];
$hall_id = $_POST['hall'];
$movie_id = $_POST['movie'];
$quantity = $_POST['quantity'];
$seat_id = $_POST['seat'];
$schedule_id = $_POST['schedule'];
$query1 = "select * from seat where seat_id='$seat_id'";
$result = mysqli_query($con, $query1);
$row = mysqli_fetch_array($result);
$price = $row['price'];
$total = $price * $quantity;

$query = "insert into booking(user_id,hall_id,movie_id,schedule_id,seat_id,ticket_quantity,total_amount) values('$username','$hall_id ','$movie_id','$schedule_id','$seat_id','$quantity','$total')";
if (mysqli_query($con, $query)) {
    echo 1;
}
else{
    0;
}