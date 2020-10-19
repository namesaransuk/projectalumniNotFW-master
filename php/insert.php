<?php

include('connect.php');
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

// $h_type = $_POST['show'];
// $h_workplace = $_POST['h_workplace'];
// $h_h_home = $_POST['h_h_home'];
// $h_home = $_POST['h_home'];
// $h_road = $_POST['h_road'];
// $h_zone = $_POST['h_zone'];
// $h_district = $_POST['h_district'];
// $h_province = $_POST['a_province'];
// $h_postal = $_POST['h_postal'];
// $h_h_phone = $_POST['h_h_phone'];
// $h_phone = $_POST['h_phone'];
// $h_position = $_POST['h_position'];
// $h_salary = $_POST['h_salary'];
// $h_email = $_POST['h_email'];

    // @$h_type = $_POST['show'];
    // @$h_workplace = $_POST['h_workplace'];
    // @$h_h_home = $_POST['h_h_home'];
    // @$h_home = $_POST['h_home'];
    // @$h_road = $_POST['h_road'];
    // @$h_zone = $_POST['h_zone'];
    // @$h_district = $_POST['h_district'];
    // @$h_province = $_POST['h_province'];
    // @$h_postal = $_POST['h_postal'];
    // @$h_h_phone = $_POST['h_h_phone'];
    // @$h_phone = $_POST['h_phone'];
    // @$h_position = $_POST['h_position'];
    // @$h_salary = $_POST['h_salary'];
    // @$h_email = $_POST['h_email'];

    // $h_workplace2 = $_POST['h_workplace2'];
    // $h_h_home2 = $_POST['h_h_home2'];
    // $h_home2 = $_POST['h_home2'];
    // $h_road2 = $_POST['h_road2'];
    // $h_zone2 = $_POST['h_zone2'];
    // $h_district2 = $_POST['h_district2'];
    // $a_province2 = $_POST['a_province2'];
    // $h_postal2 = $_POST['h_postal2'];
    // $h_h_phone2 = $_POST['h_h_phone2'];
    // $h_phone2 = $_POST['h_phone2'];
    // $h_position2 = $_POST['h_position2'];
    // $h_salary2 = $_POST['h_salary2'];
    // $h_email2 = $_POST['h_email2'];

    // $h_workplace3 = $_POST['h_workplace3'];
    // $h_h_home3 = $_POST['h_h_home3'];
    // $h_home3 = $_POST['h_home3'];
    // $h_road3 = $_POST['h_road3'];
    // $h_zone3 = $_POST['h_zone3'];
    // $h_district3 = $_POST['h_district3'];
    // $a_province3 = $_POST['a_province3'];
    // $h_postal3 = $_POST['h_postal3'];
    // $h_h_phone3 = $_POST['h_h_phone3'];
    // $h_phone3 = $_POST['h_phone3'];
    // $h_position3 = $_POST['h_position3'];
    // $h_salary3 = $_POST['h_salary3'];
    // $h_email3 = $_POST['h_email3'];

    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], '../upload/' . $u_picture)) {
        $sql1 = "INSERT INTO `user`(`id`, `u_tname`, `u_fname`, `u_lname`, `u_email`, `u_std`, `u_pass`, `u_gen`, `u_faculty`, `u_major`, `u_year`, `u_fb`, `u_picture`) 
    VALUES (NULL,'$u_tname','$u_fname','$u_lname','$u_email','$u_std','$u_pass','$u_gen','$u_faculty','$u_major','$u_year','$u_fb','$u_picture')";
        $stmt1 = $conn->query($sql1);

        $sql2 = "INSERT INTO `address`(`id`, `a_h_number`, `a_home`, `a_road`, `a_zone`, `a_district`, `a_province`, `a_code`, `a_h_phone`, `a_phone`) 
    VALUES (NULL,'$a_h_number','$a_home','$a_road','$a_zone','$a_district','$a_province','$a_code','$a_h_phone','$a_phone')";
        $stmt2 = $conn->query($sql2);

        $sql3 = "INSERT INTO `history`(`id`, `h_type`, `h_ workplace`, `h_h_home`, `h_home`, `h_road`, `h_zone`, `h_ district`, `h_ province`, `h_postal`, `h_h_phone`, `h_phone`, `h_position`, `h_salary`, `h_email`) 
    VALUES (NULL,'$h_type','$h_workplace','$h_h_home','$h_home','$h_road','$h_zone','$h_district','$h_province','$h_postal','$h_h_phone','$h_phone','$h_position','$h_salary','$h_email')";
        $stmt3 = $conn->query($sql3);

        // $sql4 = "INSERT INTO `history`(`h_id`, `h_workplace`, `h_h_home`, `h_home`, `h_road`, `h_zone`, `h_district`, `h_province`, `h_postal`, `h_h_phone`, `h_phone`, `h_position`, `h_salary`, `h_email`) 
        // VALUES (NULL,'$h_workplace2','$h_h_home2','$h_home2','$h_road2','$h_zone2','$h_district2','$a_province2','$h_postal2','$h_h_phone2','$h_phone2','$h_position2','$h_salary2','$h_email2')";
        // $stmt4 = $conn->query($sql4);

        // $sql5 = "INSERT INTO `history`(`h_id`, `h_workplace`, `h_h_home`, `h_home`, `h_road`, `h_zone`, `h_district`, `h_province`, `h_postal`, `h_h_phone`, `h_phone`, `h_position`, `h_salary`, `h_email`) 
        // VALUES (NULL,'$h_workplace3','$h_h_home3','$h_home3','$h_road3','$h_zone3','$h_district3','$a_province3','$h_postal3','$h_h_phone3','$h_phone3','$h_position3','$h_salary3','$h_email3')";
        // $stmt5 = $conn->query($sql5);

        if ($stmt1 && $stmt2 && $stmt3) {
            echo '<script> alert("สมัครสำเร็จ กรุณาเข้าสู่ระบบ !!") </script>';
            header('Refresh:0 url=../login.php');
        } else {
            echo '<script> alert("เกิดข้อผิดพลาด !!") </script>';
        }
    }
