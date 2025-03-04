<?php
include ("adm/config/config.php");
 include('carbon/autoload.php');
 use Carbon\Carbon;
 use Carbon\CarbonInterval;
 $now=Carbon::now('Asia/Ho_Chi_Minh');
 if(isset($_POST['tvan'])){
    $hoten=$_POST['hoten'];
    $email=$_POST['email'];
    $sdt=$_POST['sdt'];
    $cvc=$_POST['cvc'];
    $noidung=$_POST['noidung'];
    $error= [];
    if(empty(trim($_POST['hoten']))){
      $error['hoten']['required']='Bạn vui lòng không bỏ trống';
    }else{
      if(strlen(trim($_POST['hoten'])) < 5){
        $error['hoten']['min']=' Họ tên phải lớn hơn hoặc bằng 5 ký tự ';
      }
    }
    if(empty(trim($_POST['email']))){
      $error['email']['required']=' Bạn vui lòng nhập địa chỉ email';
    }else{
      if(!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)){
        $error['email']['invaild']=' Địa chỉ email của bạn không hợp lệ';
      }
    }
   if(empty($error)){
    $sqldk=mysqli_query($mysqli,"INSERT INTO tuvan(hoten,email,sdt,cvc,noidung,tgian) 
    VALUE('".$hoten."','".$email."','".$sdt."','".$cvc."','".$noidung."','".$now."')");
    if($sqldk){
        echo '<script>alert("Bạn đã đăng ký thành công. Đội ngũ chúng tôi sẽ liên hệ hỗ trợ bạn trong vòng 12h. Cảm ơn bạn ,chúc bạn học tập vui vẻ ! ")</script>';
    }
}
}
 
?>
<div class="container mt-5">
    <h2>Đăng Ký Tư Vấn</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="fullName">Họ Tên</label>
            <input type="text" class="form-control" id="fullName" name="hoten">
            <?php
           echo(!empty($error['hoten']['required']))?'<span style="color:red;font-style: oblique;">'.$error['hoten']['required'].'</span>':false;
           echo(!empty($error['hoten']['min']))?'<span style="color:red;font-style: oblique;">'.$error['hoten']['min'].'</span>':false;
         ?>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <?php
           echo(!empty($error['email']['required']))?'<span style="color:red;font-style: oblique;">'.$error['email']['required'].'</span>':false;
           echo(!empty($error['email']['invaild']))?'<span style="color:red;font-style: oblique;">'.$error['email']['invaild'].'</span>':false;
         ?>
        </div>
        
        <div class="form-group">
            <label for="phone">Điện Thoại</label>
            <input type="tel" class="form-control" id="phone" name="sdt" >
        </div>
        
        <div class="form-group">
            <label for="job">Công Việc Hiện Tại</label>
            <select class="form-control" id="job" name="cvc" >
                <option value="" disabled selected>Hiện tại bạn đang là:</option>
                <option value="st">Học sinh THPT hoặc mới tốt nghiệp</option>
                <option value="sv">Sinh viên CNTT</option>
                <option value="wk">Người đi làm ngành CNTT</option>
                <option value="other1">Sinh viên ngành khác (NON-IT)</option>
                <option value="other2">Người đi làm ngành khác (NON-IT)</option>
                <option value="nv">Nhân viên văn phòng</option>
                <option value="khac">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="consultation">Nội Dung Cần Tư Vấn</label>
            <textarea class="form-control" name="noidung" id="consultation" rows="4" placeholder="Mô tả nội dung bạn cần tư vấn" ></textarea>
        </div>

        <br>
        
        <button type="submit" class="btn btn-outline-danger" name="tvan">Đăng Ký</button>
    </form>

    <div class="mt-4 text-center">
        <h5>Bạn sẽ được tư vấn miễn phí cùng với các chuyên gia có nhiều kinh nghiệm.</h5>
        <p>Hình thức tư vấn qua Google Meet trong vòng 30 phút.</p>
    </div>
</div> 
</div>
<br><br><br><br><br><br><br>