<!DOCTYPE html>
<?php
require 'dbconnection.php';
$hallName = mysqli_query($con, "SELECT * FROM hall");
if (isset($_POST['submit'])) {
    $hall = $_POST['hall_name'];
    $seat = $_POST['seat_type'];
    $price = $_POST['price'];
    if (mysqli_query($con, "insert into seat(hall,seat_type,price) values('$hall','$seat ','$price')")) {
        echo " added Successfully";
    }
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
            <?php 
            require'adminMenu.php';?>
            <center><h2>Add a Seat</h2></center>
            <form class="forms" action="#" method="POST">
                <label>Hall name</label>
                <select class="inp" name="hall_name" id="hall_name">
                    <?php
                    while ($cat = mysqli_fetch_array($hallName)) {
                        ?>
                        <option value="<?php echo $cat['hall_id'] ?>"><?php echo $cat['name'] ?></option>
                        <?php
                    }
                    ?>
                </select><br><br>
                <label>Seat Type</label>
                <input class="inp" type="text" name="seat_type" id="seat_type"/><br><br>
                <label> Price</label>
                <input class="inp" type="text" name="price" id="price"/><br><br>
                <input type="submit" value="Add"  name="submit">
            </form>
        </div>
    </body>
</html>
