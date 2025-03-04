<style>
        /* Full height sidebar */
        #sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        /* Sidebar links */
        #sidebar .nav-link {
            color: white;
        }
        #sidebar .nav-link:hover {
            background-color: #495057;
        }
        /* Main content */
        #main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div id="sidebar" class="bg-dark">
        <h4 class="text-center text-white">Shaun Timmy</h4>
        <ul class="nav flex-column p-3">
            <li class="nav-item">
                <a class="nav-link active" href="index.php?action=intro&query=them">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=quanlydanhmuc&query=them">Manage Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=quanlybaihoc&query=them">Manage Lessons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=quanlykhoahoc&query=them">Manage Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=dangkykhoahoc&query=them">Manage Register For The Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=dangkytuvan&query=them">Manage Practice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=question&query=them">Manage Quizz</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=video&query=them">Manage Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=blog&query=them">Manage Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?action=login&query=them">Logout</a>
            </li>
        </ul>
    </div>

   