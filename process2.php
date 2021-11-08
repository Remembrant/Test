<?php

require('db.php');

session_start();

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";

// if(mysqli_query($conn,$query)){
//     echo "User Added!!";
// }else{
//     echo "ERROR: ".mysqli_error($conn);
// }

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
        echo "success";
}else {
    echo "ERROR: ".mysqli_error($conn);
}