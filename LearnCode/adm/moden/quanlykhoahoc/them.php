
<!-- Form Add -->
<button type="button" class=" btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Khóa Học 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container mt-5">
    <h2 class="text-center mb-4">Thêm Khóa Học </h2>
    <!-- Form thêm bài học -->
    <form action="moden/quanlykhoahoc/xuly.php" method="POST" enctype="multipart/form-data">
        <!-- Tên bài học -->
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tên Khóa Học </label>
            <input type="text" class="form-control" id="lesson_title" name="tenkh" placeholder="Nhập tên khóa  học" >
        </div>

        <!-- Mục lục -->
        <div class="form-group mb-3">
            <label for="mluc" class="form-label">Mục Tiêu Khóa Học</label>
            <textarea class="form-control" id="mota" name="mtieu" rows="5" placeholder="Nhập mục tiêu khóa học" ></textarea>
            
        </div>

        <!-- Tiêu đề và nội dung chi tiết (các phần giống nhau) -->
        <div class="form-group mb-3">
            <label for="phan1" class="form-label">Nội dung Khóa Học</label>
            <textarea class="form-control"  name="noidung" rows="5" placeholder="Nhập nọi dung khóa học " ></textarea>
        </div>
        
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Thời Lượng Khóa Học </label>
            <input type="text" class="form-control" id="lesson_title" name="tlg" placeholder="Nhập thời lượng khóa  học" >
        </div>

        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Học Phí </label>
            <input type="text" class="form-control" id="lesson_title" name="hocphi" placeholder="Nhập học phí" >
        </div>

        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Lịch Học</label>
            <input type="text" class="form-control" id="lesson_title" name="lichhoc" placeholder="Nhập lịch  học" >
        </div>

        <!-- Danh mục -->
        <div class="form-group mb-3">
            <label for="category" class="form-label">Danh Mục</label>
            <select class="form-control" id="category" name="danhmuc" >
                <option value="" disabled selected>Chọn Danh Mục</option>
                <?php
                $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY iddm ASC";
                $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    echo '<option value="'.$row_danhmuc['iddm'].'">'.$row_danhmuc['tendm'].'</option>';
                }
                ?>
            </select>
        </div>

        <!-- Tải ảnh đại diện -->
        <div class="form-group mb-3">
<label for="image" class="form-label">Tải Lên Ảnh Đại Diện</label>
            <input type="file" class="form-control" id="image" name="hinhanh" >
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="btn btn-success" name="themkh">Thêm Khóa Học</button>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

