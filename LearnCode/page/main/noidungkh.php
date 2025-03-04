<?php
$sql="SELECT*FROM khoahoc WHERE khoahoc.idkh ='$_GET[idkh]' LIMIT 1";
$querychitiet=mysqli_query($mysqli,$sql);
// print_r($querychitiet);

?>
<style>
        .course-title {
            font-weight: bold;
            font-size: 2rem;
        }
        .border-custom {
            border: 2px solid #0d6efd;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-register {
            background-color: #0d6efd;
            color: white;
        }
        .btn-register:hover {
            background-color: #084298;
        }
    </style>
</head>
<body>
<?php
          // Giả sử bạn có các mục lục từ cơ sở dữ liệu
          while($rowct=mysqli_fetch_array($querychitiet)){
           
          ?>
        </ul>
    <div class="container mt-5">
        <!-- Tên khóa học -->
        <h1 class="course-title text-center"><?php echo $rowct['tenkh']; ?></h1>

        <!-- Mục tiêu khóa học -->
        <div class="border-custom">
            <h3>Mục tiêu khóa học</h3>
            <p><?php echo nl2br( $rowct['mtieu']); ?></p>
        </div>

        <!-- Nội dung khóa học -->
        <div class="border-custom">
            <h3>Nội dung khóa học</h3>
            <p><?php echo nl2br( $rowct['noidung']); ?></p>
        </div>

        <!-- Thời lượng, học phí và lịch học -->
        <div class="border-custom">
            <h3>Thông tin khóa học</h3>
            <p><strong>Thời lượng:</strong> <?php echo nl2br( $rowct['tlg']); ?></p>
            <p><strong>Học phí: </strong><?php echo number_format ($rowct['hocphi'],0,',','.') ?> VND</p>
            <p><strong>Lịch học:</strong><?php echo nl2br( $rowct['lichhoc']); ?></p>
        </div>

        <!-- Nút đăng ký khóa học -->
        <div class="text-center">
        <a href="index.php?quanly=learn&idkh=<?php echo $rowct['idkh']?>" class="btn btn-dark">Đăng Ký Khóa Học</a>
        </div>
    </div>
          <br><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
}
?>