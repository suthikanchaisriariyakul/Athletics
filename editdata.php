<?php

    session_start();
    include 'condb.php';

    $id = $_GET['editid'];
    $strSQL = "SELECT * FROM `data_2sep` WHERE id = $id";
    $result = mysqli_query($con,$strSQL);
    if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
// แสดงข้อมูลเดิมที่ Add เข้า
        $_SESSION['id'] = $row['id'];
        $list = $row['list'];
        $listdetails = array('','',$list);
        $_SESSION['grade'] = $row['grade'];
        $_SESSION['typ'] = $row['typ'];
        $_SESSION['team'] = $row['team'];
        $_SESSION['tus'] = $row['tus'];
        $_SESSION['no1'] = $row['no1'];
        $_SESSION['no2'] = $row['no2'];
        $_SESSION['no3'] = $row['no3'];
        $_SESSION['sta'] = $row['sta'];

        $id = $_SESSION['id'];
        $list = $listdetails;
        $grade = $_SESSION['grade'];
        $typ = $_SESSION['typ'];
        $team = $_SESSION['team'];
        $tus = $_SESSION['tus'];
        $no1 = $_SESSION['no1'];
        $no2 = $_SESSION['no2'];
        $no3 = $_SESSION['no3'];
        $sta = $_SESSION['sta'];


        if(isset($_POST['update'])) {

// ส่งข้อมูลใหม่ที่ทำการบันทึกไป data_2sep.php
            $id = $_POST['id'];
            $list = $_POST['list'];
            $grade = $_POST['grade'];
            $typ = $_POST['typ'];
            $team = $_POST['team'];
            $tus = $_POST['tus'];
            $no1 = $_POST['no1'];
            $no2 = $_POST['no2'];
            $no3 = $_POST['no3'];
            $sta = $_POST['sta'];
        

    $strSQL = "UPDATE `data_2sep` SET id='$id',list='$list',grade='$grade',typ='$typ',team='$team',tus='$tus',no1='$no1',no2='$no2',no3='$no3',sta='$sta' WHERE id = '$id'";
    $result = mysqli_query($con,$strSQL);

    if($result) {
        echo "Edit successfully";
        header('location:data_2sep.php');
    } else {
        die(mysqli_error($con));
    }

    }
}
    

?>

<DOCTYP html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .container {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 850px;
            position: relative;
            padding: 5px;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
        }
        
        .neumorphism {
            margin: 3rem;
        }

        

    </style>

</head>
<body>
     <!-- input ในส่วนของ name ให้ใส่ชื่อเดียวกับในตารางที่เราสร้างไว้ใน db -->
    <div class="container my-5">
        <div class="neumorphism">
            <div class="display-6 text-center my-3">บันทึกผล</div>

            <!-- form ที่ส่งข้อมูลมา จะต้องกำหนด method="POST" เพื่อส่งค่าข้อมูลที่สำคัญและมีจำนวนมาก -->
            <form method="POST">

        <div class="row">        
            <div class="col-2 mb-3">
                <label class="form-label">ลำดับ</label>
                <input type="text" class="form-control" value="<?php echo $row['id'] ?>" name="id" autocomplete="off">
            </div>
            <div class="col-5 mb-3">
                <label class="form-label">รายการแข่งขัน</label>
                <input type="text" class="form-control" value="<?php echo implode(" ",$list); ?>" name="list" autocomplete="off">
            </div>
        </div>
        
        <div class="row">  
            <div class="col-3 mb-3">
                <label class="form-label">ระดับ</label>
                    <select class="form-select" name="grade">
                        <option selected><?php echo $row['grade'] ?></option>
                        <option value="ป.4">ป.4</option>
                        <option value="ป.5">ป.5</option>
                        <option value="ป.6">ป.6</option>
                        <option value="ม.1">ม.1</option>
                        <option value="ม.2">ม.2</option>
                        <option value="ม.3">ม.3</option>
                        <option value="ม.ปลาย">ม.ปลาย</option>
                    </select>
            </div> 
            <div class="col-3 mb-3">
                <label class="form-label">ประเภท</label>
                    <select class="form-select" name="typ">
                        <option selected><?php echo $row['typ'] ?></option>
                        <option value="เลือกสถานะ">เลือกสถานะ</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                    </select>
            </div>
            <div class="col-3 mb-3">
                <label class="form-label">ทีม</label>
                <select class="form-select" name="team">
                        <option selected><?php echo $row['team'] ?></option>
                        <option value="เลือกทีม">เลือกทีม</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                    </select>
            </div>
            <div class="col-3 mb-3">
                <label class="form-label">สถานะ</label>
                <select class="form-select" name="tus">
                    <option selected> <?php echo $row['tus'] ?></option>
                    <option value="เลือกสถานะ">เลือกสถานะ</option>
                    <option value="แข่งแล้ว">แข่งแล้ว</option>
                    <option value="ยังไม่ได้แข่ง">ยังไม่ได้แข่ง</option>
                    <option value="ยกเลิกรายการ">ยกเลิกรายการ</option>
                </select>
            </div>
        </div>

    
        <div class="row">
            <div class="col-3 mb-3">
                <img src="img/coin1.png" height="60px" alt="">
                <p>อันดับที่ 1</p>
                <select class="form-select" name="no1">
                    <option selected><?php echo $row['no1'] ?></option>
                    <option value="เลือกสี">เลือกสี</option>
                    <option value="สีขาว">สีขาว</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีแสด">สีแสด</option>
                    <option value="สีเขียว">สีเขียว</option>
                </select>
            </div>

            <div class="col-3 mb-3">
                <img src="img/coin2.png" height="60px" alt="">
                <p>อันดับที่ 2</p>
                <select class="form-select" name="no2">
                    <option selected><?php echo $row['no2'] ?></option>
                    <option value="เลือกสี">เลือกสี</option>
                    <option value="สีขาว">สีขาว</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีแสด">สีแสด</option>
                    <option value="สีเขียว">สีเขียว</option>
                </select>
            </div>
            
            <div class="col-3 mb-3">
                <img src="img/coin3.png" height="60px" alt="">
                <p>อันดับที่ 3</p>
                <select class="form-select" name="no3">
                    <option selected><?php echo $row['no3'] ?></option>
                    <option value="เลือกสี">เลือกสี</option>
                    <option value="สีขาว">สีขาว</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีแสด">สีแสด</option>
                    <option value="สีเขียว">สีเขียว</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                สถิติ
                <input class="form-control" id="settime" type="time" step="1" value=<?php echo $row['sta'] ?> name="sta" placeholder="00:00:00"  autocomplete="off" />
            </div>
        </div>
        <!-- / btn-lg = ใหญ่ขึ้น / my-3 = magin บน ล่าง ห่างกัน5 -->

        <div class="save">
            <!-- / btn-lg = ใหญ่ขึ้น / my-3 = magin บน ล่าง ห่างกัน5 -->
            <button class="btn btn-success my-3" type="update" name="update">บันทึก</button>
            <a href="data_2sep.php" class="btn btn-danger my-3">ยกเลิก</a>
        </div>
       
        </form>
    </div>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>