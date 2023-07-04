<?php
    $conn = mysqli_connect("localhost", "root", "", "btl-cnweb");
    mysqli_set_charset($conn, 'utf8');
    if( isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '') {
        // thuc hien xu ly khi nguoi dung an nut submit va dien day du thong tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if( $password != $repassword ){
            header("location:dangki.php");
        }
        $sql = "select * from users where username='$username'";
        $old = mysqli_query($conn,$sql);
        if( mysqli_num_rows($old) >0 ) {
            header("location: dangki.php");
        }
        $sql = "insert into users (username,password) values ('$username', '$password')";
        mysqli_query($conn,$sql);
        echo "Đã đăng kí thành công";
    }
    else {
        header("location:dangki.php");
    }
?>