<?php
session_start();
if(isset($_SESSION['dangnhap'])){
    header('Location:index.php');
}
include('config/config.php');
if(isset($_POST['dangnhap'])){
 $tkhoan=$_POST['tkhoan	'];
 $mkhau=$_POST['mkhau'];
 
 $trvan="SELECT * FROM quantri WHERE tkhoan='$tkhoan' AND  mkhau='$mkhau'";
$res= mysqli_query($mysqli,$trvan);
$count=mysqli_num_rows($res);
if($count>0){
    $_SESSION['dangnhap']=$tkhoan;
    header('Location:index.php');


}else{
    echo '<script>alert("Tài khoản hoặc mật khẩu chưa chính xác.Vui lòng kiểm tra lại ! ")</script>';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for the login page -->
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .login-container h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #343a40;
        }
        .login-container .form-floating {
            margin-bottom: 1rem;
        }
        .btn-login {
            width: 100%;
            background-color: #007bff;
            border: none;
            padding: 10px;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo or Title -->
        <div class="text-center mb-4">
            <img src="../img/admin.jpg" alt="Logo" width="30%" class="mb-3">
            <h1>Admin Login</h1>
        </div>

        <!-- Login Form -->
        <form method="POST" action="">
            <div class="form-floating">
                <input type="text" class="form-control"  name="tkhoan	" placeholder="name@example.com" >
                <label for="email">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="mkhau" placeholder="Password" >
                <label for="password">Password</label>
            </div>
            <button class="btn btn-login btn-primary" type="submit" name="dangnhap">Login</button>
        </form>

        <!-- Forgot Password -->
        <div class="forgot-password">
            <a href="matkhau.php">Forgot your password?</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>