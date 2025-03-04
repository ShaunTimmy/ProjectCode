<?php
   $sql="SELECT*FROM blog 
   ORDER BY  idbg ASC";
   $query_lietke=  mysqli_query($mysqli,$sql);
 ?>
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <!-- Courses Section -->
 <div class="container mt-5">
  <h2 class="text-center">DANH SÁCH CÁC BLOG</h2>
  <div class="row">
    <?php
      while($row=mysqli_fetch_array($query_lietke)){
    ?>
    <div class="col-md-4" data-aos="flip-right">
      <div class="card">
        <img src="adm/moden/blog/uplo/<?php echo $row['hinhanh'] ?>" class="card-img-top" alt="<?php echo $row['hinhanh'] ?>" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['tenblg']; ?></h5>
          <a href="index.php?quanly=write&idbg=<?php echo $row['idbg']?>" class="btn btn-outline-dark">Xem Chi Tiết</a>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>
<script>
  AOS.init();
</script>
<br><br><br><br><br><br>
