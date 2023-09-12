<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// $servername = "localhost";
// $username = "anas";
// $password = "Codilar";
// $dbname = "firstDB";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){

//     die("connecton failed" . mysqli_connect_error());
// }

function getSQLConnection($servername, $username, $password, $dbname)
{

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {

    die("connection failed" . mysqli_connect_error());
  }
  return $conn;
}

$conn  = getSQLConnection('localhost', 'anas', 'Codilar', 'firstDB');


// $id = $_REQUEST['id'];
// $sql = "SELECT * from student where id= $id"; 
// $result = mysqli_query($conn, $sql) or die ( mysqli_error($conn));
// $row = mysqli_fetch_assoc($result);


function getResult($conn)
{

  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM student WHERE Id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  return $row;
}
$row = getResult($conn);
//   echo "<pre>";
// var_dump($row);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Update_record</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <h1> Update Record </h1>



  <?php

  // Print the value :
  // echo $_GET['id'];
  // echo "</br>";
  // echo $_POST['name'];
  // echo "<br>";
  // echo $_POST['father_name'];
  // echo "<br>";
  // echo $_POST['mother_name'];
  // echo "<br>";
  // echo $_POST['phone_number'];
  // echo "<br>";
  // echo $_POST['email'];
  // echo "<br>";
  // echo $_POST['gender'];
  // echo "<br>";
  // echo $_POST['DOB'];
  // echo "<br>";
  // echo $_POST['address'];
  // echo "<br>";
  // echo $_POST['blood'];
  // echo "<br>";
  // echo $_POST['department'];
  // echo "<br>";
  // echo $_POST['course1'];
  // echo "<br>"; 
  // echo $_POST['course2'];
  // echo "<br>"; 
  // echo $_POST['course3'];
  // echo "<br>";
  // echo $_POST['course4'];
  // echo "<br>";
  // echo $_POST['course5'];
  // echo "<br>";
  // echo $_POST['myfile'];

  // var_dump($_POST);


  // if(isset($_POST['update']) )
  // {

  // $id=$_GET['id'];
  // $name = isset($_POST['name']) ? $_POST['name'] : "";
  // $father_name = isset($_POST['father_name']) ? $_POST['father_name'] : "";
  // $mother_name = isset($_POST['mother_name']) ? $_POST['mother_name']: "" ;
  // $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number']: "";
  // $email = isset($_POST['email']) ? $_POST['email']: "";
  // $gender = isset($_POST['gender']) ? $_POST['gender'] :"";
  // $DOB = isset($_POST['DOB']) ? $_POST['DOB'] :"";
  // $address = isset($_POST['address'])  ? $_POST['address'] :"";
  // $blood =isset($_POST['blood']) ? $_POST['blood']: "";
  // $department = isset($_POST['department']) ? $_POST['department']:"";
  // // $course = $_POST['course'];Update
  // $c = isset($_POST['course1']) ? $_POST['course1'] : "" ;
  // $css = isset($_POST['course2']) ? $_POST['course2'] : "";
  // $java =  isset($_POST['course3']) ? $_POST['course3'] : "";
  // $ai = isset($_POST['course4']) ? $_POST['course4'] : "";
  // $machine_learning = isset($_POST['course5']) ? $_POST['course5'] : "";
  // $myfile = $_POST['myfile'];
  // //$submittedby = $_SESSION["username"];



  //  $sql="UPDATE student SET firstname='$name',fathername ='$father_name', mothername ='$mother_name',phonenumber ='$phone_number', email = '$email', gender = '$gender', dob = '$DOB', address_r='$address',
  // blood='$blood',department='$department',c='$c', css='$css', java='$java', ai='$ai', machine_learning='$machine_learning',photo='$myfile' WHERE id='$id'";

  //  header('location:fetch.php');

  // if (mysqli_query($conn, $sql)) {
  //   echo "Record updated successfully";
  // } else {
  //   echo "Error updating record: " . mysqli_error($conn);
  // }

  // }



  function updateValue($id, $name, $father_name, $mother_name, $phone_number, $email, $gender, $DOB, $address, $blood, $department, $c, $css, $java, $ai, $machine_learning, $myfile)
  {

    if (isset($_POST['update'])) {
      $sql = "UPDATE student SET firstname='$name',fathername ='$father_name', mothername ='$mother_name',phonenumber ='$phone_number', email = '$email', gender = '$gender', dob = '$DOB', address_r='$address',
        blood='$blood',department='$department',c='$c', css='$css', java='$java', ai='$ai', machine_learning='$machine_learning',photo='$myfile' WHERE id='$id'";

      $conn = getSQLConnection('localhost', 'anas', 'Codilar', 'firstDB');

      header('location: fetch.php');
      if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    }
  }

  updateValue(
    $id = isset($_GET['id']) ? $_GET['id'] : "",
    $name = isset($_POST['name']) ? $_POST['name'] : "",
    $father_name = isset($_POST['father_name']) ? $_POST['father_name'] : "",
    $mother_name = isset($_POST['mother_name']) ? $_POST['mother_name'] : "",
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : "",
    $email = isset($_POST['email']) ? $_POST['email'] : "",
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "",
    $DOB = isset($_POST['DOB']) ? $_POST['DOB'] : "",
    $address = isset($_POST['address'])  ? $_POST['address'] : "",
    $blood = isset($_POST['blood']) ? $_POST['blood'] : "",
    $department = isset($_POST['department']) ? $_POST['department'] : "",
    // $course = $_POST['course'];Update
    $c = isset($_POST['course1']) ? $_POST['course1'] : "",
    $css = isset($_POST['course2']) ? $_POST['course2'] : "",
    $java =  isset($_POST['course3']) ? $_POST['course3'] : "",
    $ai = isset($_POST['course4']) ? $_POST['course4'] : "",
    $machine_learning = isset($_POST['course5']) ? $_POST['course5'] : "",
    $photo = (isset($_POST['myfile']) && !empty($_POST['myfile'])) ? $_POST['myfile'] : $row['photo']
  );






  // submittedby='".$submittedby."' where id='".$id."'";
  // mysqli_query($conn, $sql) or die(mysqli_error($conn));
  // $status = "Record Updated Successfully. </br></br>
  // <a href='fetch.php>View Updated Record</a>";
  // echo '<p style="color:#FF0000;">'.$status.'</p>';
  // }else {
  // }


  ?>




  <form action="" method="POST" onsubmit="return confirm('are you sure?');">

    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">


      <label for="name">Name </label>
      <input type="text" name="name" class="form-control" value="<?php echo $row['firstname']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>

      <label for="father name">Father Name</label>
      <input type="text" name="father_name" value="<?php echo $row['fathername']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>

      <label for="mother name">Mother Name</label>
      <input type="text" name="mother_name" value="<?php echo $row['mothername']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>

      <label for="phone number">Phone Number</label>
      <input type="text" name="phone_number" value="<?php echo $row['phonenumber']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>

      <label for="emai;">Email</label>
      <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>

      <lable for="gender">Gender</lable>


      <input type="radio" name="gender" value="male" <?php if ($row['gender'] == "male") echo "checked" ?>>
      <label for="male">Male</label>


      <input type="radio" name="gender" value="female" <?php if ($row['gender'] == "female") echo "checked" ?>>
      <label for="female">Female</label>


      <input type="radio" name="gender" value="other" <?php if ($row['gender'] == "other") echo "checked" ?>>
      <label for="other">Other</label>
      <br><br>


      <label for="DOB">Date Of Birth</label>
      <input type="date" name="DOB" value="<?php echo $row['dob']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>


      <label for="address">Address</label>
      <input type="text" name="address" value="<?php echo $row['address_r']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <br><br>


      <label for="blood group">Blood Group</label>
      <select id="inputState" name="blood" class="form-control">
        <option selected>Choose...</option>
        <option value="a+" <?php if ($row['blood'] == 'a+') { ?> selected="selected" <?php } ?>>A+</option>
        <option value="b+" <?php if ($row['blood'] == 'b+') { ?> selected="selected" <?php } ?>>B+</option>
        <option value="a-" <?php if ($row['blood'] == 'a-') { ?> selected="selected" <?php } ?>>A-</option>
        <option value="c" <?php if ($row['blood'] == 'c') { ?> selected="selected" <?php } ?>> C</option>
      </select>
      <br><br>


      <div class="custom-control custom-radio custom-control-inline">
        <label for="department">Department</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios1" value="cse" <?php if ($row['department'] == "cse") echo "checked" ?>>
        <label class="form-check-label" for="cse">CSE</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios2" value="it" <?php if ($row['department'] == "it") echo "checked" ?>>
        <label class="form-check-label" for="it">IT</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios3" value="bca" <?php if ($row['department'] == "bca") echo "checked" ?>>
        <label class="form-check-label" for="bca">BCA</label>
      </div>




      <div class="custom-control custom-radio custom-control-inline">
        <label class="form-check-label" for="course">Course</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course1" type="checkbox" id="inlineCheckbox1" value="c" <?php if (trim($row['c']) == "c") echo "checked"; ?>>
        <label class="form-check-label" for="c">C</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course2" type="checkbox" id="inlineCheckbox2" value="css" <?php if ((trim($row['css'])) == "css") echo "checked" ?>>
        <label class="form-check-label" for="css">CSS</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course3" type="checkbox" id="inlineCheckbox3" value="java" <?php if (($row['java']) == "java") echo "checked" ?>>
        <label class="form-check-label" for="java">JAVA</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course4" type="checkbox" id="inlineCheckbox3" value="ai" <?php if ($row['ai'] == "ai") echo "checked" ?>>
        <label class="form-check-label" for="ai">AI</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course5" type="checkbox" id="inlineCheckbox3" value="machine_learning" <?php if (trim($row['machine_learning']) == "machine_learning") echo "checked" ?>>
        <label class="form-check-label" for="machine lerning">MACHINE LEARNING</label>
      </div>
      <br><br>

      <label for="photo">File</label>
      <input type="file" name="myfile" /> <span><?php echo $row['photo'] ?></span>
      <br><br>

      <button type="submit" class="btn btn-outline-primary" name="update" value="update">Update</button>

    </div>
  </form>
</body>

<?php
//  echo "<pre>";
// print_r($row);die;

mysqli_close($conn);

?>
</body>

</html>