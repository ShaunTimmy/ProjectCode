<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
session_start();
$sql="SELECT*FROM khoahoc WHERE khoahoc.idkh ='$_GET[idkh]' LIMIT 1";
$querychitiet=mysqli_query($mysqli,$sql);
// print_r($querychitiet);

?>
<div class="container mt-5">
        <h1 class="text-center">Form Đăng Ký Khóa Học</h1>
        
        <form action="index.php?quanly=camon" method="POST">
            <!-- Tên khóa học -->
                   <div class="mb-3">
                <label for="courseName" class="form-label">Tên Khóa Học</label>
                <select class="form-select" id="courseName" name="tenkh">
                    <option value="" disabled selected>Chọn khóa học</option>
                    <?php
                    $sql_danhmuc="SELECT*FROM khoahoc ORDER BY  idkh ASC";
                    $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
  ?>

  <option value="<?php echo $row_danhmuc['idkh']?>"><?php echo $row_danhmuc['tenkh']?></option>
  
  <?php
  }
  ?>
                </select>
            </div>

            <!-- Tên người đăng ký -->
            <div class="mb-3">
            <label for="fullName" class="form-label">Họ và Tên</label>
            <input type="text" class="form-control" id="fullName" name="hoten" placeholder="Nhập tên của bạn"
                   value="<?php echo isset($_SESSION['old']['hoten']) ? $_SESSION['old']['hoten'] : ''; ?>">
            <?php
            if (isset($_SESSION['errors']['hoten'])) {
                echo '<span style="color:red;font-style: oblique;">' . $_SESSION['errors']['hoten'] . '</span>';
            }
            ?>
        </div>

            <!-- Email -->
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Nhập email"
                   value="<?php echo isset($_SESSION['old']['email']) ? $_SESSION['old']['email'] : ''; ?>">
            <?php
            if (isset($_SESSION['errors']['email'])) {
                echo '<span style="color:red;font-style: oblique;">' . $_SESSION['errors']['email'] . '</span>';
            }
            ?>

            <!-- Địa chỉ -->
            <div class="mb-3">
                <label for="address" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" name="dchi" placeholder="Nhập địa chỉ">
            </div>

            <!-- Số điện thoại -->
            <div class="mb-3">
                <label for="phone" class="form-label">Số Điện Thoại</label>
                <input type="tel" class="form-control" name="sdt" placeholder="Nhập số điện thoại">
            </div>

            <!-- Hình thức học -->
            <div class="mb-3">
                <label for="mode" class="form-label">Hình Thức Học</label>
                <select class="form-select" id="language" name="hthuc" >
                <option value="" disabled selected> Hình thức học </option>
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                </select>
            </div>

            <!-- Nút đăng ký -->
            <div class="text-center">
                <button type="submit" class="btn btn-outline-dark" name="dky">Đăng Ký</button>
            </div>
        </form>
    </div>
<br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>