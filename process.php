<?php

require('db.php');


$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

if(mysqli_query($conn,$query)){
    echo "success";
    // echo "<script>alert('User registered successfull!!!');window.location='login.php'</script>";

}else{
    echo "ERROR: ".mysqli_error($conn);
}
