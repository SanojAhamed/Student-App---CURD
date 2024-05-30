<?php
require 'connection.php';

$delete = $_GET['del'];

$sql = "DELETE FROM student Where id = '$delete'";

if (mysqli_query($conn, $sql)) {
    echo '<script> location.replace("index.php"); </script>';
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>