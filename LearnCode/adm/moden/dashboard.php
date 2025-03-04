 <!-- Main Content -->
 <div class="main-content">
        <h1>Chào Mừng Đến Với Dashboard</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Tổng Danh Mục</div>
                    <div class="card-body">
                        <h5 class="card-title">10</h5>
                        <p class="card-text">Danh mục đã được tạo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Tổng Bài Viết</div>
                    <div class="card-body">
                        <h5 class="card-title">25</h5>
                        <p class="card-text">Bài viết đã được xuất bản.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Tổng Người Dùng</div>
                    <div class="card-body">
                        <h5 class="card-title">150</h5>
                        <p class="card-text">Người dùng đã đăng ký.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Tổng Bình Luận</div>
                    <div class="card-body">
                        <h5 class="card-title">50</h5>
                        <p class="card-text">Bình luận đã được gửi.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2>Biểu Đồ Thống Kê</h2>
        <div class="row">
            <div class="col-md-12">
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5'],
                datasets: [{
                    label: 'Bài Viết Mới',
                    data: [3, 6, 8, 5, 12],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>