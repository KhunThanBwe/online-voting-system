<?php
    include 'connect.php';

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    echo $check = mysqli_query($conn, "SELECT * FROM voting");

    

    
?>