
<?php
include './header.inc.php';
include './dbcon.php';
?>
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
          <h2 class="form-head mt-2">Add Course</h2>
          <hr>

          <form class="row g-3 px-3">
            <div class="col-md-6">
              <label for="" class="form-label">Course Name</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Course ID</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Years</label>
                <select id="" class="form-select">
                    <option selected>Choose...</option>
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Semister</label>
                <select id="" class="form-select">
                    <option selected>Choose...</option>
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                    <option >5</option>
                    <option >6</option>
                    
                </select>
            </div>
            
            
            <div class="col-12">
              <label for="" class="form-label">Total Sujects</label>
              <input type="number" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Course Description</label>
                <textarea rows="3" class="form-control" id=""></textarea>
            </div>
            
            <div class="col-md-6">
              <label for="" class="form-label">Course Image</label>
              <input type="file" class="form-control" id="" accept=".jpg,.png">
            </div>
          
            <div class="d-grid gap-2">
              <input type="submit" class="btn  form-btn" value="Add Course">
            </div>
          </form>

        </div>
</div>
        </div>
</div>

</body>
</html>