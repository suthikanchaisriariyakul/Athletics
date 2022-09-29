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

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <style>
        .num {
            border-radius: 10px;
            background-color: rgb(30, 30, 30);
            width: 100%;
            /* margin: 0.5rem; */
            text-align: center;
            
        }
    </style>

</head>
<body>

    <div class="container my-5">
        <div class="row" >
                <div class="col" style="text-align: left;"><img src="img/header_p1.png" width="100%"  alt=""></div>
                <div class="col" style="text-align: center; margin:1rem;"><img src="img/Asset_1201.png" width="22%" alt=""></div>
                <div class="col" style="text-align: right;"><img src="img/header_p2.png" width="100%" alt=""></div>
        </div>
    </div>

    <div class="container my-5">

        <div class="row">
        
    
            <div class="col" style="float:left;"><a href="adddata.php" class="btn btn-success mb-3">+ Add</a></div>

            <div class="col-6">
                <div class="num" style="text-align: center;">
                    <?php
//                        include 'condb.php';

                        $query = "SELECT id FROM data_2sep ORDER BY id";
                        $query_run = mysqli_query($con,$query);

                        $row = mysqli_num_rows($query_run);

                        $query2 = "SELECT tus FROM data_2sep WHERE (tus = 'แข่งแล้ว')";
                        $query2_run = mysqli_query($con,$query2);
                        $row2 = mysqli_num_rows($query2_run);

                        $query3 = "SELECT tus FROM data_2sep WHERE (tus = 'ยังไม่ได้แข่ง')";
                        $query3_run = mysqli_query($con,$query3);
                        $row3 = mysqli_num_rows($query3_run);
                        
                        echo '

                        <table class="table">
                            <thead>
                                <tr style="color: #fff; font-size: 14px;">
                                <th scope="col-3">รายการการแข่งขัน</th>
                                <th scope="col-3">แข่งขันแล้ว</th>
                                <th scope="col-3">ยังไม่ได้แข่ง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color: #fff; font-size: 14px;">
                                <td>'.$row.'</td>
                                <td>'.$row2.'</td>
                                <td>'.$row3.'</td>
                                </tr>
                            </tbody>
                        </table>

                        ';
                    ?>
                </div>
            </div>

            <div class="col" style="float:right;"><a href="result_2sep.php" class="btn btn-primary mb-3" style="float:right;"> <img src="bar-chart-line-fill.svg"> Result</a></div>
        </div>

        <?php
            // select query
            $sql = "SELECT * FROM `data_2sep`";

            $result = mysqli_query($con,$sql);
//            $arr_users = [];

//           if ($result->num_rows > 0) {
//                $arr_users = $result->fetch_all(MYSQLI_ASSOC);
//            }

        ?>

        <table id="data_2sep" class="table" style="text-align: center;">
            <thead>
                <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รายการแข่งขัน</th>
                <th scope="col">ระดับ</th>
                <th scope="col">ประเภท</th>
                <th scope="col">ทีม</th>
                <th scope="col">สถานะ</th>
                <th scope="col">อันดับที่ 1</th>
                <th scope="col">อันดับที่ 2</th>
                <th scope="col">อันดับที่ 3</th>
                <th scope="col">สถิติ</th>
                <th scope="col">บันทึกผล</th>
                </tr>
            </thead>

            <tbody>

            <?php

                if(!empty($arr_users)) {

                }

                // ใช้ function -> while() เพื่อส่งให้ run ตัวแปรใน()ซ้ำ
                while ($row = mysqli_fetch_assoc($result)) {
                //echo $row['fname'];   (ตัวอย่างการ test ดึงข้อมูล)
                    $id = $row['id'];
                    $list = $row['list'];
                    $grade = $row['grade'];
                    $typ = $row['typ'];
                    $team = $row['team'];
                    $tus = $row['tus'];
                    $no1 = $row['no1'];
                    $no2 = $row['no2'];
                    $no3 = $row['no3'];
                    $sta = $row['sta'];

                    echo '
                    
                    <tr>
                        <td>'.$id.'</td>
                        <td style="text-align: left;">'.$list.'</td>
                        <td>'.$grade.'</td>
                        <td>'.$typ.'</td>
                        <td>'.$team.'</td>
                        <td>'.$tus.'</td>
                        <td>'.$no1.'</td>
                        <td>'.$no2.'</td>
                        <td>'.$no3.'</td>
                        <td>'.$sta.'</td>
                        <td>
                            <a href="editdata.php?editid='.$id.'" class="btn btn-warning my-2">Edit</a>
                            &nbsp;&nbsp;
                            <a href="delete.php?deleteid='.$id.'" class="btn btn-danger my-1">Delete</a>
                        </td>
                    </tr>
                    
                    ';
                } 
            ?>
    
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#data_2sep').DataTable();
        } );
    </script>
</body>
</html>