<?php
$err_name = "";
$err_username = "";
$err_pass = "";
$err_confPass = "";
$err_email = "";
$err_contact = '';
$err_type = '';
$err_city = '';
$name = "";
$username = "";
$password = "";
$confPassword = "";
$email = "";
$type = "";
$number = "";
$city = '';
$contact = '';
$has_error = false;

    if(isset($_POST['register'])) {
        if (empty($_POST['username'])) {
            $err_username = "Username cannot be empty!";
            $has_error = true;
        }

        if (!empty($_POST['pass'])) {
            if (strlen($_POST['pass']) < 8) {
                $err_pass = "Password cannot be less than 8 letter";
                $has_error = true;
            }
            if (!strpos($_POST['pass'], "#") && !strpos($_POST['pass'], "?")) {
                $err_pass = "Password must have a special character";
                $has_error = true;
            }
            if (!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
                && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
                && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
                $err_pass = "Password must have a number";
                $has_error = true;
            }
            if (strtoupper($_POST['pass']) == $_POST['pass']) {
                $err_pass = "Password must have a Lower character";
                $has_error = true;
            }
            if (strtolower($_POST['pass']) == $_POST['pass']) {
                $err_pass = "Password must have a Upper character";
                $has_error = true;
            } else {
                $password = htmlspecialchars($_POST['pass']);
            }
        }
        if (empty($_POST['conf_pass'])) {
            $err_confPass = "Confirm Password cannot be empty!";
            $has_error = true;
        }
        elseif (empty($_POST['type'])){
            $err_type = "User Type is required.";
            $has_error = true;
        }
        if(!$has_error){
            //header("Location: db_reg");
            include 'db_reg.php';
        }
    }
?>
