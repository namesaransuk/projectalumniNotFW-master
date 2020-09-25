function Repassword() {
    var password = document.myform1.u_pass.value;
    var rpassword = document.myform1.u_rpass.value;

    if (password == rpassword) {

    } else {
        $(document).ready(function () {
            $('.alert').show()
        });

        document.getElementById('show').innerHTML = "รหัสผ่านไม่ตรงกัน กรุณาตรวจสอบใหม่อีกครั้ง"

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000);

        return false;
    }
}