<?php

ob_start();
session_start();

if(!isset($_SESSION['name']) || empty($_SESSION['name'])) {
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--for the fabicons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!--for my nav bar toggler works and background Change when scrol -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../javaScript/scripts.js"></script><!--my main JavaScript File Exernal JS-->
    <!--to add a font-->  
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Teacher</title>
</head>
<body>


<nav class="navbar">
    <div class="inner-width">
      <a href="index.html" class="logo"></a>
      <button class="menu-toggler">
        <span></span>
        <span></span>  <!--nav bar for mobile view-->
        <span></span>
      </button>
      <div class="navbar-menu">
        <a href="index.php">Home</a>
        <a href="students.php">Students</a>
        <a href="teachers.php">Faculties</a>
  <a href="attendance.php">Attendance</a>
  <a href="report.php">Report</a>
  <a href="../logout.php">Logout</a>
      </div>
    </div>
  </nav>

  <section id="home">
    <div class="inner-width">
      <div class="content">
      <div class="front">
        
  
  <div class="front-child1">
    <h1 style = "font-size:35px">
    QR-Attendance-System
      <span class=""> manage your student Attendance (:</span>
    </h1>
    <div class="front-child1">
    <div class="buttons">
    
    <a href="show.php" target="_blank" >show Attendance </a>
   
    
    <a href="generate.php"  target="_blank"   >Generate qr code</a>
    
    </div>
    </div>
  </div>
  
</div>
            
        </div>
      </div>
    </div> 
</section>

<div class="row">
    <div class="content">
      <p>One step solution for your class room :)</p>
    <img src="../img/tcr.png" height="200px" width="300px" />

  </div>

</div>

<footer>
      
      <div class="copyright">
        &copy; 2024 | Created & Designed By <a href="#home">Dagmawi Teferi</a>
      </div>
      <div class="sm">
        <a href="#/"><i class="fa fa-facebook" style="font-size:24px"></i></a>
        <a href="#/" ><i class="fa fa-instagram" style="font-size:24px"></i></a>
        <a href="#/" ><i class="fa fa-linkedin" style="font-size:24px"></i></a>
        <a href="#" ><i class="fa fa-telegram" style="font-size:24px"></i></a>
        <a href="#" ><i class="fa fa-github" style="font-size:24px"></i></a>
       </div>
     </footer>

</body>
</html>
