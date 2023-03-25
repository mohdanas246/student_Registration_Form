<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// $servername = "localhost";
// $username = "anas";
// $password = "Codilar";
// $dbname = "firstDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     die("connection failed" .mysqli_connect_error());
// }


function getSQLConnection($servername, $username, $password, $dbname){

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){

        die("Connection Failed" . mysqli_connect_error());
    }
    return $conn;
}

$conn = getSQLConnection('localhost', 'anas', 'Codilar', 'firstDB');


// $id = $_REQUEST['id'];

// $sql = "DELETE FROM student WHERE id = $id";

// if (mysqli_query($conn, $sql)){
//     echo "Record deleted successfully";
// }else{
//     echo "Error deleting record " . mysqli_error($conn);
// }


function deleteValue($conn){

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM student WHERE id = $id";

    header('location:fetch.php');
    
    if(mysqli_query($conn, $sql)){
        echo "Record deleted successfully";
    } else{
        echo "Error" . mysqli_error($conn);
    }
}

deleteValue($conn);



mysqli_close($conn)
?>





