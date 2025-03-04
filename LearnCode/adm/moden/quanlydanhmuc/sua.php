<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

  $sql_capnhat="SELECT*FROM danhmuc WHERE iddm='$_GET[iddm]' LIMIT 1";
  $query_capnhat=  mysqli_query($mysqli,$sql_capnhat);

?>

<div class="container mt-5">
        <h2 class="mb-4">Cập Nhật Danh Mục </h2>
        <form action="moden/quanlydanhmuc/xuly.php?iddm=<?php echo $_GET['iddm'] ?>"method="POST">
        <?php
   while($dong=mysqli_fetch_array($query_capnhat)){
?>
            <!-- Tên Danh Mục -->
            <div class="mb-3">
                <label for="categoryName" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" id="categoryName" name="tendm" value="<?php echo $dong['tendm']?>" required>
            </div>
          <button type="submit" class="btn btn-primary" name="up"> Cập Nhật Danh Mục</button>
        <?php
}
    ?>
        </form>
    </div>