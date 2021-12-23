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
      include "sidebar.php";
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
          <form class="row g-3 px-3 ">
            <div class="col-md-4">
              <label for="" class="form-label">First Name <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Last Name <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Username <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Email <span class="form-require">*</span> </label>
              <input type="email" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Password <span class="form-require">*</span> </label>
              <input type="password" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Date Of Birth <span class="form-require">*</span> </label>
              <input type="date" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Rollno <span class="form-require">*</span> </label>
              <input type="number" class="form-control" id="">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Telephone <span class="form-require">*</span> </label>
              <input type="number" class="form-control" id="" max="10">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Profile Photo</label>
              <input type="file" class="form-control" id="" accept=".jpg,.png">
            </div>
            
            
            <div class="col-12">
              <label for="" class="form-label">Address <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="" placeholder="Apartment, studio, or floor">
            </div>

            <div class="col-md-4">
              Select Country: <span class="form-require">*</span> 
              <select name="state" id="countySel" size="1" class="form-select">
                <option value="" selected="selected">Select Country</option>
              </select>
            </div>
            <div class="col-md-4">
              Select State: <span class="form-require">*</span> 
              <select name="countrya" id="stateSel" size="1" class="form-select">
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
              <select class="form-select">
                <option value="" selected="selected"> select Course</option>
                <option value="" >BCA</option>
                <option value="" >BscIT</option>
                <option value="" >BSC</option>
              </select>
            </div>
            <div class="col-md-4">
              Select Year: <span class="form-require">*</span> 
              <select class="form-select">
                <option value="" selected="selected"> select Year</option>
                <option value="" >1</option>
                <option value="" >2</option>
                <option value="" >3</option>
              </select>
            </div>
            <div class="col-md-4">
              Select Semister: <span class="form-require">*</span> 
              <select class="form-select">
                <option value="" selected="selected"> select Semister</option>
                <option value="" >1</option>
                <option value="" >2</option>
                <option value="" >3</option>
                <option value="" >4</option>
                <option value="" >5</option>
                <option value="" >6</option>
              </select>
            </div>


            <div class="col-md-2">
              <label for="" class="form-label">12<sup>th</sup> Total Marks <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="">
            </div>
            
            <div class="col-md-6">
              <label for="" class="form-label">12<sup>th</sup> School Name <span class="form-require">*</span> </label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">12<sup>th</sup> Marksheet <span class="form-require">*</span> </label>
              <input type="file" accept=".jpg,.png" class="form-control" id="">
            </div>
            
            <div class="d-grid gap-2">
              <input type="submit" class="btn  form-btn" value="Add Student">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>



 <!-- javascript -->
 <script src="./js/country.js"></script>
</body>

</html>