<?php

    include 'condb.php';

    $id=$_GET['deleteid'];
    // echo $id;
    
    $sql = "DELETE FROM `data_2sep` WHERE id=$id";
    $result = mysqli_query($con,$sql);

        if($result){
            // echo "Delete successfully";
            header('location:data_2sep.php');
        } else {
            die(mysqli_error($con));
        }

?>