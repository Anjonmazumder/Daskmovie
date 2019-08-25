<?php
require_once 'dbconnection.php';
$hallNo = $_POST['hall'];
$sql = "SELECT * FROM seat WHERE hall='$hallNo'";
$result = mysqli_query($con, $sql);
$html = '<option value=0>Select a seat</option>';
while($row=  mysqli_fetch_array($result)){
    $html.= "<option value=".$row['seat_id'].">".$row['seat_type']." - ".$row['price']." BDT</option>";
}
echo $html;
