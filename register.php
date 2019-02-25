<?php
if(isset($_POST["dob"])) {

    extract($_POST);
    /*echo "$names $dob $course $scholarship";*/
    $scholarship=isset($scholarship) ? "yes" : "no";
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql = "INSERT INTO `students`(`id`, `name`, `school_id`, `email`, `dob`, `gender`, `course`, `scholarship`) VALUES
 (NULL,'$names','$school_id','$email','$dob', '$gender','$course','$scholarship')";
    mysqli_query($conn, $sql) or die( mysqli_error($conn));
    $message="student $names has been registered";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row justify-content-center">
 <div class="col-sm-5">
<h3>add students</h3>
     <pclass="text-success"></p>
 <?php
if(isset($message))
    echo $message

 ?>

     <form action="register.php " method="post">
     <div class="form-group">

         <input type="text" required class="form-control"  name="names" placeholder="names">
     </div>
     <div class="form-group">
         <input type="text"  required class="form-control" name="school_id" placeholder="school_id">
     </div>
         <div class="form-group">
             <input type="email" required class="form-control" name="email" placeholder="email">
     </div>
     <div class="form-group">

         <input type="date" class="form-control"  checked name="dob" placeholder="date of birth">
     </div>
         <div class="form-check">
             <label class="form-check-label">
                 <input type="radio" class="form-check-input" value="female" name="gender"> female</label>
         </div>
         <div class="form-check">
             <label class="form-check-label">
                 <input type="radio" class="form-check-input"  value="male" name="gender"> male</label>
         </div>


         <div class="form-group">
             <select name="course"class="form-control">
                 <option value="medicine">medicine</option>
                 <option value=" computer science">computer science</option>
                 <option value=" economics">economics</option>
                 <option value="commerce">commerce</option>
                 <option value=" human resource">human resource</option>
                 <option value=" clinical medicine">clinical medicine</option>
                 <option value=" pharmacy">pharmacy</option>

             </select>

         </div>
     <div class="form-group form-check">
         <label class="form-check-label">
             <input class="form-check-input" name="scholarship"  value="yes" type="checkbox"> scholarship?
         </label>
     </div>
     <button type="submit" class="btn btn-primary btn-block">Submit</button>
     </form>






 </div>

</div>

</div>


</body>
</html>
