
<!-- Form Add -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Bài Học 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container mt-5">
    <h2 class="text-center mb-4">Thêm Bài Học Mới</h2>
    <!-- Form thêm bài học -->
    <form action="moden/quanlybaihoc/xuly.php" method="POST" enctype="multipart/form-data">
        <!-- Tên bài học -->
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tên Bài Học</label>
            <input type="text" class="form-control" id="lesson_title" name="tenbh" placeholder="Nhập tên bài học" >
        </div>

        <!-- Mục lục -->
        <div class="form-group mb-3">
            <label for="mluc" class="form-label">Mục Lục Bài Học</label>
            <textarea class="form-control" id="mota" name="mluc" rows="5" placeholder="Nhập mô tả bài học" ></textarea>
            
        </div>

        <!-- Tiêu đề và nội dung chi tiết (các phần giống nhau) -->
        <div class="form-group mb-3">
            <label for="phan1" class="form-label">Tiêu Đề 1</label>
            <textarea class="form-control"  name="part1" rows="5" placeholder="Nhập tiêu đề " ></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ct1" class="form-label">Nội Dung Chi Tiết 1</label>
            <textarea class="form-control" name="ctiet" rows="5" placeholder="Nhập nội dung chi tiết " ></textarea>
        </div>

        <!-- Lặp lại các tiêu đề và nội dung chi tiết 2, 3, 4 -->
        <!-- Tiêu đề 2 và nội dung chi tiết 2 -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 2</label>
            <textarea class="form-control"  name="part2" rows="5" placeholder="Nhập tiêu đề " ></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 2</label>
            <textarea class="form-control"  name="ctiet2" rows="5" placeholder="Nhập nội dung chi tiết " ></textarea>
        </div>

        <!-- Tương tự cho tiêu đề và nội dung 3, 4 -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 3</label>
            <textarea class="form-control" name="part3" rows="5" placeholder="Nhập tiêu đề " ></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 3</label>
            <textarea class="form-control"  name="ctiet3" rows="5" placeholder="Nhập nội dung chi tiết " ></textarea>
        </div>
        <!-- ////// -->
        <div class="form-group mb-3">
            <label for="phan2" class="form-label">Tiêu Đề 4</label>
            <textarea class="form-control" name="part4" rows="5" placeholder="Nhập tiêu đề " ></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ctiet2" class="form-label">Nội Dung Chi Tiết 4</label>
            <textarea class="form-control" name="ctiet4" rows="5" placeholder="Nhập nội dung chi tiết " ></textarea>
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
        <button type="submit" class="btn btn-primary" name="them">Thêm Bài Học</button>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

