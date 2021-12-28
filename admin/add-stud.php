<?php
include './header.inc.php';
include './dbcon.php';

?>
<head>
  <title>Add Student > <?= $title?></title>
</head>
<body>
  <div class="wrapper">
    <div class="body-overlay">

      <?php
      // include "sidebar.php";
      ?>

      <div id="content">

        <?php
        include "header.php";
        ?>
        <!-- form -->

        <div class="container">
          <h2 class="form-head mt-2">Add Student</h2>
          <hr>
          <h3>Basic Details</h3>
          <form method="POST" action="#" class="row g-3 px-3 " enctype="multipart/form-data">
            <div class="col-md-4">
              <label for="" class="form-label">First Name <span class="form-require">*</span> </label>
              <input type="text" name="fname" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Last Name <span class="form-require">*</span> </label>
              <input type="text" name="lname" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Username <span class="form-require">*</span> </label>
              <input type="text" name="username" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Email <span class="form-require">*</span> </label>
              <input type="email" name="email" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Password <span class="form-require">*</span> </label>
              <input type="password" name="password" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Date Of Birth <span class="form-require">*</span> </label>
              <input type="date" name="dob" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Rollno <span class="form-require">*</span> </label>
              <input type="number" name="rollno" class="form-control" id="">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Telephone <span class="form-require">*</span> </label>
              <input type="tel" name="telephone" class="form-control" id="">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Profile Photo</label>
              <input type="file" name="profile_image" class="form-control" id="" accept=".jpg,.png">
            </div>
            
            
            <div class="col-12">
              <label for="" class="form-label">Address <span class="form-require">*</span> </label>
              <input type="text" name="address" class="form-control" id="" placeholder="Apartment, studio, or floor">
            </div>

            <div class="col-md-4">
              Select Country: <span class="form-require">*</span> 
              <select name="country" id="countySel" size="1" class="form-select">
                <option value="" selected="selected">Select Country</option>
              </select>
            </div>
            <div class="col-md-4">
              Select State: <span class="form-require">*</span> 
              <select name="state" id="stateSel" size="1" class="form-select">
                <option value="" selected="selected"> select Country first</option>
              </select>
            </div>
            <div class="col-md-4">
              Select District: <span class="form-require">*</span> 
               <select name="district" id="districtSel" size="1" class="form-select">
                <option value="" selected="selected"> select State first</option>
              </select>
            </div>

            <hr class="form-hr">

            <!-- Academic Details -->
            <h3>Academic Details</h3>

            <div class="col-md-4">
              Select Course: <span class="form-require">*</span> 
              <select class="form-select" name="course">
                <option value="" selected="selected"> select Course</option>
                <option value="BCA" >BCA</option>
                <option value="BscIT" >BscIT</option>
                <option value="BSC" >BSC</option>
              </select>
            </div>
            <div class="col-md-4">
              Select Year: <span class="form-require">*</span> 
              <select class="form-select" name="year">
                <option value="" selected="selected"> select Year</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
              </select>
            </div>
            <div class="col-md-4">
              Select Semester: <span class="form-require">*</span> 
              <select class="form-select" name="semester">
                <option value="" selected="selected"> select Semester</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
              </select>
            </div>


            <div class="col-md-2">
              <label for="" class="form-label">12<sup>th</sup> Total Marks <span class="form-require">*</span> </label>
              <input type="number" name="marks" class="form-control" id="">
            </div>
            
            <div class="col-md-6">
              <label for="" class="form-label">12<sup>th</sup> School Name <span class="form-require">*</span> </label>
              <input type="text" name="schoolname" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">12<sup>th</sup> Marksheet <span class="form-require">*</span> </label>
              <input type="file" name="marksheet_image" accept=".jpg,.png" class="form-control" id="">
            </div>
            
            <div class="d-grid gap-2">
              <input type="submit" name="addstudent" class="btn form-btn" value="Add Student">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



 <!-- javascript -->
 <script src="./js/country.js"></script>

 <!-- Backend Part -->
 <?php

 if(isset($_POST['addstudent']))
 {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $dob = $_POST['dob'];
   $rollno = $_POST['rollno'];
   $telephone = $_POST['telephone'];
   $profile_image = "assets/db-assets/Student/profile/".rand(111111111, 999999999).'_'.$_FILES['profile_image']['name'];
   move_uploaded_file($_FILES['profile_image']['tmp_name'],$profile_image);
   $address = $_POST['address'];
  //  $country = $_POST['country'];
  //  $state = $_POST['state'];
  //  $district = $_POST['district'];
   $course = $_POST['course'];
   $year = $_POST['year'];
   $semester = $_POST['semester'];
   $marks = $_POST['marks'];
   $schoolname = $_POST['schoolname'];
   $marksheet_image = "assets/db-assets/Student/marksheet/".rand(111111111, 999999999).'_'.$_FILES['marksheet_image']['name'];
   move_uploaded_file($_FILES['marksheet_image']['tmp_name'],$marksheet_image);

   $sql = "INSERT INTO students (fname, lname, username, email, password, dob, rollno, telephone,profile_image, address,  course, year, semester, marks, schoolname,marksheet_image) VALUES ('$fname', '$lname', '$username', '$email', '$password', '$dob', $rollno, $telephone,'$profile_image', '$address',  '$course', $year, $semester, $marks, '$schoolname','$marksheet_image')";
   $run = mysqli_query($dbcon, $sql);

   if($run)
   {
     echo "<Script>alert('Success'); </sctipt>";
    }
    else{
     echo "<Script>alert(' no Success'); </sctipt>";

   }
 }
 ?>
</body>
</html>


