<?php

Class UserHelper {

    public function __construct() {
        
    }

    public function checkLogin($con) {
        $username = $_POST['uname'];
        $password = md5($_POST['pass']);
        //$encrypt_password=md5($password);
        //$sql="SELECT * FROM user WHERE name='$username' and password='$encrypt_password'";
//$result=mysqli_query($sql);
        if (!$username || !$password) {
            echo("<script>
                    window.alert('you do not complete all the requirements')
                    </script>");
        }
        $query = mysqli_query($con, "select * from user where name='$username'AND password='$password'");
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_array($query);
            $type = $row['type'];
            if($type == "user"){
                $_SESSION["type"] = "user";
                header('Location: userHome.php');
            }
            else if($type == "admin"){
                $_SESSION["type"] = "admin";
                header('Location: adminHome.php');
            }
            $_SESSION["name"] = $username;
            echo "login successfull";
        } else {
            echo "login unsuccessfull";
        }
    }

    public function registration($con) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $encrypt_password=md5($password);
        //$sql="SELECT * FROM user WHERE name='$name' and password='$encrypt_password'";
//$result=mysqli_query($sql,$con);
        if(mysqli_query($con, "insert into user(name, password, email, type) values('$name','$encrypt_password','$email','user')")){
            echo "Successfully Registered";
        }
    }

}
