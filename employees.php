<?php
if(isset($_POST["dob"])) {

    extract($_POST);

    $conn = mysqli_connect("localhost", "root", "", "employeees");
    $sql="INSERT INTO `employeee`(`id`, `name`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) 
VALUES (NULL ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";
    mysqli_query($conn, $sql) or die( mysqli_error($conn));
    $message="employeee $names has been registered";
}

?>






<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employees</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

</head>
<body><?php
require 'navbar.php';

?>

<div class="container">
<div class="row justify-content-center">
 <div class="col-sm-5">
    <h3>add employees</h3>
     <pclass="text-success"></p>
     <?php
     if(isset($message))
     echo $message

     ?>

     <form action="employees.php" method="post">
         <div class="form-group">

             <input type="text" required class="form-control"  name="names" placeholder="names">
         </div>
         <div class="form-group">
             <input type="email"  required class="form-control" name="email" placeholder="email">
         </div>
         <div class="form-group">
             <input type="text" required class="form-control" name="address" placeholder="address">
         </div>
         <div class="form-group">

             <input type="date" class="form-control"  checked name="dob" placeholder="date of birth">
         </div>
         <div class="form-group">

             <input type="text" class="form-control"  checked name="department" placeholder="department">
         </div>
    <div class="form-group">

             <input type="text" class="form-control"  checked name="kra_pin" placeholder="kra_pin">
         </div>
    <div class="form-group">

             <input type="text" class="form-control"  checked name="salary" placeholder="salary">
         </div>

         <div class="form-check">
             <label class="form-check-label">
                 <input type="radio" class="form-check-input" value="female" name="gender"> female</label>
         </div>
         <div class="form-check">
             <label class="form-check-label">
                 <input type="radio" class="form-check-input"  value="male" name="gender"> male</label>
         </div>






         <button type="submit" class="btn btn-primary btn-block">Submit</button>
     </form>








 </div>




</div>




</div>


</body>
</html>