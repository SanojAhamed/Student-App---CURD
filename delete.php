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

<?php
require 'connection.php';

if (isset($_GET['del'])) {

    $delete = $_GET['del'];
    $sql = "DELETE FROM student WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $delete);

    if ($stmt->execute()) {
        echo '<script>location.replace("index.php");</script>';
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
