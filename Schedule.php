<?php

Class Schedule {

    public function __construct() {
        
    }

    public function addScedule($con) {
        $day = $_POST['day'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $hall_id = $_POST['hall'];
        if (mysqli_query($con, "insert into schedule(day,slot_start,slot_end,hall_id) values('$day','$start','$end','$hall_id')")) {
            echo " added Successfully ";
        }
    }

}
