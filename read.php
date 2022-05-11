<?php
include 'connect.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud oparation Read</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body> 
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a> <h1>Manage Employees</h1></a>
        
       
        <button class="btn btn-success my-5"><a href="home.php" class="text-light">Add New Employee</a></button>
</nav>
        <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">Sl.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>


    <?php
$sql="select * from crud";
$result=mysqli_query($con,$sql);
if($result){
    
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $phone=$row['phone'];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$phone.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteteid='.$id.'"  class="text-light">Delete</a></button>
        </td>
      </tr>
      <tr>';
    }
}
?>


  </tbody>
</table>
    </div>

    
</body>
</html>