<header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to Programming Hub</h1>
            <p>Chào mừng bạn đến với website chuyên cung cấp kiến thức về lập trình. 
                Chúng tôi cung cấp các tài liệu, bài học, và hướng dẫn để giúp bạn phát triển kỹ năng lập trình của mình. Dù bạn là người mới bắt đầu hay đã có kinh nghiệm, chúng tôi có những tài nguyên phù hợp cho bạn.</p>
            </div>
            <a href="index.php?quanly=baihoc" class="btn btn-light btn-lg">Bắt Đầu</a>
        </div>
    </header>
    <!-- Introduction -->
    <!-- About Section -->


    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Về Chúng Tôi </h2>
                    <p>Programming Hub là một nền tảng được thiết kế để giúp bạn nâng cao kiến ​​thức và kỹ năng lập trình của mình. 
                        Cho dù bạn mới bắt đầu hay muốn nâng cao chuyên môn của mình, chúng tôi đều cung cấp nhiều bài học,
                         bài tập thực hành và câu hỏi tương tác để hướng dẫn bạn trên hành trình của mình.</p>
                    <ul>
                        <li>Bài học toàn diện về các ngôn ngữ lập trình phổ biến..</li>
                        <li>Môi trường lập trình thời gian thực để thực hành và kiểm tra mã của bạn.</li>
                        <li>Các câu đố tương tác giúp củng cố kiến ​​thức của bạn.</li>
                        <li>Diễn đàn thảo luận và chia sẻ kiến ​​thức với những người học khác.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="img/bannerltrinh.jpg" alt="Coding" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>




    <!-- Recent Articles Section -->
    <!-- <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Recent Articles</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to APIs</h5>
                            <p class="card-text">Learn how to work with APIs and integrate them into your projects.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                    </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Best Practices for Clean Code</h5>
                            <p class="card-text">Tips and techniques for writing clean, maintainable code.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Understanding Git & GitHub</h5>
                            <p class="card-text">A complete guide to version control with Git and GitHub.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section>
            <h2>Tại Sao Lại Chọn Chúng Tôi?</h2>
            <div class="row">
                <div class="col-md-4 statistic-card">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h3 class="card-title">100+</h3>
                            <p class="card-text">Bài Viết Chất Lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 statistic-card">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h3 class="card-title">2000+</h3>
                            <p class="card-text">Người Dùng Đăng Ký</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 statistic-card">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h3 class="card-title">500+</h3>
                            <p class="card-text">Khóa Học Hoàn Thành</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biểu Đồ Thống Kê -->
            <h2>Biểu Đồ Thống Kê</h2>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5'],
                datasets: [{
                    label: 'Số Bài Viết Mới',
                    data: [5, 7, 9, 6, 11],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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