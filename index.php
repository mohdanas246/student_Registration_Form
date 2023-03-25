<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Student Registration Form</title>
  <style>
    #display-image {
      width: 100%;
      justify-content: center;
      padding: 5px;
      margin: 15px;
    }

    form {
      width: 50%;
      margin: 20px auto;
    }
  </style>

</head>

<body>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


  <h1> Student Registration Form</h1>



  <form action="insert.php" method="POST" onsubmit="return confirm('are you sure?');">

    <div class="p-3 mb-2 bg-warning-subtle text-emphasis-warning">
      <div class="form-group">
        <label for="name">Name </label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="father name">Father Name</label>
        <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="mother name">Mother Name</label>
        <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="phone number">Phone Number</label>
        <input type="text" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="emai;">Email </label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <lable for="gender">Gender</lable>
      </div>

      <div class="form-group">
        <input type="radio" name="gender" value="male" checked>
        <label for="gender">
          Male
        </label>

        <input type="radio" name="gender" value="female" checked>
        <label for="exampleRadios1">
          Female
        </label>

        <input type="radio" name="gender" value="other" checked>
        <label for="exampleRadios1">
          Other
        </label>
      </div>

      <div class="form-group">
        <label for="DOB">Date Of Birth</label>
        <input type="date" name="DOB" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="form-group col-md-4">
        <label for="blood group">Blood Group</label>

        <select id="inputState" name="blood" class="form-control">
          <option selected>Choose...</option>
          <option value="a+">A+</option>
          <option value="b+">B+</option>
          <option value="a-">A-</option>
          <option value="c"> C</option>
        </select>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <label for="department">Department</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios1" value="cse" checked>
        <label class="form-check-label" for="cse">
          CSE
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios2" value="it">
        <label class="form-check-label" for="it">
          IT
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="department" id="exampleRadios3" value="bca">
        <label class="form-check-label" for="bca">
          BCA
        </label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <label class="form-check-label" for="course">Course</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course1" type="checkbox" id="inlineCheckbox1" value="c">
        <label class="form-check-label" for="C">C</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course2" type="checkbox" id="inlineCheckbox3" value="css">
        <label class="form-check-label" for="css">CSS</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course3" type="checkbox" id="inlineCheckbox2" value="java">
        <label class="form-check-label" for="java">JAVA</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course4" type="checkbox" id="inlineCheckbox3" value="ai">
        <label class="form-check-label" for="ai">AI</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" name="course5" type="checkbox" id="inlineCheckbox3" value="machine_learning">
        <label class="form-check-label" for="machine_learning">MACHINE LEARNING</label>
      </div>
      <br><br>

      <label for="photo">File</label>
      <input type="file" name="myfile" class="form-control-file" id="exampleFormControlFile1">
      <br><br>


      <button type="submit" name="editFrom" class="btn btn-primary">Submit</button>
    </div>

  </form>
</body>

</html>

