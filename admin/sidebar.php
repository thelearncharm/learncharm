<?php include './header.inc.php'; ?>
<div class="sidebar ">
    <div class="logo-details">
        <!-- <img src="./assets/Images/Logo/L.png" alt="" class="hide-logo"> -->
        <img src="./assets/Images/Logo/Learncharm logo_PNG_Header.png" alt=""class="show-logo">
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
            <i class='bx bx-grid-alt'></i>
            <span class="link_name">Dashboard</span>
        </a>
    </li>
        
    <li>
        <div class="icon-links">
        <a href="#">
            <i class='bx bx-user-pin'></i>
            <span class="link_name">Students</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Student</a></li>
            <li><a href="#">Show Student</a></li>
        </ul>
    </li>

    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bxs-user'></i>
            <span class="link_name">Teachers</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Student</a></li>
            <li><a href="#">Show Student</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bxs-certification' ></i>
            <span class="link_name">Courses</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Course</a></li>
            <li><a href="#">Show Course</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bx-task'></i>
            <span class="link_name">Exams</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Exam</a></li>
            <li><a href="#">Show Exam</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bx-chalkboard' ></i>
            <span class="link_name">Classrooms</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Clasroom</a></li>
            <li><a href="#">Show Clasroom</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bxs-file-pdf' ></i>
            <span class="link_name">Materials</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Material</a></li>
            <li><a href="#">Show Material</a></li>
        </ul>
    </li>
    <li>
        <div class="icon-links">
        <a href="#">
        <i class='bx bxl-zoom'></i>
            <span class="link_name">Meetings</span>
        </a>
        <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a href="#">Add Meeting</a></li>
            <li><a href="#">Show Meeting</a></li>
        </ul>
    </li>
    <li>
    <div class="profile-details">
        <div class="profile-content">
            <img src="./assets/Images/user.png" alt="">
        </div>
            <div class="name-role">
                <div class="profile_name">John Doe</div>
                <div class="role">Admin</div>
            </div>
            <i class='bx bx-log-out'></i>
        </div>
    </li>
</ul>
</div>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i=0; i<arrow.length; i++){
        arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;
            console.log(arrowParent);
            arrowParent.classList.toggle("showMenu");
        });
    }
</script>
<?php include './footer.php'; ?>