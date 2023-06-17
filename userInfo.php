<?php
$server="localhost";
$username="root";
$pass="";
$db="webdb1";
$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn){
     die("Sorry we failed to connect!  ".mysqli_connect_error());
}
// else{
//      echo "successfully conneted";
// }

// $sql = "CREATE TABLE `webpr1` (`Sno` INT(6) NOT NULL AUTO_INCREMENT, 
// `user` VARCHAR(20) NOT NULL, `email` VARCHAR(11) NOT NULL,
// `contact`int(10) NOT NULL,`location` varchar(50) NOT NULL, `comments` varchar(255)  , PRIMARY KEY (`Sno`))";
// $result=mysqli_query($conn,$sql);
// //check for table creation
// if($result){
//      echo "<br>The db was create successfully";
// }else{
//      echo "<br>The db was not create successfully because of this error...> " .mysqli_error($conn);  
// }
$name=$_POST['user'];
$email=$_POST['email'];
$cont=$_POST['contact'];
$loc=$_POST['location'];
$commts=$_POST['comments'];

          $sql = "SELECT * FROM webpr1 WHERE email = '{$email}'";
          $res = mysqli_query($conn, $sql);
          
          if (mysqli_num_rows($res) > 0) {
              echo "<div class='alert alert-danger'><h1 style= color:red;>Hello! $name this Email already exists
              <h3 style= color:yellow;>please try from another email<h3></h1></div>";
          } else {
              $sql1 = "INSERT INTO webpr1 (user, email, contact, location, comments) VALUES ('{$name}', '{$email}', '{$cont}', '{$loc}', '{$commts}')";
              if (mysqli_query($conn, $sql1)) {
                  echo "<div class='alert alert-success'><h1 style='color:green;'>Hello $name, you have registered successfully</h1></div>";
              } else {
                  echo "Error: " . mysqli_error($conn);
     }
          }




//modification in table
         //$sql2= "ALTER TABLE webpr1 MODIFY location varchar(255)";
     //     $sql2="DELETE FROM webpr1";
     //     $result=mysqli_query($conn,$sql2);
     //     //check for table creation
     //     if($result){
     //          echo "<br>The content was delete successfully";
     //     }else{
     //          echo "<br>The column was not modify successfully because of this error...> " .mysqli_error($conn);  
     //     }


mysqli_close($conn);

     ?>