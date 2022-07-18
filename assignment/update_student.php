<?php

require('database_connection.php');
$msg="";
$newId=$_GET['s_id'];
echo $newId;
$exec_query =mysqli_query($connection,"SELECT * FROM users WHERE student_id='$newId'");
$row=mysqli_fetch_array($exec_query);
if(isset($_POST['btn_update']))
{
    $name=$_POST['fname'];
    $email=$_POST['mail'];
    $mobile=$_POST['tel'];
    $username=$_POST['user'];
    $password=$_POST['pwd'];
    $confirm_password=$_POST['cpwd'];
    $roles=$_POST['role'];
    $staus=$_POST['status'];
    $query="UPDATE users SET name='$name', contact='$mobile', email='$email', username='$username', password='$password',role='$roles', status='$status' WHERE user_id='$newId'";

    $exec_query=mysqli_query($connection,$query);
    if($exec_query)
    {
        $msg="data updated successfully";
    }
    else{
        $msg="error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Updation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col-md-6 col-lg-6 form_column mx-auto mt-5 ml-5 offset-lg-4 d-flex justify-content-center align-item-center">
                    <fieldset >
                        <legend class="pb-4 ml-5 pl-5 pt-3 legnt"><strong>.......UPDATE PROFILE.....</strong></legend>
                        <form class="pl-2 pr-2" id="myForm" method="post" action="#">
                        <div class="form-row">
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="fname">Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row[1];?>" required>
                            <div class="error" id="fErr"></div>
                          </div>
                          <div class="col-md-4 mb-3 pl-2 pr-2">
                            <label for="">Contact:</label><br>
                            <input  class="mt-3"type="tel" name="tel" id="tel" placeholder="0000000000" value="<?php echo $row[2];?>">
                           <div class="error" id="telErr"></div>
                        </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="email">Email</label><br>
                            <input type="text" class="form-control" name="mail" id="mail" value="<?php echo $row[3];?>" required>
                            <div class="error" id="mErr"></div>
                          </div>
                           <div class="col-md-6 mb-2 pl-2 pr-2">
                            <label for="">Username</label><br>
                            <input type="text" class="form-control" name="user" id="user" value="<?php echo $row[4];?>" required>
                            <div class="error" id="desErr"></div>
                          </div>
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="lname">Password</label>
                            <input type="text" class="form-control" name="pwd" id="pwd" value="<?php echo $row[5];?>"required>
                            <div class="error" id="pErr"></div>
                          </div>
                          
                          <div class="col-md-6 mb-3 pl-2 pr-2">
                            <label for="lname">Confirm Password</label>
                            <input type="text" class="form-control" name="cpwd"id="cpwd" value="<?php echo $row[6];?>" required>
                            <div class="error" id="cErr"></div>
                            <div class="error" id="pcErr"></div>
                          </div>
                          <div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                        <label class="form-label">User Type:</label><br>
		  
		  <select class="form-select"
		          name="role" 
		          aria-label="Default select example" id="select">
			  <option selected value="user">Student</option>
			  <option value="admin">Admin</option>
		  </select>
</div>   
<div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                        <label class="form-label">status:</label><br>
		  
		  <select class="form-select"
		          name="status" 
		          aria-label="Default select example" id="select">
			  <option selected value="user">Active</option>
			  <option value="admin">Inactive</option>
		  </select>
</div>   
                         
                          
                         <div class="col-md-5 mt-4 mb-5 pl-3 pr-2 offset-lg-8">
                         <a class="text-info" href="student_details.php"><strong><u>
<i class='fa fa-arrow-right' style='color: blue'>VIEW</i></strong></u></a>&nbsp;
                        <button class="btn btn-primary btn_update" type="submit"id="btn" name="btn_update"onclick="validation()">UPDATE</button>
                        
                        <p><?php echo $msg ?></p>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    
   
      <script src="form.js"></script>
       
    


 


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>