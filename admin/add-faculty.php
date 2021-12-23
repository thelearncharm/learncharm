<?php
include './header.inc.php';
include './dbcon.php';
?>
<head>
  <title>Add Faculty > <?= $title?></title>
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
          <h2 class="form-head mt-2">Add Faculty</h2>
          <hr>

          <form class="row g-3 px-3">
            <div class="col-md-4">
              <label for="" class="form-label">First Name</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Username</label>
              <input type="text" class="form-control" id="">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Email</label>
              <input type="email" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Password</label>
              <input type="password" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Date Of Birth <span class="form-require">*</span> </label>
              <input type="date" class="form-control" id="">
            </div>

            <div class="col-md-4">
              <label for="" class="form-label">Faculty No</label>
              <input type="number" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Telephone</label>
              <input type="number" class="form-control" id="">
            </div>
            <div class="col-md-4">
              <label for="" class="form-label">Profile Photo</label>
              <input type="file" class="form-control" id="" accept=".jpg,.png">
            </div>

            <div class="col-12">
              <label for="" class="form-label">Address</label>
              <input type="text" class="form-control" id="" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-4">
              Select Country: <select name="state" id="countySel" size="1" class="form-select">
                <option value="" selected="selected">Select Country</option>
              </select>
            </div>
            <div class="col-md-4">
              Select State: <select name="countrya" id="stateSel" size="1" class="form-select">
                <option value="" selected="selected">Please select Country first</option>
              </select>
            </div>
            <div class="col-md-4">
              Select District: <select name="district" id="districtSel" size="1" class="form-select">
                <option value="" selected="selected">Please select State first</option>
              </select>
            </div>

            <hr class="form-hr">

            <!-- Academic Details -->
            <h3>Teaching Details</h3>

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

            <div class="col-md-4">
              <label for="" class="form-label">Language Known</label>
              <input type="text" class="form-control" id="">
            </div>

            <div class="col-12">

            </div>
            <div class="d-grid gap-2">
              <input type="submit" class="btn  form-btn" value="Add Faculty">
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