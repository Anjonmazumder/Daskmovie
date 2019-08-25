<?php

require_once 'dbconnection.php';
$hall_id = $_POST['hall'];
$sql = "SELECT * FROM schedule WHERE hall_id ='$hall_id'";
$result = mysqli_query($con, $sql);
$html = '';
while($row=  mysqli_fetch_array($result)){
    $html .= "<option value=".$row['schedule_id'].">".$row['day']." ".$row['slot_start']." ".$row['slot_end']."</option>";
}

echo $html;