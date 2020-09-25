<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/title-npru.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">

    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
        background-image: url('img/bg.jpg');
        font-family: 'Kanit', sans-serif;
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        #t1 {
            font-size: 30px;
        }

        #t2 {
            font-size: 22px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        #t1 {
            font-size: 25px;
        }

        #t2 {
            font-size: 18px;
        }
    }

    @media screen and (min-width: 578px) and (max-width: 767px) {
        #t1 {
            font-size: 18px;
        }

        #t2 {
            font-size: 11px;
        }
    }

    @media screen and (max-width: 577px) {

        #t1,
        #t2 {
            font-size: 20px;
            margin-top: 10px;
        }
    }
</style>

<body>

    <?php include('component/header.php') ?>
    <?php 
 
 include('php/connect.php');
 $sql = "SELECT * FROM (`address` INNER JOIN `user` ON user.id=address.id) INNER JOIN history ON user.id = history.id WHERE user.id = '".@$_SESSION['id']."' AND address.id = '".@$_SESSION['id']."' AND history.id = '".@$_SESSION['id']."'";
 $stmt = $conn->query($sql);
 $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <div class="container mt-5 mb-5">
        <div class="card p-3">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-1 my-auto text-center">
                        <img src="img/npru.png" id="t" class="mx-auto" width="75" alt="">
                    </div>
                    <div class="col-sm-11 mt-3 my-auto text-center">
                        <h1 id="t1">สมาคมศิษย์เก่ามหาวิทยาลัยราชภัฏนครปฐม</h1>
                        <h3 id="t2">NAKHON PATHOM RAJABHAT UNIVERSITY ALUMNI ASSOCIATION</h3>
                    </div>
                </div>

                <hr>

                <h3 class="text-center">แบบฟอร์มแก้ไขสมาชิกศิษย์เก่า</h3>
                <hr class="mx-auto" width="300">

                <form id="myform1" name="myform1" method="post" action="php/update.php" enctype="multipart/form-data" onsubmit="return Repassword()" >
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                            <div class="form-group col-sm-4">
                                    <label for="">รหัสนักศึกษา</label>
                                    <input type="number" class="form-control" name="u_std" value="<?php echo $result['u_std'] ?>" autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">รุ่นที่</label>
                                    <input type="number" class="form-control" name="u_gen" value="<?php echo $result['u_gen'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="">ปีการศึกษา</label>
                                    <input type="number" class="form-control" name="u_year" value="<?php echo $result['u_year'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="">สาขา</label>
                                    <input type="text" class="form-control" name="u_major" value="<?php echo $result['u_major'] ?>" autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">คณะ</label>
                                    <select class="browser-default custom-select" name="u_faculty" >
                                        <option value="<?php echo $result['u_faculty'] ?>" selected ><?php echo $result['u_faculty'] ?>(ที่เลือกไว้)</option>
                                        <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                                        <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                                        <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
                                        <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
                                        <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์dfg</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row">
                                <div class="form-group text-center col-sm-12">
                                    <figure class="figure">
                                        <img src="upload/<?php echo $result['u_picture'] ?>" id="imgUpload" style="width:140px;" class="rounded" alt="">
                                    </figure>
                                    <div class="custom-file">
                                        <input type="file" style="display: none;" class="custom-file-input form-control" id="fileUpload" name="fileUpload" onchange="readURL(this)" >
                                        <div class="invalid-feedback">
                                            กรุณาเลือกไฟล์
                                        </div>
                                        <button class="btn purple-gradient btn-sm mt-0" type="button" id="button" name="button" value="Upload" onclick="thisFileUpload();">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>ข้อมูลส่วนตัว</h5>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="form-group col-sm-2">
                                    <label for="">คำนำหน้า</label>
                                    <select class="browser-default custom-select" name="u_tname">
                                        <option value="<?php echo $result['u_tname'] ?>" selected ><?php echo $result['u_tname'] ?>(ที่เลือกไว้)</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกคำนำหน้า
                                    </div>
                                </div>

                                <div class="form-group col-sm-5">
                                    <label for="">ชื่อ</label>
                                    <input type="text" class="form-control" name="u_fname" value="<?php echo $result['u_fname'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-5">
                                    <label for="">นามสกุล</label>
                                    <input type="text" class="form-control" name="u_lname" value="<?php echo $result['u_lname'] ?>" autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="">E-mail</label>
                                    <input type="email" class="form-control" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="u_email" value="<?php echo $result['u_email'] ?>" autocomplete="off" value="" >
                                    <div class="invalid-feedback">
                                        กรุณากรอกอีเมล
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">รหัสผ่าน</label>
                                    <input type="password" id="u_pass" name="u_pass" value="<?php echo $result['u_pass'] ?>" minlength="8" maxlength="12" class="form-control" autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *รหัสผ่านควรมีอย่างน้อย 8-12 หลัก
                                    </div>
                                    <div class="valid-feedback">
                                        รหัสผ่านปลอดภัย
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">ยืนยันรหัสผ่าน</label>
                                    <input type="password" id="u_rpass" name="u_rpass" value="<?php echo $result['u_rpass'] ?>" minlength="8" maxlength="12" class="form-control" autocomplete="off" >
                                </div>

                                <div class="form-group col-sm-12">
                                    <label for="">Facebook</label>
                                    <input type="text" class="form-control" name="u_fb" value="<?php echo $result['u_fb'] ?>" autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *กรุณากรอก Facebook
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>ที่อยู่ปัจจุบัน</h5>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">

                                <div class="form-group col-sm-3">
                                    <label for="">บ้านเลขที่</label>
                                    <input type="text" class="form-control" name="a_h_number" value="<?php echo $result['a_h_number'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">หมู่ที่</label>
                                    <input type="number" class="form-control" name="a_home" value="<?php echo $result['a_home'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">ถนน</label>
                                    <input type="text" class="form-control" name="a_road" value="<?php echo $result['a_road'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">ตำบล/แขวง</label>
                                    <input type="text" class="form-control" name="a_zone" value="<?php echo $result['a_zone'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">อำเภอ/เขต</label>
                                    <input type="text" class="form-control" name="a_district" value="<?php echo $result['a_district'] ?>"autocomplete="off" >
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">จังหวัด</label>
                                    <input type="text" class="form-control" list="a_province" name="a_province" value="<?php echo $result['a_province'] ?>">
                                    <datalist id="a_province">
                                        <?php
                                        include('php/connect.php');
                                        $sql1 = "SELECT * FROM `provinces`";
                                        $stmt1 = $conn->query($sql1);

                                        while ($result1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                        ?>
                                            <option value="<?php echo $result1['provin_name'] ?>">
                                            <?php } ?>
                                    </datalist>
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" name="a_code" value="<?php echo $result['a_code'] ?>">
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">โทรศัพท์บ้าน</label>
                                    <input type="text" class="form-control" name="a_h_phone" value="<?php echo $result['a_h_phone'] ?>">
                                    <div class="invalid-feedback">
                                        *จำเป็น
                                    </div>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">โทรศัพท์มือถือ</label>
                                    <input type="text" class="form-control" name="a_phone" value="<?php echo $result['a_phone'] ?>" pattern="^0([8|9|6])([0-9]{8}$)">
                                    <div class="invalid-feedback">
                                        กรุณากรอกเบอร์มือถือตัวเลข 10 หลัก
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center">ประวัติการทำงานการทำงาน</h3>
                    <hr width="300">
                    <!-- <div class="text-center">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-check-input custom-control-input" name="show" id="1" value="ปัจจุบันทำงาน" onclick="show_content(this.id);" >
                            <label class="custom-control-label" for="1">ปัจจุบันทำงาน</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-check-input custom-control-input" name="show" id="2" value="ว่างงาน/ไม่ได้ประกอบอาชีพ" onclick="show_content(this.id);" >
                            <label class="custom-control-label" for="2">ว่างงาน/ไม่ได้ประกอบอาชีพ</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-check-input custom-control-input" name="show" id="3" value="ไม่ต้องการระบุ" onclick="show_content(this.id);" >
                            <label class="custom-control-label" for="3">ไม่ต้องการระบุ</label>
                        </div>
                    </div> -->

                    <div id="table_1" >
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="">สถานที่ทำงานปัจจุบัน</label>
                                        <input type="text" class="form-control" name="h_workplace"  value="<?php echo $result['h_workplace'] ?>"autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">ตำแหน่ง</label>
                                        <input type="text" class="form-control" name="h_position" value="<?php echo $result['h_position'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">เงินเดือน</label>
                                        <select class="browser-default custom-select" name="h_salary" value="<?php echo $result['h_salary'] ?>">
                                            <option selected disabled><?php echo $result['h_salary'] ?></option>
                                            <option>น้อยกว่า 9,000</option>
                                            <option>9,001-15,000</option>
                                            <option>15,001-25,000</option>
                                            <option>25,001-50,000</option>
                                            <option>มากกว่า 50,000</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="">บ้านเลขที่</label>
                                        <input type="text" class="form-control" name="h_h_home" value="<?php echo $result['h_h_home'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="">หมู่บ้าน</label>
                                        <input type="text" class="form-control" name="h_home" value="<?php echo $result['h_home'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="">ถนน</label>
                                        <input type="text" class="form-control" name="h_road"  value="<?php echo $result['h_road'] ?>"autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="">ตำบล/แขวง</label>
                                        <input type="text" class="form-control" name="h_zone" value="<?php echo $result['h_zone'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">อำเภอ/เขต</label>
                                        <input type="text" class="form-control" name="h_district"  value="<?php echo $result['h_district'] ?>"autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">จังหวัด</label>
                                        <input type="text" class="form-control" list="province2" name="h_province"  value="<?php echo $result['h_province'] ?>"autocomplete="off">
                                        <datalist id="province2">
                                        <option selected value="">
                                            <?php
                                            include('php/connect.php');
                                            $sql2 = "SELECT * FROM `provinces`";
                                            $stmt2 = $conn->query($sql2);

                                            while ($result2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <option value="<?php echo $result2['provin_name'] ?>">
                                                <?php } ?>
                                        </datalist>
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control" name="h_postal" value="<?php echo $result['h_postal'] ?>"autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">โทรศัพท์บ้าน</label>
                                        <input type="text" class="form-control" name="h_h_phone" value="<?php echo $result['h_h_phone'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="">โทรศัพท์มือถือ</label>
                                        <input type="text" class="form-control" name="h_phone" value="<?php echo $result['h_phone'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label for="">E-mail (ติดต่อบริษัท)</label>
                                        <input type="email" class="form-control" name="h_email" value="<?php echo $result['h_email'] ?>" autocomplete="off">
                                        <div class="invalid-feedback">
                                            *จำเป็น
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="table_2" style="display:none"></div>
                    <div id="table_3" style="display:none"></div>

                    <div class="text-center mt-3 mb-1">

                        <div style="display:none" class='alert alert-info alert-dismissable pb-0'>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p id="show"></p>
                        </div>

                        <button type="submit" name="sub" class="btn blue-gradient">ยืนยัน</button>
                        <button type="button" class="btn peach-gradient">ยกเลิก</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

    <script src="js/repass.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#myform1").on("submit", function() {
                var form = $(this)[0];
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>

    <script>
        function readURL(input) { // ตอนอัพโหลด แสดงให้ขึ้นรูป
            var reader = new FileReader();

            reader.onload = function(e) {
                console.log(e.target.result)
                $('#imgUpload').attr('src', e.target.result).width(140)
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>

    <script language="javascript">
        function show_content(id) {
            if (id == 1) {
                document.getElementById("table_1").style.display = "";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "none";
            } else if (id == 2 || id == 3) {
                document.getElementById("table_1").style.display = "none";
                document.getElementById("table_2").style.display = "none";
                document.getElementById("table_3").style.display = "none";
            }
        }
    </script>

    <script>
        function thisFileUpload() {
            document.getElementById("fileUpload").click();
        };
    </script>

</body>

</html>