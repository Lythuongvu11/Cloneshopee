<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "btl-cnweb");
    mysqli_set_charset($conn, 'utf8');
    if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "select * from users where username='$username' and password='$password'";
        $user = mysqli_query($conn, $sql);
        if( mysqli_num_rows($user) >0) {
            echo "Bạn đã đăng nhập thành công";
            $_SESSION['user'] = $username;
            header("location: index_dangnhap.php");
        }else {
            echo "Bạn đã nhập sai tài khoản hoặc mật khẩu, vui lòng nhập lại";
            header("location: dangnhap.php");
        }
        
    }
    else {
        header("location: dangnhap.php");
    }
?>