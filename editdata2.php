<?php   // db = ฐานข้อมูล (Database)
    // เชื่อมต่อกับ db
    include 'condb.php';

    $id = $_GET['editid'];
    $sql = "SELECT * FROM `data_2sep` WHERE id = $id";
    $result = mysqli_query($con,$sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];
        $list = $row['list'];
        $grade = $row['grade'];
        $team = $row['team'];
        $no1 = $row['no1'];
        $no2 = $row['no2'];
        $no3 = $row['no3'];
        $sta = $row['sta'];

        if(isset($_POST['update'])) {
            $id = $_POST['id'];
            $list = $_POST['list'];
            $grade = $_POST['grade'];
            $team = $_POST['team'];
            $no1 = $_POST['no1'];
            $no2 = $_POST['no2'];
            $no3 = $_POST['no3'];
            $sta = $_POST['sta'];
            header('location:data_2sep.php');
        }
    }

    $sql = "UPDATE `data_2sep` SET id='$id',list='$list',grade='$grade',team='$team',no1='$no1',no2='$no2',no3='$no3',sta='$sta' WHERE id = '$id'";
    $result = mysqli_query($con,$sql);

    if($result) {
        echo "Update successfully";
    } else {
        die(mysqli_error($con));
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
     <!-- input ในส่วนของ name ให้ใส่ชื่อเดียวกับในตารางที่เราสร้างไว้ใน db -->
    <div class="container my-5">
    <div class="display-3 text-center my-3">Update</div>
        <!-- form ที่ส่งข้อมูลมา จะต้องกำหนด method="POST" เพื่อส่งค่าข้อมูลที่สำคัญและมีจำนวนมาก -->
        <form method="POST"> 

        <div class="mb-3">
            <label class="form-label">ลำดับ</label>
            <input type="text" class="form-control" value=<?php echo $id ?> name="id" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">รายการแข่งขัน</label>
            <input type="text" class="form-control" value=<?php echo $list ?> name="list" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">ระดับ</label>
            <input type="email" class="form-control" value=<?php echo $grade ?> name="grade" autocomplete="off">
        </div>

        <div class="mb-3">
            <label class="form-label">ทีม</label>
            <input type="text" class="form-control" value=<?php echo $team ?> name="team" autocomplete="off">
        </div>

        <h4>อันดับที่ 1</h4>
        <select name="no1">
            <option selected>เลือกสี</option>
            <option value="สีขาว">สีขาว</option>
            <option value="สีเหลือง">สีเหลือง</option>
            <option value="สีแดง">สีแดง</option>
            <option value="สีน้ำเงิน">สีน้ำเงิน</option>
            <option value="สีแสด">สีแสด</option>
            <option value="สีเขียว">สีเขียว</option>
        </select>

        <h4>อันดับที่ 2</h4>
        <select name="no2">
            <option selected>เลือกสี</option>
            <option value="สีขาว">สีขาว</option>
            <option value="สีเหลือง">สีเหลือง</option>
            <option value="สีแดง">สีแดง</option>
            <option value="สีน้ำเงิน">สีน้ำเงิน</option>
            <option value="สีแสด">สีแสด</option>
            <option value="สีเขียว">สีเขียว</option>
        </select>
        
        <h4>อันดับที่ 3</h4>
        <select name="no3">
            <option selected>เลือกสี</option>
            <option value="สีขาว">สีขาว</option>
            <option value="สีเหลือง">สีเหลือง</option>
            <option value="สีแดง">สีแดง</option>
            <option value="สีน้ำเงิน">สีน้ำเงิน</option>
            <option value="สีแสด">สีแสด</option>
            <option value="สีเขียว">สีเขียว</option>
        </select>

        <div class="my-3">
            สถิติ
            <input class="form-control" type="text" name="sta" placeholder="00:00:00"  autocomplete="off" />
        </div>

        <!-- / btn-lg = ใหญ่ขึ้น / my-3 = magin บน ล่าง ห่างกัน5 -->
        <button class="btn btn-dark my-3" type="submit" name="update">Update</button>

        </form>
    </div>
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>