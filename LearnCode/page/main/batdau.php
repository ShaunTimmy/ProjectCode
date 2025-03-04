<style>
    /* CSS cho animation */
    .fade-in {
      animation: fadeIn 2s ease-in;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .slide-up {
      animation: slideUp 1.5s ease-out;
    }

    @keyframes slideUp {
      from {
        transform: translateY(20px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>
  <!-- Banner giới thiệu -->
<section class="bg-dark text-white text-center py-5 fade-in">
  <div class="container">
    <h1 class="display-4">Chào Mừng Đến Với Thế Giới Lập Trình</h1>
    <p class="lead">Cùng khám phá và học hỏi các ngôn ngữ lập trình, công cụ và kỹ thuật mới nhất để phát triển sự nghiệp của bạn.</p>
    <a href="index.php?quanly=trangchu" class="btn btn-primary btn-lg mt-3">Bắt Đầu Học Ngay</a>
  </div>
</section>

<!-- Phần giới thiệu ngắn -->
<section class="container py-5">
  <div class="row">
    <div class="col-md-4 slide-up">
      <div class="text-center">
        <i class="fas fa-code fa-3x mb-3"></i>
        <h3>Ngôn Ngữ Lập Trình</h3>
        <p>Tìm hiểu các ngôn ngữ lập trình từ cơ bản đến nâng cao, như Python, JavaScript, PHP, và nhiều hơn nữa.</p>
      </div>
    </div>
    <div class="col-md-4 slide-up">
      <div class="text-center">
        <i class="fas fa-laptop-code fa-3x mb-3"></i>
        <h3>Công Cụ Lập Trình</h3>
        <p>Hướng dẫn sử dụng các công cụ mạnh mẽ để phát triển phần mềm, từ các IDE đến các hệ thống quản lý phiên bản.</p>
      </div>
    </div>
    <div class="col-md-4 slide-up">
      <div class="text-center">
        <i class="fas fa-project-diagram fa-3x mb-3"></i>
        <h3>Dự Án Thực Tế</h3>
        <p>Thực hành với các dự án thực tế để phát triển kỹ năng lập trình và tạo dựng portfolio chuyên nghiệp.</p>
      </div>
    </div>
  </div>
</section>

<!-- Phần gọi hành động -->
<section class="bg-light text-center py-5">
  <div class="container">
    <h2 class="fade-in">Tham Gia Cộng Đồng Lập Trình Viên</h2>
    <p class="lead fade-in">Cùng chia sẻ kiến thức, tham gia thảo luận, và phát triển bản thân cùng hàng nghìn lập trình viên khác.</p>
    <a href="#" class="btn btn-success btn-lg mt-3 fade-in">Tham Gia Ngay</a>
  </div>
</section>