<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

  $sql_capnhat="SELECT*FROM khoahoc WHERE idkh='$_GET[idkh]' LIMIT 1";
  $query_capnhat=  mysqli_query($mysqli,$sql_capnhat);

?>
<div class="container mt-5">
        <h2 class="mb-4">Cập Nhật Thông Tin Khóa Học</h2>
        <form action="moden/quanlykhoahoc/update.php?idkh=<?php echo $_GET['idkh'] ?>" method="POST">
        <?php
   while($dong=mysqli_fetch_array($query_capnhat)){
?>
            <!-- Tên Danh Mục -->
            <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tên Khóa Học </label>
            <input type="text" class="form-control" id="lesson_title" name="tenkh" value="<?php echo $dong['tenkh']?>"  >
        </div>

        <!-- Mục lục -->
        <div class="form-group mb-3">
            <label for="mluc" class="form-label">Mục Tiêu Khóa Học</label>
            <textarea class="form-control" id="mota" name="mtieu" rows="5" >
               <?php echo $dong['mtieu'] ?>
            </textarea>
            
        </div>

        <!-- Tiêu đề và nội dung chi tiết (các phần giống nhau) -->
        <div class="form-group mb-3">
            <label for="phan1" class="form-label">Nội dung Khóa Học</label>
            <textarea class="form-control"  name="noidung" rows="5" ><?php echo $dong['noidung'] ?></textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Thời Lượng Khóa Học </label>
            <input type="text" class="form-control" id="lesson_title" name="tlg"   value="<?php echo $dong['tlg']?>">
        </div>

        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Học Phí </label>
            <input type="text" class="form-control" id="lesson_title" name="hocphi"  value="<?php echo  $dong['hocphi']?>" >
        </div>

        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Lịch Học</label>
            <input type="text" class="form-control" id="lesson_title" name="lichhoc"  value="<?php  echo $dong['lichhoc']?>" >
        </div>
        <!-- Danh mục -->
        <div class="form-group mb-3">
            <label for="category" class="form-label">Danh Mục</label>
            <select class="form-control" id="category" name="danhmuc" >
                <option value="" disabled selected>Chọn Danh Mục</option>
                <?php
                $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY iddm ASC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                    if($row_danhmuc['iddm']==$dong['iddm']){
                  ?>
                
                  <option selected value="<?php echo $row_danhmuc['iddm']?>"><?php echo $row_danhmuc['tendm']?></option>
                  
                  <?php
                    }else{
                        ?>
                         <option value="<?php echo $row_danhmuc['iddm']?>"><?php echo $row_danhmuc['tendm']?></option>
                        <?php
                    }
                  }
                  ?>
            </select>
        </div>

        <!-- Tải ảnh đại diện -->
        <div class="form-group mb-3">
<label for="image" class="form-label">Tải Lên Ảnh Đại Diện</label>
            <input type="file" class="form-control" id="image" name="hinhanh" >
            <img src="moden/quanlykhoahoc/uplo/<?php echo $dong['hinhanh'] ?>" width="25%">
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="btn btn-primary" name="upkh">Cập Nhật </button>
        <?php
}
    ?>
        </form>
        
    </div>