<?php


// Số bài học trên mỗi trang
$limit = 3;

// Tính số trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($page - 1) * $limit;

// Lấy từ khóa tìm kiếm
$search = isset($_POST['search']) ? $_POST['search'] : '';

// Câu truy vấn SQL với tìm kiếm và phân trang
if ($search != '') {
    $sql_lietke = "SELECT * FROM baihoc WHERE tenbh LIKE '%$search%' ORDER BY idbh DESC LIMIT $start_from, $limit";
} else {
    $sql_lietke = "SELECT * FROM baihoc ORDER BY idbh DESC LIMIT $start_from, $limit";
}
$query_lietke = mysqli_query($mysqli, $sql_lietke);

// Tính tổng số bài học để phân trang
if ($search != '') {
    $sql_total = "SELECT COUNT(*) FROM baihoc WHERE tenbh LIKE '%$search%'";
} else {
    $sql_total = "SELECT COUNT(*) FROM baihoc";
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
        <input type="text" name="search" placeholder="Tìm kiếm bài học..." class="form-control" 
        value="<?php echo htmlspecialchars($search); ?>"><br>
        <button type="submit" class="btn btn-dark">Tìm kiếm</button>
    </form>

    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
        DANH SÁCH BÀI HỌC
    </button>
    <!-- Fullscreen Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-xxl-down">
            <div class="modal-content">
                <div class="modal-body" id="dsbh-container">
                    <h1 class="display-1">DANH SÁCH CÁC BÀI HỌC</h1>
                    <table class="table table-striped" id="dsbh">
                        <thead>
                        <tr class="table-dark">
                            <th scope="col" class="table-dark">STT</th>
                            <th scope="col">Tên Bài Học</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Nội Dung Bài Học</th>
                            <th scope="col">Tiêu Đề Một</th>
                            <th scope="col">Nội Dung Chi Tiết </th>
                            <th scope="col">Tiêu Đề Hai</th>
                            <th scope="col">Nội Dung Chi Tiết </th>
                            <th scope="col">Tiêu Đề Ba</th>
                            <th scope="col">Nội Dung Chi Tiết </th>
                            <th scope="col">Tiêu Đề Bốn</th>
                            <th scope="col">Nội Dung Chi Tiết </th>
                            <th scope="col">Quản Lý </th>
                        </tr>
                        </thead>
                        <?php
                        $i = $start_from;
                        while ($row = mysqli_fetch_array($query_lietke)) {
                            $i++;
                            ?>
                            <tbody>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo htmlspecialchars($row['tenbh']); ?></td>
                                <td><img src="moden/quanlybaihoc/uplo/<?php echo htmlspecialchars($row['hinhanh']); ?>" width="100%"></td>
                                <td><?php echo htmlspecialchars($row['mluc']); ?></td>
                                <td><?php echo htmlspecialchars($row['part1']); ?></td>
                                <td><?php echo htmlspecialchars($row['ctiet']); ?></td>
                                <td><?php echo htmlspecialchars($row['part2']); ?></td>
                                <td><?php echo htmlspecialchars($row['ctiet2']); ?></td>
                                <td><?php echo htmlspecialchars($row['part3']); ?></td>
                                <td><?php echo htmlspecialchars($row['ctiet3']); ?></td>
                                <td><?php echo htmlspecialchars($row['part4']); ?></td>
                                <td><?php echo htmlspecialchars($row['ctiet4']); ?></td>
                                <td>
                                    <a href="?action=quanlybaihoc&query=capnhat&idbh=<?php echo $row['idbh'] ?>" class="ql"><i class="fa-solid fa-pen-nib" style="font-size:1rem;"></i></a>
                                    <a href="moden/quanlybaihoc/xoa.php?idbh=<?php echo $row['idbh'] ?>" class="ql1"><i class="fa-solid fa-trash"></i></a>
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
