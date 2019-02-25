<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fetch</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>


<div class="container">
    <table class="table table-dark" id="employees">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DOB</th>
            <th>ADDRESS</th>
            <th>GENDER</th>
            <th>DEPARTMENT</th>
            <th>KRA_PIN</th>
            <th>SALARY</th>
            <th>action</th>


        </tr>
        <tbody>
        <tr>
          <!--  <td>1</td>
            <td>sally</td>
            <td>sally@gmail.com</td>
            <td> 21-3-2000</td>
            <td>231 kitale</td>
            <td>female</td>
            <td>sales</td>
            <td>11453</td>
            <td>240000</td>-->

        </tr>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "employeees");
        $sql = "select * from employeee";
        $results = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($results)) {
            extract($row);
            echo "<tr>
      <td>$id</td>
      <td>$name</td>
      <td>$email</td>
      <td>$address </td>
      <td>$dob</td>
      <td>$department</td>
      <td>$gender</td>
      <td>$kra_pin</td>
      <td>$salary</td>
      <td><a  class='btn btn-danger btn-sm' href='delete.php?id=$id'>delete</a></td>

  </tr>";

        }

        ?>

        </tbody>


        </thead>


    </table>


</div>
<script>
    $(document).ready(function() {
        $('#employees').DataTable();
    } );

</script>
</body>
</html>