<?php

// we connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcurd";

// mysqli_connect use to connect to the database check the connection if it is not connected it will show the error.
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
} else {
    echo "Connected Successfully";
}
