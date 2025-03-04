<?php
include ("adm/config/config.php");
if(isset($_POST['tkiem'])){
    $ndung=$_POST['ndung'];
}
$sql="SELECT*FROM baihoc WHERE tenbh LIKE '%$ndung%' ";
$res=mysqli_query($mysqli,$sql);
?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <div class="container mt-5">
  <h2 class="text-center">DANH SÁCH TÌM KIẾM : <?php echo $ndung?></h2>
  <div class="row">
    <?php
      while($row=mysqli_fetch_array($res)){
    ?>
    <div class="col-md-4"  data-aos="zoom-in-down">
      <div class="card">
        <img src="adm/moden/quanlybaihoc/uplo/<?php echo $row['hinhanh'] ?>" class="card-img-top" alt="<?php echo $row['hinhanh'] ?>" >
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['tenbh']; ?></h5>
          <a href="index.php?quanly=monhoc&idbh=<?php echo $row['idbh']?>" class="btn btn-primary">Xem Chi Tiết</a>
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
<br><br><br><br>