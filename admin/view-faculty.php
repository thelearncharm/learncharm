<?php include './header.inc.php';?>
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
           <div class="form">
            <div class="form-head">
                <h1> View Faculty</h1>
            </div>
           <!-- table -->
           <table class="view-stud-table" id="view-stud-table">
               <thead>
                   <tr>
                   <th>ID</th>
                   <th>Full Name</th>
                   <th>Roll No.</th>
                   <th>Email ID</th>
                   <th>Phone</th>
                   <th>Course</th>
                   <th>Year</th>
                   <th colspan="2">action</th>
                   </tr>
               </thead>
              

               <tbody align="center">
                   <tr>
                   <td>1</td>
                   <td>Krupesh Vithlani</td>
                   <td>64</td>
                   <td>krupesh@gmail.com</td>
                   <td>96325 89635</td>
                   <td>BCA</td>
                   <td>2nd</td>
                   <td>Edit</td>
                   <td>Delete</td>
                   </tr>

                   <tr>
                   <td>2</td>
                   <td>Krupesh Vithlani</td>
                   <td>64</td>
                   <td>krupesh@gmail.com</td>
                   <td>96325 89635</td>
                   <td>BCA</td>
                   <td>2nd</td>
                   <td>Edit</td>
                   <td>Delete</td>
                   </tr>
               </tbody>

           </table>
            </div>
        </div>
</div>
        </div>
</div>
</div>

<?php include './footer.php'; ?>

<script>
   $(document).ready( function () {
    $('#view-stud-table').DataTable();
} );
</script>
</body>