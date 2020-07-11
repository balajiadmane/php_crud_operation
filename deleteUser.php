<?php

if(isset($_GET['id'])) {


    $id = $_GET['id'];

    include "./connect.php";


    $sql = "DELETE FROM `user_info` WHERE `id` ='$id'";


    $result = mysqli_query($conx,$sql);

    if($result) {
        // for to redirect to view table of user info
            echo "<script>window.location.href='?f=view';</script>";
    }else{
        echo "<h4>Not deleted</h4>";
    }
}