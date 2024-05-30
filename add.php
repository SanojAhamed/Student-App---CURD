<?php

require 'connection.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO student(name,address,mobile) VALUES('$name', '$address', '$mobile')";

    if (mysqli_query($conn, $sql)) {
        echo '<script> location.replace("index.php"); </script>';
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student App CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md=9 my-5">
                <div class="card">
                    <h5 class="card-header">School App CRUD</h5>
                    <div class="card-body">
                        <form action="add.php" method="post">
                            <div class="form-group">
                                <label for="exampleInpuTname">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInpuTaddress">Address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputaddress" placeholder="Enter Address">
                            </div>

                            <div class="form-group">
                                <label for="exampleInpuTmobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="exampleInputmobile" placeholder="Enter Mobile">
                            </div>

                            <br>

                            <button type="submit" name="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>