<?php
    $conn = mysqli_connect('localhost','root','sio','salaries');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
    global $conn ; ①
?>