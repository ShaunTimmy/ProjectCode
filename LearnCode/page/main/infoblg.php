<?php
$sql="SELECT*FROM blog WHERE blog.idbg ='$_GET[idbg]' LIMIT 1";
$querychitiet=mysqli_query($mysqli,$sql);
// print_r($querychitiet);

?>
<style>
    .image-caption {
        font-size: 0.9rem; /* Cỡ chữ nhỏ */
        font-style: italic; /* In nghiêng */
        margin-top:5px;
        color: #6c757d; /* Màu chữ nhạt */
    }
ul li{
    list-style: none;
}
.text-center.mb-4 img {
    width: 50%;
}
</style>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<div class="container mt-5">
<?php
      while($row=mysqli_fetch_array($querychitiet)){
    ?>
        <!-- Tiêu đề bài viết -->
        <h1 class="display-4"><?php echo $row['tenblg']; ?></h1>

        <!-- Ngày xuất bản và tác giả -->
        <p class="text-muted">
            <i class="fa-regular fa-user"></i> <?php echo $row['tgia']; ?> | 
            <i class="bi bi-calendar"></i> <?php echo date("d/m/Y", strtotime($row['nxb'])); ?>
        </p>

        <!-- Mục lục (Giả định bạn thêm danh sách mục lục nếu cần) -->
     
        <div class="alert alert-light">
            <h5>Mục Lục</h5>
            <ul>
                <li><a href=""><?php echo $row['part1']?></a></li>
                <li><a href=""><?php echo $row['part2']?></a></li>
                <li><a href=""><?php echo $row['part3']?></a></li>
            </ul>
        </div>
        <!-- Nội dung bài viết -->
        <div class="content mb-4">
           <h3><?php echo nl2br($row['part1']); ?></h3>
            <p><?php echo nl2br($row['ctiet1']); ?></p>
        </div>

        <!-- Hình ảnh minh họa (nếu có) -->
    
        <div class="text-center mb-4">
        <img src="adm/moden/blog/uplo/<?php echo $row['hinhanh'] ?>" class="card-img-top" alt="<?php echo $row['hinhanh'] ?>" width="30%" >
        <p class="image-caption">Ảnh minh hoạ</p>
        </div>
      
        <div class="content mb-4">
           <h3><?php echo nl2br($row['part2']); ?></h3>
            <p><?php echo nl2br($row['ctiet2']); ?></p>
        </div>

        <div class="content mb-4">
           <h3><?php echo nl2br($row['part3']); ?></h3>
            <p><?php echo nl2br($row['ctiet3']); ?></p>
        </div>

        <?php 
  } ?>