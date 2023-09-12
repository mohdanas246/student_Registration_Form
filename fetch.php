<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$servername = "localhost";
$username = "anas";
$password = "Codilar";
$dbname = "firstDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>
        img {
            margin: 5px;
            width: 150px;
            height: 90px;
        }
    </style>
</head>

<body>
    <div style="padding-left: 10px;">
        <h1> Student Store Data</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <form method="post" action="index.php">

        <input type="submit" class="btn btn-outline-primary" value="Add Student">

    </form>

    <div style="padding-top: 50px;">
        <div id="display-image">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Mother Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Department</th>
                        <th scope="col">Course1</th>
                        <th scope="col">Course2</th>
                        <th scope="col">Course3</th>
                        <th scope="col">Course4</th>
                        <th scope="col">Course5</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Edit </th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['fathername']; ?></td>
                                <td><?php echo $row['mothername']; ?></td>
                                <td><?php echo $row['phonenumber']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['address_r']; ?></td>
                                <td><?php echo $row['blood']; ?></td>
                                <td><?php echo $row['department']; ?></td>
                                <td><?php echo $row['c']; ?></td>
                                <td><?php echo $row['css']; ?></td>
                                <td><?php echo $row['java']; ?></td>
                                <td><?php echo $row['ai']; ?></td>

                                <td><?php echo $row['machine_learning']; ?></td>


                                <td><img src=" ./image/<?php echo $row['photo']; ?>"></td>

                                <td><a class="btn btn-outline-success" onclick="alert('Are you edit the from')" href="edit.php?id=<?php echo $row["id"]; ?> ">Edit</a></td>

                                <td><a class="btn btn-dangerbtn btn-outline-danger" onclick="alert('Are you sure ')" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>

                                </td>

                            </tr>

                    <?php
                        }
                    } ?>
        </div>

        </tbody>
        </table>
    </div>

    </table>


</body>

</html>

<?php
mysqli_close($conn);
?>