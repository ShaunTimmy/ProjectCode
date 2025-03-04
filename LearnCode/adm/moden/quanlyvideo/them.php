
<!-- Form Add -->
<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm Video
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container mt-5">
    <h2 class="text-center mb-4">Thêm Video</h2>
    <!-- Form thêm bài học -->
    <form action="moden/quanlyvideo/xuly.php" method="POST" enctype="multipart/form-data">
        <!-- Tên bài học -->
        <div class="form-group mb-3">
            <label for="lesson_title" class="form-label">Tiêu Đề Video</label>
            <input type="text" class="form-control" id="lesson_title" name="tieude" placeholder="Nhập tiêu đề " >
        </div>

        <!-- Tải ảnh đại diện -->
        <div class="form-group mb-3">
<label for="image" class="form-label">Video</label>
            <input type="file" class="form-control" id="image" name="clips" >
        </div>

        <!-- Nút gửi -->
        <button type="submit" class="btn btn-primary" name="vdo">Tải Video</button>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

