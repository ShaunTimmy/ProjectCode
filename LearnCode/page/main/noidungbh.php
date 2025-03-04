
<?php
$sql="SELECT*FROM baihoc WHERE baihoc.idbh ='$_GET[idbh]' LIMIT 1";
$querychitiet=mysqli_query($mysqli,$sql);
// print_r($querychitiet);

?>

<style>
    .toc { /* Tạo border cho mục lục */
      border: 1px solid #ccc;
      padding: 15px;
      margin-bottom: 20px;
    }
  </style>
<div class="container mt-5">
  <div class="row">
    <!-- Mục lục -->
    <div class="col-md-3">
      <div class="toc">
        <h4>Mục Lục</h4>
        <ul class="list-unstyled">
          <?php
          // Giả sử bạn có các mục lục từ cơ sở dữ liệu
          while($rowct=mysqli_fetch_array($querychitiet)){
           
        
            echo '<li ><a href="#section'.$rowct['idbh'].'">'. nl2br($rowct['mluc']).'</a></li>';
          
          ?>
        </ul>
      </div>
    </div>

    <!-- Nội dung bài học -->
    <div class="col-md-9 " >
      <div class="lesson-section" id="section<?php echo $rowct['idbh']; ?>">
        <h2 class="fw-bold"><?php echo $rowct['tenbh']; ?></h2> <!-- Tiêu đề in đậm -->
        <h3><?php echo $rowct['part1']; ?></h3> <!-- Nội dung chi tiết -->
        <p><?php echo nl2br($rowct['ctiet']); ?></p>
        <!--  -->
        <h3><?php echo $rowct['part2']; ?></h3> <!-- Nội dung chi tiết -->
        <p><?php echo  nl2br($rowct['ctiet2']); ?></p>
        <!--  -->
        <h3><?php echo $rowct['part3']; ?></h3> <!-- Nội dung chi tiết -->
        <p><?php echo  nl2br($rowct['ctiet3']); ?></p>
        <!--  -->
        <h3><?php echo $rowct['part4']; ?></h3> <!-- Nội dung chi tiết -->
        <p><?php echo  nl2br($rowct['ctiet4']); ?></p>
      </div>
      <hr> <!-- Đường ngăn cách giữa các phần -->
    </div>
  </div>
</div>

<!-- Thêm liên kết đến Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php
}
?>