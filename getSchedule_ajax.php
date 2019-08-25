<?php
require_once 'dbconnection.php';
$movieid=$_POST['movie'];
$sql = "SELECT * FROM movie_schedule INNER JOIN schedule ON movie_schedule.schedule_id=schedule.schedule_id where movie_schedule.movie_id='$movieid'";
$result = mysqli_query($con, $sql);
$html = '<option value=0>Select a schedule</option>';
while($row=  mysqli_fetch_array($result)){
    $html .= "<option value=".$row['schedule_id'].">".$row['day']." ".$row['slot_start']." ".$row['slot_end']."</option>";
}

echo $html;