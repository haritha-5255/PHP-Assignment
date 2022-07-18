<?php
require('database_connection.php');
// session_start();
// echo $_SESSION['newId'];
// if(isset($_SESSION['newId']))
// {
//     $id=$_SESSION['newId'];
//     echo $id;
// }
// else{
// //     ?>
<!-- //onn<script>
// //     alert("Time Out!!! , please login");
// //     window.location="admin_login.php";
// //     </script> -->
    <?php
    
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="frm.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3">
        <ul class="nav justify-content-end">
  <li class="nav-item">

    <a class="nav-link disabled" href="#">one</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">two</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">three</a>
  </li>
    <a class="nav-link active" href="logout.php">logout</a>
  </li>
 
</ul>

        <!-- <a class="mr-5 p-3 mt-4 offset-8" href="logout.php">logout</a> -->
</div>
</div>
<div class="row">
            <div class="col-md-4  mt-4  list">
            <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action"></a>

  <a href="#" class="list-group-item list-group-item-action list-group-item-primary"></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"></a>
  <!-- <a href="student_regform.php" class="list-group-item list-group-item-action list-group-item-success">Register Student</a> -->
  <a href="student_update.php" class="list-group-item list-group-item-action list-group-item-danger">Update Student</a>
  <!-- <a href="active_student.php" class="list-group-item list-group-item-action list-group-item-warning">View Active Students</a> -->
  <a href="#" class="list-group-item list-group-item-action list-group-item-info"></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light"></a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark"></a>
</div>
</div>
<div class="col-md-8 mt-4 wlcom">

    <h1 class="welcome offset-4 ">Welcome....</h1>
    <p class="welcome p-4 mt-3 mr-2"> The Ready Bodies, Learning Minds motor lab addresses the needs of all students in task-oriented circuit training, supported by consistent, foundational exercises, offering developmental support for the sensory and motor systems. Hear a testimonial from a school administrator’s point of view.</p>
   
</div>
</div>
</body>
</html>