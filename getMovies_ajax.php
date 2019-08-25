<?php
require_once 'dbconnection.php';
$hallNo = $_POST['hall'];
$sql = "SELECT * FROM movie WHERE hall_id='$hallNo'";
$result = mysqli_query($con, $sql);
$html = '<option value=0>Select a movie</option>';
while($row=  mysqli_fetch_array($result)){
    $html.= "<option value=".$row['movie_id'].">".$row['name']."</option>";
}
echo $html;
