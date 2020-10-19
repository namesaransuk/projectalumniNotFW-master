<?php
include('connect.php');
session_start();
$u_std = $_POST['u_std'];
$u_tname = $_POST['u_tname'];
$u_fname = $_POST['u_fname'];
$u_lname = $_POST['u_lname'];
$u_email = $_POST['u_email'];
$u_pass = md5($_POST['u_pass']);
$u_gen = $_POST['u_gen'];
$u_faculty = $_POST['u_faculty'];
$u_major = $_POST['u_major'];
$u_year = $_POST['u_year'];
$u_fb = $_POST['u_fb'];
$u_picture = $_FILES['fileUpload']['name'];

$a_h_number = $_POST['a_h_number'];
$a_home = $_POST['a_home'];
$a_road = $_POST['a_road'];
$a_zone = $_POST['a_zone'];
$a_district = $_POST['a_district'];
$a_province = $_POST['a_province'];
$a_code = $_POST['a_code'];
$a_h_phone = $_POST['a_h_phone'];
$a_phone = $_POST['a_phone'];

$h_type = $_POST['show'];
$h_workplace = $_POST['h_workplace'];
$h_h_home = $_POST['h_h_home'];
$h_home = $_POST['h_home'];
$h_road = $_POST['h_road'];
$h_zone = $_POST['h_zone'];
$h_district = $_POST['h_district'];
$h_province = $_POST['h_province'];
$h_postal = $_POST['h_postal'];
$h_h_phone = $_POST['h_h_phone'];
$h_phone = $_POST['h_phone'];
$h_position = $_POST['h_position'];
$h_salary = $_POST['h_salary'];
$h_email = $_POST['h_email'];

    $sql = "UPDATE `user` SET `u_tname`='$u_tname',`u_fname`='$u_fname',`u_lname`='$u_lname',`u_email`='$u_email',`u_std`='$u_std',`u_pass`='$u_pass',`u_gen`='$u_gen',`u_faculty`='$u_faculty',`u_major`='$u_major',`u_year`='$u_year',`u_fb`='$u_fb' WHERE id= '".$_SESSION['id']."' ";
    $result = $conn->query($sql);


    

    if ($_FILES['fileUpload']['name'] != "") {
        $newName = $_FILES['fileUpload']['name'];
        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../upload/' . $newName)) {

            // @unlink("../../products/".$_POST["hdnOldFile"]);
            $sql = "UPDATE `user` SET u_picture  = '". $newName ."'  WHERE id= '".$_SESSION['id']."'";
            $result = $conn->query($sql);

            if ($result) {
                echo '<script> alert("Update สำเร็จ !!!") </script>';
                header('Refresh:0 url=../alumnilist.php');
            } else {
                echo '<script> alert("อัพเดตไม่ได้ โปรดลองอีกครั้ง") </script>';
            }
        }
    }
    else {
        echo '<script> alert("Update สำเร็จ !!!") </script>';
                header('Refresh:0 url=../alumnilist.php');
    }
