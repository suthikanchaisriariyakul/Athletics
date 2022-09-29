<?php

    // function -> mysqli_connect() ใช้เชื่อมต่อกับฐานข้อมูล
    $con = mysqli_connect('localhost','actphpapps','phpact@2022','webdesignapps');

    // Check ตัวแปร $con ว่าเข้าสู่ db ไหม
    if(!$con) {
        die(mysqli_error("Error"+$con));
    }

?>




<!--  
    if($con) {
        echo "Connection Successfully"; /*ถ้าสำเร็จจะขึ้นแบบนี้*/
    } else { /*แต่ถ้าไม่จะขึ้นแบบนี้*/
        die(mysqli_error("Error"+$con));
    }
-->