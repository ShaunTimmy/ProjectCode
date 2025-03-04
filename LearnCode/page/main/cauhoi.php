<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<div class="container mt-5">
        <h2 class="text-center">DANH SÁCH CÂU HỎI </h2>
        
        <div class="row">
            <?php
            // Kết nối đến cơ sở dữ liệu

            // Truy vấn để lấy các tiêu đề câu hỏi
            $sql = "SELECT DISTINCT tieude FROM quizz";
            $result = mysqli_query($mysqli, $sql);

            // Hiển thị từng tiêu đề câu hỏi
            while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4 mb-4" data-aos="zoom-in-up">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $row['tieude']; ?></h5>
                            <a href="index.php?quanly=traloi&title=<?php echo urlencode($row['tieude']); ?>" class="btn btn-outline-success">Thi Thử</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br><br><br><br><br>