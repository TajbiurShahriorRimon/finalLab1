<?php
    if(isset($_POST['login'])) {
        echo "hello";
        include 'db_con.php';

        $uname = $_POST['user_Name'];
        $upass = $_POST['password'];
        $decPass = md5($upass);

        $query = 'select * from users';
        $result = mysqli_query($conn, $query);
        $numOfRow = mysqli_num_rows($result);
        if ($numOfRow > 0) {
            echo "dsffsed";
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['username'] == $uname && $row['password'] == $decPass) {
                    //header("Location: homePage.php");
                    include 'homePage.php';
                }
            }
            echo "not";
        }
    }
?>
