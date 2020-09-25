<?php
session_start();
session_destroy();
echo '<script> alert("อกจากระบบเรียบร้อย") </script>';
header('refresh:0 url=../index.php');
?>