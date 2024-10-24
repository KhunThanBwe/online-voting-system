<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'online_voting_system');

if(!$conn) {
    die('ERROR:'.mysqli_error($conn));
}

?>