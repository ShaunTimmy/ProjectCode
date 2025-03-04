<?php 

include('config/config.php');
 if(isset($_POST['add'])){
    $tendm=$_POST['tendm'];
    $sqlthem="INSERT INTO danhmuc(tendm) VALUE('".$tendm."')";
    mysqli_query($mysqli,$sqlthem);
    echo "<script> windown.location.href='index.php?action=quanlydanhmuc&query=them';</script>";
 }
 ?>
<div class="container mt-5">
        <h2 class="mb-4">Thêm Danh Mục Mới</h2>
        <form action="" method="POST">
            <!-- Tên Danh Mục -->
            <div class="mb-3">
                <label for="categoryName" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" id="categoryName" name="tendm" placeholder="Nhập tên danh mục" required>
            </div>
          <button type="submit" class="btn btn-primary" name="add">Thêm Danh Mục</button>
        </form>
    </div>
