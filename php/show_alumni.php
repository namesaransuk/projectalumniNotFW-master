<?php
include('connect.php');
$sql1 = "SELECT * FROM `user`";
$stmt1 = $conn->query($sql1);

$sql2 = "SELECT * FROM `address`";
$stmt2 = $conn->query($sql2);

$sql3 = "SELECT * FROM `history`";
$stmt3 = $conn->query($sql3);

$sql4 = "SELECT * FROM (`address` INNER JOIN `user` ON user.id=address.id) INNER JOIN history ON user.id = history.id WHERE user.id = '".@$_GET['id']."' AND address.id = '".@$_GET['id']."' AND history.id = '".@$_GET['id']."'";
$stmt4 = $conn->query($sql4);

// $sql4 = "SELECT * FROM `user` AS `u_id`
//     INNER JOIN `address` AS `a_id`
//     ON  (`user`.`u_id` = `address`.`a_id`
//     INNER JOIN `history` AS `h_id`
//     ON (`user`.`u_id`=`history`.`h_id) WHERE u_id = '".@$_GET['u_id']."'";
//     $stmt4 = $conn->query($sql4);

