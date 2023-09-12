<?php

$servername = "localhost";
$username = "anas";
$password = "Codilar";
$dbname = "firstDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die ("connection failed:" . mysqli_connect_error());
}

$sql = "CREATE TABLE student (
    id INT(30)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    fathername  VARCHAR(30) NOT NULL,
    mothername VARCHAR(30) NOT NULL,
    phonenumber VARCHAR(0) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender VARCHAR(30) NOT NULL,
    dob VARCHAR(30) NOT NULL,
    address_r VARCHAR(50) NOT NULL,
    blood VARCHAR(30) NOT NULL,
    department VARCHAR(50) NOT NULL,
    course VARCHAR(250) NOT NULL,
    photo VARCHAR(500) NOT NULL,
    
    reg_date TIMESTAMP DEFAULT  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)";

if(mysqli_query($conn , $sql)){
echo "Table MyGuests created successfully";
} 
else{
    "Error creating table" . mysqli_error($conn);
}
            
mysqli_close($conn);

?>
