<!DOCTYPE <html>
<?php
require 'dbconnection.php';

$sql = 'SELECT movie.movie_id AS movie_id, movie.name AS mname, hall.name AS hname
        FROM movie INNER JOIN hall ON movie.hall_id = hall.hall_id';
$result = mysqli_query($con, $sql);
?>
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
        <?php require'userMenu.php';?>
        <table class="table table-striped mytable">
            <tr>
                <td>Movie</td>
                <td>Hall</td>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['mname']; ?></td>
                    <td><?php echo $row['hname']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
