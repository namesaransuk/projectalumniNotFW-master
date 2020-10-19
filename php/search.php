<?php
include('connect.php');

$keyword = @$_POST['search'];

$sql = "SELECT * FROM `user` WHERE `u_std` LIKE '%$keyword%'";
$stmt = $conn->query($sql);

