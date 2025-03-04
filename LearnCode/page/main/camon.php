<?php
session_start();
include ("adm/config/config.php");
include('carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');

if (isset($_POST['dky'])) {
    $tenkh = $_POST['tenkh'];
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $dchi = $_POST['dchi'];
    $hthuc = $_POST['hthuc'];

    $error = [];

    // Validate họ tên
    if (empty(trim($hoten))) {
        $error['hoten'] = 'Bạn vui lòng không bỏ trống';
    } else {
        if (strlen(trim($hoten)) < 5) {
            $error['hoten'] = 'Họ tên phải lớn hơn hoặc bằng 5 ký tự';
        }
    }

    // Validate email
    if (empty(trim($email))) {
        $error['email'] = 'Bạn vui lòng nhập địa chỉ email';
    } else {
        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Địa chỉ email của bạn không hợp lệ';
        }
    }

    // Nếu có lỗi, lưu lỗi vào session
    if (!empty($error)) {
        $_SESSION['errors'] = $error;
        $_SESSION['old'] = $_POST; // Lưu dữ liệu cũ để trả lại cho form
        header("Location: index.php?quanly=learn"); // Chuyển hướng lại trang đăng ký
        exit();
    } else {
        // Thực hiện đăng ký nếu không có lỗi
        $sqldk = mysqli_query($mysqli, "INSERT INTO dangky(hoten, email, sdt, dchi, hthuc, tgian, idkh) 
            VALUE('$hoten', '$email', '$sdt', '$dchi', '$hthuc', '$now', '$tenkh')");
        
        if ($sqldk) {
            echo '<script>alert("Bạn đã đăng ký thành công!")</script>';
            unset($_SESSION['old'] );
            unset($_SESSION['errors'] );
        }
    }
}
?>
 <style>
        /* Animation đơn giản */
        .thank-you-message {
            animation: fadeIn 2s ease-in-out;
            color: #28a745;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .payment-info {
            animation: slideUp 2s ease-in-out;
            padding: 20px;
            border: 2px solid #0d6efd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Thông điệp cảm ơn -->
        <div class="thank-you-message">
            Cảm ơn bạn đã đăng ký khóa học!
        </div>

        <!-- Thông tin thanh toán -->
        <div class="payment-info">
            <h3>Thông tin thanh toán</h3>
            <p>Vui lòng thanh toán qua chuyển khoản ngân hàng với thông tin sau:</p>
            <ul>
                <li><strong>Ngân hàng:</strong> JHS</li>
                <li><strong>Chủ tài khoản:</strong> TimmyCode</li>
                <li><strong>Số tài khoản:</strong> 0123456789</li>
                <li><strong>Nội dung chuyển khoản :</strong> Họ và tên_tên khóa học</li>
                <li><strong>Chi nhánh:</strong> Hà Nội</li>
            </ul>
            <p>Sau khi chuyển khoản, vui lòng giữ lại biên lai và thông báo cho chúng tôi qua email <a href="mailto:support@example.com">timmy22@gmail.com</a>.</p>
        </div>
    </div>
    <br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>