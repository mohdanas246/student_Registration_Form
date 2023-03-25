<?php

echo $_POST['name'];
echo "<br>";
echo $_POST['father_name'];
echo "<br>";
echo $_POST['mother_name'];
echo "<br>";
echo $_POST['phone_number'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['gender'];
echo "<br>";
echo $_POST['DOB'];
echo "<br>";
echo $_POST['address'];
echo "<br>";
echo $_POST['blood'];
echo "<br>";
echo $_POST['department'];
echo "<br>";
echo $_POST['course1'];
echo "<br>"; 
echo $_POST['course2'];
echo "<br>"; 
echo $_POST['course3'];
echo "<br>";
echo $_POST['course4'];
echo "<br>";
echo $_POST['course5'];
echo "<br>";
echo $_POST['myfile'];



error_reporting(E_ALL);
ini_set('display_errors', '1');

// $servername = "localhost";
// $username = "anas";
// $password = "Codilar";
// $dbname = "firstDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){

//     die("connection failed" . mysqli_connect_error());
// }

function getSQLConnection($servername, $username, $password, $dbname){

    $conn =  mysqli_connect($servername, $username, $password, $dbname);


   if(!$conn){

    die('connection failed' .mysqli_connect_error());
   }
return $conn;
}



// $name = $_POST['name'];
// $father_name = $_POST['father_name'];
// $mother_name = $_POST['mother_name'];
// $phone_number = $_POST['phone_number'];
// $email = $_POST['email'];
// $gender = $_POST['gender'];
// $DOB = $_POST['DOB'];
// $address = $_POST['address'];
// $blood =$_POST['blood'];
// $department = $_POST['department'];
// // $course = $_POST['course'];
// $c = $_POST['course1'];
// $css = $_POST['course2'];
// $java = $_POST['course3'];
// $ai = $_POST['course4'];
// $machine_learning = $_POST['course5'];
// $myfile = $_POST['myfile'];


// $sql = "INSERT INTO student (firstname, fathername, mothername, phonenumber, email, gender, dob, address_r, blood, department,c,css,java,ai,machine_learning,photo)
// VALUES ('$name','$father_name', '$mother_name', '$phone_number', '$email', '$gender', '$DOB', '$address', '$blood', '$department', '$c ','$css ','$java','$ai', '$machine_learning ','$myfile')";

// if (mysqli_query($conn, $sql)){
//     echo "Data store succcessfully <br>";

// }else{

//     echo "Error .$sql." . mysqli_error($conn);
// }

// var_dump($tble);
// die();

//function insertValue($firstname, $fathername, $mothername, $phonenumber, $email, $gender, $dob,
//$address_r, $blood, $department, $c, $css, $java, $ai, $machine_learning, $photo)

function insertValue($name,$father_name, $mother_name, $phone_number, $email, $gender, $DOB, $address, $blood, $department, $c,$css ,$java,$ai, $machine_learning ,$myfile)
  {

    $sql = "INSERT INTO student (firstname, fathername, mothername, phonenumber, email, gender, dob, address_r, blood, department,c,css,java,ai,machine_learning,photo) 
    VALUES ('$name','$father_name', '$mother_name', '$phone_number', '$email', '$gender', '$DOB', '$address', '$blood',
     '$department', '$c ','$css ','$java','$ai', '$machine_learning ','$myfile')" ;
    
 
    $conn = getSQLConnection('localhost', 'anas', 'Codilar', 'firstDB');

   if (mysqli_query($conn, $sql)){
        echo "Data store succcessfully";
        
        }else{
        
            echo "Error .$sql." . mysqli_error($conn);
        }
  
}


insertValue(
$name = $_POST['name'],
$father_name = $_POST['father_name'],
$mother_name = $_POST['mother_name'],
$phone_number = $_POST['phone_number'],
$email = $_POST['email'],
$gender = $_POST['gender'],
$DOB = $_POST['DOB'],
$address = $_POST['address'],
$blood =$_POST['blood'],
$department = $_POST['department'],
// $course = $_POST['course'];
$c = $_POST['course1'],
$css = $_POST['course2'],
$java = $_POST['course3'],
$ai = $_POST['course4'],
$machine_learning = $_POST['course5'],
$myfile = $_POST['myfile'],
);





//mysqli_query($conn , $sql);

// if(move_uploaded_file($tempname, $folder)){
//     echo "image upload ";
// }else{
//     echo "Failed to upload";
// }

header('location:fetch.php'); 



mysqli_close($conn);
?>