<?php


// Số bài học trên mỗi trang
$limit = 2;

// Tính số trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $limit;

// Lấy từ khóa tìm kiếm
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Câu truy vấn SQL với tìm kiếm và phân trang
if ($search != '') {
    $sql_lietke = "SELECT * FROM khoahoc WHERE tenkh LIKE '%$search%' ORDER BY idkh  DESC LIMIT $start_from, $limit";
} else {
    $sql_lietke = "SELECT * FROM khoahoc ORDER BY idkh  DESC LIMIT $start_from, $limit";
}
$query_lietke = mysqli_query($mysqli, $sql_lietke);

// Tính tổng số bài học để phân trang
if ($search != '') {
    $sql_total = "SELECT COUNT(*) FROM khoahoc WHERE tenkh LIKE '%$search%'";
} else {
    $sql_total = "SELECT COUNT(*) FROM khoahoc";
}
$result_total = mysqli_query($mysqli, $sql_total);
$row_total = mysqli_fetch_array($result_total);
$total_records = $row_total[0];
$total_pages = ceil($total_records / $limit);
?>
<div class="container">
    <br><br>
    <!-- Form tìm kiếm -->
    <form action="" method="POST" class="mb-4">
        <input type="text" name="search" placeholder="Tìm kiếm..." class="form-control" 
        value="<?php echo htmlspecialchars($search); ?>"><br>
        <button type="submit" class="btn btn-outline-dark">Tìm kiếm</button>
    </form>

    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
        DANH SÁCH CÁC KHÓA HỌC
    </button>
    <!-- Fullscreen Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-body" id="dsbh-container">
                    <h1 class="display-1">DANH SÁCH CÁC KHÓA HỌC</h1>
                    <table class="table table-striped" id="dsbh">
  <thead>
            <tr class="table-dark">
              <th scope="col" class="table-dark">STT</th>
                <th scope="col">Tên Khóa Học</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Mục Tiêu Khóa Học</th>
                <th scope="col">Nội Dung Khóa Học </th>
                <th scope="col">Thời Lượng Khóa Học </th>
                <th scope="col">Học Phí</th>
                <th scope="col">Lịch Học</th>
                <th scope="col">Quản Lý </th>
              </tr>
              </tr>
            </thead>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($query_lietke)){
              $i++;
            ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $i?></th>
                <td><?php echo $row['tenkh']?></td>
                <td><img src="moden/quanlykhoahoc/uplo/<?php echo $row['hinhanh'] ?>" width="100%"></td>
                <td><?php echo $row['mtieu']?></td>
                <td><?php echo $row['noidung']?></td>
                <td><?php echo $row['tlg']?></td>
                <td><?php echo number_format ($row['hocphi'],0,',','.') ?> VND </td>
                <td><?php echo $row['lichhoc']?></td>
                <td>
                <a href="?action=quanlykhoahoc&query=capnhat&idkh=<?php echo $row['idkh']?>" class="ql" ><i class="fa-solid fa-pen-nib" stytle="font-size:1rem;"></i></a> 
                <a href="moden/quanlykhoahoc/xoa.php?idkh=<?php echo $row['idkh']?>"class="ql1"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
            <?php
            }
              ?>
          </table>
                    <!-- Phân trang -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                <li class="page-item"><a class="page-link" href="#" data-page="<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
</ul>
                    </nav>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script>
// Hiển thị modal ngay khi thực hiện tìm kiếm
$(document).ready(function() {
    <?php if ($search != '') { ?>
        $('#fullscreenModal').modal('show'); // Mở modal nếu có tìm kiếm
    <?php } ?>
});

// AJAX phân trang giữ modal mở
$(document).on('click', '.page-link', function(event) {
    event.preventDefault();
    
    var page = $(this).data('page');  // Lấy số trang từ data attribute
    var search = $('input[name="search"]').val();  // Lấy giá trị tìm kiếm nếu có

    $.ajax({
        url: "",  // Chỉ định URL hiện tại
        type: "GET",
        data: {
            page: page,
            search: search
        },
        success: function(response) {
            // Cập nhật nội dung modal với bảng danh sách bài học mới
            $('#dsbh-container').html($(response).find('#dsbh-container').html());  
            $('#fullscreenModal').modal('show');  // Đảm bảo modal vẫn mở
        }
    });
});
</script>
