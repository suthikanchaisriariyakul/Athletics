<?php   // db = ฐานข้อมูล (Database)
    // เชื่อมต่อกับ db

    include 'condb.php';

    // คำสั่ง เมื่อ(ถ้า)กดปุ่ม submit ข้อมูลจะถูกส่งไปที่ db
    if(isset($_POST['submit'])) {
        // ถ้ามีการส่งข้อมูล ชื่อ fname ข้อมูลก็จะถูกส่งไปยังตาราง fname ใน db

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


        // insert query
        $sql = "INSERT INTO data_2sep (id,list,grade,typ,team,tus,no1,no2,no3,sta) values ('$id','$list','$grade','$typ','$team','$tus','$no1','$no2','$no3','$sta')";

        $result = mysqli_query($con,$sql);

            if($result) {
                echo 'Data inserted successfully';
                header('location:data_2sep.php');
            } else {
                die(mysqli_error($con));
                echo 'error';
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
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
            text-align: center;
        }

        .row {
            width: 100%;
            text-align: center;
        }
    </style>
    
</head>
<body>
     <!-- input ในส่วนของ name ให้ใส่ชื่อเดียวกับในตารางที่เราสร้างไว้ใน db -->
    <div class="container my-5">
        <div class="neumorphism">
            <div class="display-6 text-center my-3">เพิ่มรายการ</div>
        <!-- form ที่ส่งข้อมูลมา จะต้องกำหนด method="POST" เพื่อส่งค่าข้อมูลที่สำคัญและมีจำนวนมาก -->
            <form method="POST"> 
                <div class="row">
                    <div class="col-2 mb-3">
                        <label class="form-label">ลำดับ</label>
                        <input type="text" class="form-control" name="id" autocomplete="off">
                    </div>
                    <div class="col-5 mb-3">
                        <label class="form-label">รายการแข่งขัน</label>
                        <input type="text" class="form-control" name="list" autocomplete="on">
            </div>

        </div>

        <div class="row">
            <div class="col-3 mb-3">
                <label class="form-label">ระดับ</label>
                    <select class="form-select" name="grade">
                        <option selected>เลือกระดับชั้น</option>
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
                        <option selected>เลือกประเภท</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                    </select>
            </div>
            <div class="col-3 mb-3">
                <label class="form-label">ทีม</label>
                    <select class="form-select" name="team">
                        <option selected>เลือกทีม</option>
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
                    <option selected>เลือกสถานะ</option>
                    <option value="แข่งแล้ว">แข่งแล้ว</option>
                    <option value="ยังไม่ได้แข่ง">ยังไม่ได้แข่ง</option>
                    <option value="ยกเลิกรายการ">ยกเลิกรายการ</option>
                </select>
            </div>
        
        <div class="row">
            <div class="col-3 mb-3">
                <img src="img/coin1.png" width="25px" alt="">
                <p>อันดับที่ 1</p>
                <select class="form-select" name="no1">
                    <option selected>เลือกสี</option>
                    <option value="สีขาว">สีขาว</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีแสด">สีแสด</option>
                    <option value="สีเขียว">สีเขียว</option>
                </select>
            </div>

            <div class="col-3 mb-3">
                <img src="img/coin2.png" width="25px" alt="">
                <p>อันดับที่ 2</p>
                <select class="form-select" name="no2">
                    <option selected>เลือกสี</option>
                    <option value="สีขาว">สีขาว</option>
                    <option value="สีเหลือง">สีเหลือง</option>
                    <option value="สีแดง">สีแดง</option>
                    <option value="สีน้ำเงิน">สีน้ำเงิน</option>
                    <option value="สีแสด">สีแสด</option>
                    <option value="สีเขียว">สีเขียว</option>
                </select>
            </div>
        
        
            <div class="col-3">
                <img src="img/coin3.png" width="25px" alt="">
                <p>อันดับที่ 3</p>
                <select class="form-select" name="no3">
                    <option selected>เลือกสี</option>
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
                <p>สถิติ</p> 
                <input class="form-control" type="text" name="sta" placeholder="00:00:00"  autocomplete="off" />
                </div>
            </div>
        </div>

        <div class="save">
            <!-- / btn-lg = ใหญ่ขึ้น / my-3 = magin บน ล่าง ห่างกัน5 -->
            <button class="btn btn-success my-3" type="submit" name="submit">บันทึก</button>
            <a href="data_2sep.php" class="btn btn-danger my-3">ยกเลิก</a>
        </div>

            <!-- <div class="row" style="text-align: center;">
                    <button class="btn btn-success" type="submit" name="update">บันทึก</button>
                    <a href="data_2sep.php" class="btn btn-danger">ยกเลิก</a>
            </div> -->

        </form>
        </div>
    </div>
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>