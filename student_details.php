<?php
require('database_connection.php');
$query="select * from student_reg_table";
$exec_query=mysqli_query($connection,$query);
if($exec_query)
    {
        $msg="data inserted successfully";
    }
    else{
        $msg="error";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="frm.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
    </head>
    
    <body>
    <table class="table table-dark">
        <h3 class="text-light"><u><centre>Registered students</centre></u></h3><br>
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
      <th scope="col">NAME</th>
      <th scope="col">CONTACT</th>
      <th scope="col">EMAIL</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col"> CONFIRM PASSWORD</th>
      <th scope="col"> EDIT</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(mysqli_num_rows($exec_query)>0)
  {
    while($row=mysqli_fetch_assoc($exec_query))
    {
        ?>
        <tr>
      <!-- <td><?php echo $row['student_id'] ;?><td> -->
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['contact'] ;?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['confirm_password']; ?></td>
      <td><a href="update_student.php?s_id=<?php echo $row['student_id']?>">update</td>
    </tr>
    <?php
    }
  }
  ?>
 
    
  </tbody>
  <a class="text-info" href="student_regform.php"><strong><u>
<i class='fa fa-arrow-left' style='color: blue'>BACK</i></strong></u></a>&nbsp;
</table>
</body>
</html>
