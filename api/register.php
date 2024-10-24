<?php

    include 'connect.php';
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    $address = $_POST['address'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($confirm_password != $password) {
        echo "<script>
            alert('Password and Confirm_password do not match!');
            window.location = '../routes/register.html';
        </script>";
    }else {
        move_uploaded_file($tmp_image, "../uploads/$image");
        $insert = mysqli_query($conn, "INSERT INTO voting(name, mobile, password, address, image, role) VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role')");

        if($insert) {
            echo "<script>
            alert('Inserted Successfully');
            window.location = '../login.html';
        </script>";
        }else{
            echo "<script>
            alert('Somtthing Error!');
            window.location = '../routes/register.html';
        </script>";
        }
    }
    

?> 