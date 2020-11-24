<?php
$username = 'root';
$password = '';
$servername = 'localhost: 3345';
$dbName = 'fall_20-21';

$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn) {
    die('Connection failed');
} else {
    echo 'connected...';
}
?>
