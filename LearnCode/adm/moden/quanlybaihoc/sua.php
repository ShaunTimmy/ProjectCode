<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

  $sql_capnhat="SELECT*FROM baihoc WHERE idbh='$_GET[idbh]' LIMIT 1";
  $query_capnhat=  mysqli_query($mysqli,$sql_capnhat);

?>
<div class="container mt-5">
        <h2 class="mb-4">Cập Nhật Thông Tin Bài Học</h2>
        <form action="moden/quanlybaihoc/update.php?idbh=<?php echo $_GET['idbh'] ?>" method="POST">
        <?php
   while($dong=mysqli_fetch_array($query_capnhat)){
?>
            <!-- Tên Danh Mục -->
            <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tên Bài Học</label>
            <input type="text" class="form-control" id="lesson_title" name="tenbh" value="<?php echo $dong['tenbh']?>" >
        </div>

        <!-- Mục lục -->
        <div class="form-group mb-3">
            <label for="mluc" class="form-label">Mục Lục Bài Học</label>
            <textarea class="form-control" id="mota" name="mluc" rows="5" ><?php echo $dong['mluc'] ?></textarea>
            
        </div>

        <!-- Tiêu đề và nội dung chi tiết (các phần giống nhau) -->
        <div class="form-group mb-3">
            <label for="phan1" class="form-label">Tiêu Đề 1</label>
            <textarea class="form-control"  name="part1" rows="5" ><?php echo $dong['part1'] ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ct1" class="form-label">Nội Dung Chi Tiết 1</label>
            <textarea class="form-control" name="ctiet" rows="5" ><?php echo $dong['ctiet'] ?></textarea>
        </div>

        <!-- Lặp lại các tiêu đề và nội dung chi tiết 2, 3, 4 -->
        <!-- Tiêu đề 2 và nội dung chi tiết 2 -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 2</label>
            <textarea class="form-control"  name="part2" rows="5" ><?php echo $dong['part2'] ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 2</label>
            <textarea class="form-control"  name="ctiet2" rows="5"  ><?php echo $dong['ctiet2'] ?></textarea>
        </div>

        <!-- Tương tự cho tiêu đề và nội dung 3, 4 -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 3</label>
            <textarea class="form-control" name="part3" rows="5"  ><?php echo $dong['part3'] ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 3</label>
            <textarea class="form-control"  name="ctiet3" rows="5"  ><?php echo $dong['ctiet3'] ?></textarea>
        </div>
        <!-- ////// -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 4</label>
            <textarea class="form-control" name="part4" rows="5"  ><?php echo $dong['part4'] ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 4</label>
            <textarea class="form-control" name="ctiet4" rows="5" ><?php echo $dong['ctiet4'] ?></textarea>
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
            <img src="moden/quanlybaihoc/uplo/<?php echo $dong['hinhanh'] ?>" width="25%">
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="btn btn-primary" name="update">Cập Nhật </button>
        <?php
}
    ?>
        </form>
        
    </div>