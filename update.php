<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$phone=$row['phone'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];


    $sql= "update `crud` set id='$id',name='$name',email='$email',phone='$phone' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:read.php');
       // echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}




?>









<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SOURAV CRUD OPARATION</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="mb-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off" value=<?php echo $address;?>>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off" value=<?php echo $phone;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>