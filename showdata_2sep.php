<?php
    include ('condb.php');
?>

<!-- <script>
    function declaer() {
        if(confirm('โปรดยืนยันการลบอีกครั้ง !!!')) {
            return true;
        } else {
            return false;
        }
    }
</script> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container my-5">
        
    <a href="adddata.php" class="btn btn-success mb-3">+ Add</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รายการแข่งขัน</th>
                <th scope="col">ระดับ</th>
                <th scope="col">ทีม</th>
                <th scope="col">สีขาว</th>
                <th scope="col">สีเหลือง</th>
                <th scope="col">สีแดง</th>
                <th scope="col">สีน้ำเงิน</th>
                <th scope="col">สีแสด</th>
                <th scope="col">สีเขียว</th>
                <th scope="col">สถิติ</th>
                <th scope="col">บันทึกผล</th>
                </tr>
            </thead>

            <tbody>

            <?php

                // select query
                $sql = "SELECT * FROM `showdata`";
                $result = mysqli_query($con,$sql);

                // ใช้ function -> while() เพื่อส่งให้ run ตัวแปรใน()ซ้ำ
                while ($row = mysqli_fetch_assoc($result)) {
                //echo $row['fname'];   (ตัวอย่างการ test ดึงข้อมูล)

                    $id = $row['id'];
                    $number = $row['number'];
                    $list = $row['list'];
                    $grade = $row['grade'];
                    $team = $row['team'];
                    $white = $row['white'];
                    $yellow = $row['yellow'];
                    $red = $row['red'];
                    $blue = $row['blue'];
                    $orange = $row['orange'];
                    $green = $row['green'];
                    $statis = $row['statis'];

                    echo '
                    
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$list.'</td>
                        <td>'.$grade.'</td>
                        <td>'.$team.'</td>
                        <td>'.$white.'</td>
                        <td>'.$yellow.'</td>
                        <td>'.$red.'</td>
                        <td>'.$blue.'</td>
                        <td>'.$orange.'</td>
                        <td>'.$green.'</td>
                        <td>'.$statis.'</td>
                        <td>
                            <a href="editdata.php?editid='.$id.'" class="btn btn-dark">Edit</a>
                            <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    
                    ';
                } 
            ?>
                
            </tbody>
        </table>

    </div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>