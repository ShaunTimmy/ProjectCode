
<!-- Form Add -->
<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Blog 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container mt-5">
    <h2 class="text-center mb-4">Thêm Blog</h2>
    <!-- Form thêm bài học -->
    <form action="moden/blog/xuly.php" method="POST" enctype="multipart/form-data">
        <!-- Tên bài học -->
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tiêu Đề Blog</label>
            <input type="text" class="form-control" id="lesson_title" name="tenblg" placeholder="Nhập tiêu đề blog" >
        </div>

        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Ngày Viết </label>
            <input type="date" class="form-control" id="lesson_title" name="nxb" placeholder="Nhập ngày viết" >
        </div>


        <!-- Tiêu đề và nội dung chi tiết (các phần giống nhau) -->
        <div class="form-group mb-3">
            <label for="phan1" class="form-label">Tiêu Đề 1</label>
            <textarea class="form-control"  name="part1" rows="5" placeholder="Nhập tiêu đề " ></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="ct1" class="form-label">Nội Dung Chi Tiết 1</label>
            <textarea class="form-control" name="ctiet1" rows="5" placeholder="Nhập nội dung chi tiết " ></textarea>
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

        <!-- Tải ảnh đại diện -->
        <div class="form-group mb-3">
<label for="image" class="form-label">Tải Lên Ảnh Đại Diện</label>
            <input type="file" class="form-control" id="image" name="hinhanh" >
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="btn btn-primary" name="blg">Thêm Blog</button>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

