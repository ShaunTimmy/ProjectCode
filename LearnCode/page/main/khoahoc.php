<?php
   $sql="SELECT*FROM khoahoc , danhmuc WHERE khoahoc.iddm=danhmuc.iddm 
   ORDER BY  khoahoc.idkh ASC";
   $query_lietke=  mysqli_query($mysqli,$sql);
 ?>
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<section class="py-5">
<div class="container mt-5">
  <h2 class="text-center">DANH SÁCH KHÓA HỌC</h2>
  <div class="row">
    <?php
      while($row=mysqli_fetch_array($query_lietke)){
    ?>
    <div class="col-md-4" data-aos="zoom-in-up">
      <div class="card">
        <img src="adm/moden/quanlykhoahoc/uplo/<?php echo $row['hinhanh'] ?>" class="card-img-top" alt="<?php echo $row['hinhanh'] ?>" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['tenkh']; ?></h5>
          <a href="index.php?quanly=study&idkh=<?php echo $row['idkh']?>" class="btn btn-dark">Xem Chi Tiết</a>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>
                
    </section>