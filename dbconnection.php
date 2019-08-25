 <?php
global $con;
$con=  mysqli_connect("localhost", "root", "", "cinemahall");
if(mysqli_connect_errno()){
    echo"failed to connect the database".mysqli_connect_error();
}
