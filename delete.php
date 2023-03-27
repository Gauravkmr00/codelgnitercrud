<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];


    $sql="DELETE FROM `golu` WHERE id=$id";

    $result=mysqli_query($conn, $sql);

    if($result){

    echo "<script>alert('Record Deleted')</script>";
    echo "<script>window.location.href = 'http://localhost/crud_new/index.php';</script>";

    }else{
        die(mysqli_error($conn));
    }
}

?>