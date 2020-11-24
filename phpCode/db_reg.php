<?php
if(isset($_POST['register'])) {
    echo "hello";
    include 'db_con.php';

    $usname = $_POST['username'];
    $uspass = $_POST['pass'];
    $encPass = md5($uspass);
    $ustype = $_POST['type'];

    $query = "INSERT into users VALUES (null, '$usname', '$encPass', '$ustype')";
    $result = mysqli_query($conn, $query);
}
?>