<!DOCTYPE html>
<?php
require 'dbconnection.php';
if (isset($_POST['submit'])) {
    $movie = $_POST['movie'];
    $hall = $_POST['hall_name'];
    $type = $_POST['type'];
    $schedules = $_POST['schedules'];
    $sql = "insert into movie(name,hall_id,movie_type) values('$movie ','$hall','$type')";
    if ($con->query($sql) === TRUE) {
        $last_id = $con->insert_id;
        if ($schedules) {
            foreach ($schedules as $schedule) {
                mysqli_query($con, "insert into movie_schedule(movie_id,schedule_id) values('$last_id ','$schedule')");
            }
        }
    }
    echo'added successfully';
}
$hallName = mysqli_query($con, "SELECT * FROM hall");
$sche = mysqli_query($con, "SELECT * FROM schedule");
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
        <script>
            $(function() {
                $('#hall').change(function() {
                    var hallNo = $('#hall').val();
                    $.ajax({
                        type: 'POST',
                        url: "getSchedule_ajax2.php",
                        data: {
                            'hall': hallNo
                        },
                        success: function(result) {
                            $('#schedule').html(result);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <?php require'adminMenu.php'; ?>
            <br/><br/><br/>
            <h2>Add a Movie</h2>
            <form class="form-horizontal" action="#" method="POST">
                <div class="form-group">
                    <label class="col-lg-1 control-label">Hall Name</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="hall_name" id="hall">
                            <option>Select a hall</option>
                            <?php
                            while ($cat = mysqli_fetch_array($hallName)) {
                                ?>
                                <option value="<?php echo $cat['hall_id'] ?>"><?php echo $cat['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Movie Name</label>
                    <div class="col-lg-4">
                        <input type="text" name="movie" id="movie"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Movie Type</label>
                    <div class="col-lg-4">
                        <input type="text" name="type" id="type" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Schedule</label>
                    <div class="col-lg-4">
                        <select multiple class="form-control" name="schedules[]" id="schedule">

                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-1 control-label"></label>
                    <div class="col-lg-4">
                        <input type="submit" name="submit" value="Add" class="form-control"/>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
