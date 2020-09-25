<?php
session_start();
include('connect.php');
if (isset($_POST['but'])) {
    $sql = "SELECT * FROM `user` WHERE `u_email` = '" . $_POST['u_email'] . "' AND `u_pass` = '" . $_POST['u_pass'] . "'";
    $stmt = $conn->query($sql);

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['id'] = $row['id'];
        $_SESSION['tname'] = $row['u_tname'];
        $_SESSION['fname'] = $row['u_fname'];
        $_SESSION['lname'] = $row['u_lname'];
        $_SESSION['email'] = $row['u_email'];
        $_SESSION['pass'] = $row['u_pass'];
        header('Refresh:0 url=../index.php');
    } else {
        echo '<script> alert("รหัสผ่านไม่ถูกต้อง ลองใหม่อีกครั้ง") </script>';
        header('Refresh:0 url=../login.php');
    }
}
?>