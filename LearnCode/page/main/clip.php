<?php
 $sql="SELECT * FROM videos ORDER BY idvd DESC";
 $query_lietke = mysqli_query($mysqli, $sql);
?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<div class="container mt-5">
    <h2 class="text-center">DANH SÁCH VIDEO</h2>

    <div class="row">
        <?php
        while($row = mysqli_fetch_assoc($query_lietke)):
            // Đảm bảo rằng cột 'clips' chứa đúng tên tệp video
        ?>
        <div class="col-md-4 mb-4" data-aos="fade-down">
            <div class="card">
                <video width="100%" height="240" controls >
                     <source src="adm/moden/quanlyvideo/uplo/<?php echo $row['clips'] ?>" type="video/mp4" controls autoplay>
                    Trình duyệt của bạn không hỗ trợ phát video.
                </video>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['tieude']; ?></h5>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<script>
  AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>