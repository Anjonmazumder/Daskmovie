<?php
session_start();
require 'dbconnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css" />
        <style>
            .wrap{
                width: 1000px;
                margin: 0 auto;
            }
        </style>
        <script>
            $(function() {
                $('#hall').change(function() {
                    var hallNo = $('#hall').val();
                    $.ajax({
                        type: 'POST',
                        url: "getMovies_ajax.php",
                        data: {
                            'hall': hallNo
                        },
                        success: function(result) {
                            $('#movie').html(result);
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "getSeats_ajax.php",
                        data: {
                            'hall': hallNo
                        },
                        success: function(result) {
                            $('#saet').html(result);
                        }
                    });
                });

                $('#movie').change(function() {
                    var movieid = $('#movie').val();
                    $.ajax({
                        type: 'POST',
                        url: "getSchedule_ajax.php",
                        data: {
                            'movie': movieid
                        },
                        success: function(result) {
                            $('#schedule').html(result);
                        }
                    });
                });

                $('#btn_book').click(function() {
                    $.ajax({
                        type: 'POST',
                        url: "booking_ajax.php",
                        data: $('#form_booking').serialize(),
                        success: function(result) {
                            //console.log(result);
                            if (result == 1) {
                                alert('successful');
                            }
                            else {
                                alert('unsuccessful');
                            }
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <?php
            $hallName = mysqli_query($con, "SELECT * FROM hall");
            ?>
            <?php require'userMenu.php'; ?>
            <br /><br /><br />
            <form action="#" method="post" id="form_booking" class="form-horizontal"> 
                <div class="form-group">
                    <label class="col-lg-1 control-label">Hall</label>
                    <div class="col-lg-4">
                        <select name="hall" id="hall" class="form-control">
                            <option value="0">Select a hall</option>
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
                    <label class="col-lg-1 control-label">Movie</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="movie" id="movie">
                            <option value="0">Select a movie</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Time</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="schedule" id="schedule">
                            <option value="0">Select a schedule</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Seat</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="seat" id="saet">
                            <option value="0">Select a seat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-1 control-label">Quantity</label>
                    <div class="col-lg-4">
                        <input type="text" id="quantity" class="form-control" name="quantity">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-1 control-label"></label>
                    <div class="col-lg-4">
                        <input type="button" value="Book" name="submit" id="btn_book" class="form-control">
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
