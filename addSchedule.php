<!DOCTYPE html>
<?php
require_once 'dbconnection.php';
require_once 'Schedule.php';
?>
<?php
if (isset($_POST['submit'])) {
    $schedule = new Schedule();
    $schedule->addScedule($con);
}
$hallName = mysqli_query($con, "SELECT * FROM hall");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/jquery-ui.min.css" />
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css" />
        <script>
            $(function() {
                $("#day").datepicker();
                $("#day").datepicker("option", "dateFormat", 'yy-mm-dd');
            });
        </script>
    </head>
    <body>
        <div class="container">
            <?php 
            require'adminMenu.php';?>
            <h2><center>Add a Schedule</center></h2>
            <form action="#" method="POST">
                <label>Day:</label><input type="text" name="day"id="day"><br><br>
                <label>Start Time:</label><input type="text" name="start"id="start"><br><br>
                <label>End Time:</label><input type="text" name="end"id="end"><br><br>
                <label>Hall Name</label>
                <select class="inp" name="hall" id="hall">
                    <option>Select a hall</option>
                    <?php
                    while ($cat = mysqli_fetch_array($hallName)) {
                        ?>
                        <option value="<?php echo $cat['hall_id'] ?>"><?php echo $cat['name'] ?></option>
                        <?php
                    }
                    ?>
                </select><br><br>
                <input type="submit" value="Add Scedule" name="submit">
            </form>
        </div>
    </body>
</html>
