<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<a href="#">  
     <h1>Hello,<?php echo $_SESSION['name']; ?></h1></a>
    <?php 
    include("index1.php");
    ?>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>








<!-- <div class="collapse navbar-collapse"   border- id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#serivcediv">Serice</a>
               </li> -->
<!--  
               <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Services
                </a>
                <div class="dropdown-menu bg-info">
                  <a class="dropdown-item text-secondary" href="{{ url('/student-log')}}">Studant Login</a>
                  <a class="dropdown-item text-secondary" href="{{ url('/course')}}">College Course</a>
                  <a class="dropdown-item text-secondary" href="#">Infarstructure</a>
                </div>  -->