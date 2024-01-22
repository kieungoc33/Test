<?php
    require 'connect.php';

    $id= (int)$_GET['$id'];
    $sql = "DELETE FROM `users` WHERE `id` = {$id}";

    if(!mysqli_query($conn, $sql)) {
        die('lỗi :' . mysqli_error($conn));

    }

    header("Location:admin.php");
?>
