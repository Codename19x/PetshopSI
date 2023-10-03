<?php
    require "connect.php";

    error_reporting(0);
 
    session_start();
    

    
    if (isset($_POST['save'])) {
        $email = $_POST['user'];
        $password = $_POST['pass'];
    
        $sql = "SELECT * FROM user WHERE username='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows( $result ) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
        } else {
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
    
?>