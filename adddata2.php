<?php   // db = ฐานข้อมูล (Database)
    // เชื่อมต่อกับ db
    include 'condb.php';

    // คำสั่ง เมื่อ(ถ้า)กดปุ่ม submit ข้อมูลจะถูกส่งไปที่ db
    if(isset($_POST['submit'])) {
        // ถ้ามีการส่งข้อมูล ชื่อ fname ข้อมูลก็จะถูกส่งไปยังตาราง fname ใน db

        $id = $_POST['id'];
        // $number = $_POST['number'];
        $list1 = $_POST['list1'];
        $list2 = $_POST['list2'];
        $list3 = $_POST['list3'];
        $grade = $_POST['grade'];
        $typ = $_POST['typ'];
        $team = $_POST['team'];
        $tus = $_POST['tus'];
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $no3 = $_POST['no3'];
        $sta = $_POST['sta'];


        // insert query
        $sql = "INSERT INTO `data_2sep` (id,list1,list2,list3,grade,typ,team,tus,no1,no2,no3,sta) values ('$id','$list1','$list2','$list3','$grade','$typ','$team','$tus','$no1','$no2','$no3','$sta')";

        $result = mysqli_query($con,$sql);

            if($result) {
                echo 'Data inserted successfully';
                header('location:data_2sep.php');
            } else {
                die(mysqli_error($con));
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
    
</head>
<body>
     <!-- input ในส่วนของ name ให้ใส่ชื่อเดียวกับในตารางที่เราสร้างไว้ใน db -->
    <div class="container my-5">
    <div class="display-6 text-center my-3">เพิ่มรายการ</div>
        <!-- form ที่ส่งข้อมูลมา จะต้องกำหนด method="POST" เพื่อส่งค่าข้อมูลที่สำคัญและมีจำนวนมาก -->
        <form method="POST"> 
        <div class="row">
            <div class="col-md-1 mb-3">
                <label class="form-label">ลำดับ</label>
                <input type="text" class="form-control" name="id" autocomplete="off">
            </div>
        </div>

        <div class="row">
                <label class="form-label">รายการแข่งขัน</label>
                <div class="col mb-3">
                <input type="text" class="form-control my-2" name="list1" autocomplete="off"></div>
                <div class="col mb-3">
                <input type="text" class="form-control my-2" name="list2" autocomplete="off"></div>
                <div class="col mb-3">
                <input type="text" class="form-control my-2" name="list3" autocomplete="off"></div>
        </div>

        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ระดับ</label>
                <input type="text" class="form-control" name="grade" autocomplete="off"></div>
            <div class="col mb-3">
                <label class="form-label">ประเภท</label>
                <input type="text" class="form-control" name="typ" autocomplete="off"></div>
            <div class="col mb-3">
                <label class="form-label">ทีม</label>
                <input type="text" class="form-control" name="team" autocomplete="off"></div>
            <div class="col mb-3">
                <label class="form-label">สถานะ</label>
                <select class="form-select" name="tus">
                    <option selected>เลือกสถานะ</option>
                    <option value="แข่งแล้ว">แข่งแล้ว</option>
                    <option value="ยังไม่ได้แข่ง">ยังไม่ได้แข่ง</option>
                    <option value="ยกเลิกรายการ">ยกเลิกรายการ</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col mb-3">
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

            <div class="col mb-3">
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
            
            <div class="col mb-3">
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
            <div class="col-sm-2">
                สถิติ
                <input class="form-control" type="text" name="sta" placeholder="00:00:00"  autocomplete="off" />
            </div>
        </div>
       



        <!-- / btn-lg = ใหญ่ขึ้น / my-3 = magin บน ล่าง ห่างกัน5 -->
        <button class="btn btn-dark my-3" type="submit" name="submit">บันทึก</button>

        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>