<?php
include 'header.php';
 
    include 'config.php';
    $idcar = $_GET['idcar'];
    $sql = "DELETE FROM car WHERE vehicle_id=$idcar";
    $res = mysqli_query($conn, $sql);
    if($res>0)
    {
        header('location:chitiet.php');
    }
?>