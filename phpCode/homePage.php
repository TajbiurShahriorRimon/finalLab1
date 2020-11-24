<?php

    echo "hello";

    include 'db_con.php';

    $query = 'select userid, username, user_type from users';
    $result = mysqli_query($conn, $query);
    $numOfRow = mysqli_num_rows($result);
    if ($numOfRow > 0) {
        echo '<table border="3">';
        echo '<th> User Name';
        echo "</th>";
        echo '<th> User ID';
        echo "</th>";
        echo '<th> User Password';
        echo "</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$row['username']. "</td>";
            echo '<td>'.$row['userid']. "</td>";
            echo '<td>'.$row['user_type']. "</td>";
            echo '</tr>';
        }
        echo '</table>';
    }
?>
