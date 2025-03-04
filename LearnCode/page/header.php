   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src=img/code.png alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
               
            </a>
            <!-- Button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?quanly=trangchu">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?quanly=baihoc">Bài Học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=tuvan">Tư Vấn</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=code">Code Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=khoahoc">Khóa Học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=cauhoi">Quizz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=clip">Video Học Lập Trình </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=blog">Blog</a>
                    </li>
                </ul>
                <!-- Search Bar -->
                <form class="d-flex" method="POST" action="index.php?quanly=timkiem">
                    <input class="form-control me-2" type="search" placeholder="Search"  name="ndung"aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="tkiem">Search</button>
                </form>
                <!-- Login/Signup buttons -->
                <!-- <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>