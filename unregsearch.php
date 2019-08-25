<!DOCTYPE html>
<?php
require 'dbconnection.php';
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
            <ul class="menu">
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="register.php">Register</a></li>
            </ul>
            <center><h2>make a search</h2></center>

            <form action="#" method="POST">
                <input type="text" name="search" id="search"/>
                <input type="submit" value="search" name="submit"/>

            </form>
            <?php
            if (isset($_POST['submit'])) {
                $searchq = $_POST['search'];
                $sql = "SELECT  movie.movie_id AS movie_id, movie.name AS mname, hall.name AS hname
        FROM movie INNER JOIN hall ON movie.hall_id = hall.hall_id 
        WHERE movie.name like'%$searchq%'";
                $result = mysqli_query($con, $sql);
                $count = mysqli_num_rows($result);
                if ($count == 0) {
                    echo'no result found';
                } else {
                    ?>
                    <table class="table table-striped">
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
                    <?php
                }
            }
            ?>
        </div>
    </body>
</html>
