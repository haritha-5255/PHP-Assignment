<?php
require('database_connection.php');

//$message="";

if(isset($_POST['btn_login']))
{
    $userName=$_POST['uname'];
    $userPassword=$_POST['pwd'];
    echo $userName;
    //$query=;
    $exec_query =mysqli_query($connection,"SELECT * FROM admin_table WHERE admin_uname='$userName' AND admin_pwd='$userPassword'");
    if(mysqli_num_rows($exec_query)>0)
    {
        $adminData=mysqli_fetch_array($exec_query);
        print_r($adminData);
        session_start();
        $_SESSION['newId']=$adminData[0];
        header('location:admin_panel.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="frm.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col-md-6 col-lg-6 form_column mx-auto mt-5 ml-5 offset-lg-4 d-flex justify-content-center align-item-center">
                    <fieldset>
                        <legend class="pb-4 ml-5 pl-5 pt-3 legn">............... LOGIN............</legend>
                    <form class="pl-2 pr-2" action="admin_panel.php" method="POST">
                        <div class="form-row">
                          <div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="uname" id="uname" value="" onkeyup="validation()" required >
                            <span class="error" id="uErr"></sapn>
                          </div>
                          <div class="col-md-6 col-lg-12 mb-3 pl-2 pr-2">
                            <label for="pwd">Password</label>
                            <input type="text" class="form-control" name="pwd" id="pwd" value="" required >
                            <span class="error" id="pErr"></span>
                          </div>
                        </div>
                        
                         <div class="col-md-5 mt-4 mb-5 pl-3 pr-2 offset-lg-4">
                        <button type="submit" class="btn_login" name ="btn_login" id="btn">Login</button>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <script src="form.js"></script>
</body>
</html>
       
    