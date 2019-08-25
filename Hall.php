<?php

Class Hall {

    public function __construct() {
        
    }

    public function addHall($con) {
        $hallName = $_POST['hall'];
        if (mysqli_query($con, "insert into hall(name) values('$hallName')")) {
            echo " added Successfully ";
        }
    }

}
