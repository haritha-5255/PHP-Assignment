 <?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="admin_db";
 $connection=mysqli_connect($servername,$username,$password,$dbname);
 if(!$connection)
 {
    die("Unamble to connect!!!");
 }
 else
 {
    echo "connection success";
 }
 ?>