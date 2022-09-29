<?php

    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($con,$_GET['id']);
        $query = "SELECT * FROM students WHERE id='$id'";
        $query_run = mysqli_query($con,$query);

        if(mysqli_num_rows($query_run) > 0) {
            $id = mysqli_fetch_array($query_run);
        }
    }
?>



<?php   // db = ฐานข้อมูล (Database)
    // เชื่อมต่อกับ db
    session_start();
    include 'condb.php';

    $id = $_GET['editid'];
    $strSQL = "SELECT * FROM `data_2sep` WHERE id = $id";
    $result = mysqli_query($con,$strSQL);
    if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);

        $_SESSION['id'] = $row['id'];
        $_SESSION['list'] = $row['list'];

        $datas = $row['multi_data'];

        $_SESSION['grade'] = $row['grade'];
        $_SESSION['typ'] = $row['typ'];
        $_SESSION['team'] = $row['team'];
        $_SESSION['tus'] = $row['tus'];
        $_SESSION['no1'] = $row['no1'];
        $_SESSION['no2'] = $row['no2'];
        $_SESSION['no3'] = $row['no3'];
        $_SESSION['sta'] = $row['sta'];

        $id = $_SESSION['id'];
        $list = $_SESSION['list'];
        $grade = $_SESSION['grade'];
        $typ = $_SESSION['typ'];
        $team = $_SESSION['team'];
        $tus = $_SESSION['tus'];
        $no1 = $_SESSION['no1'];
        $no2 = $_SESSION['no2'];
        $no3 = $_SESSION['no3'];
        $sta = $_SESSION['sta'];


        if(isset($_POST['update'])) {


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


<!-- Tutorial > PHP CRUD Tutorial with MySQL & Bootstrap 4 (Create,Read,Update,Delete) -->
<?php

    session_start();

    include 'condb.php';

    $id = 0;
    $update = false;
    $name = '';
    $location = '';

    if (isset($_POST['save'])) {

        $name = $_POST['name'];
        $location = $_POST['location'];

        $mysqli->query("INSERT INTO data (name,location) VALUES ('$name','$location')") or die($mysqli->error);

        $_SESSION['message'] = "Record has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: index.php");
    }

    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

        if (count($result)==1) {
            $row = $result->fetch_array();
            $name = $row['name'];
            $location = $row['location'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $location = $_POST['location'];

        $mysqli->query("UPDATE data SET name='$name',location='$location' WHERE id='$id' ") or die($mysqli->error());
    }

?>