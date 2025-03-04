<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câu Hỏi - <?php echo htmlspecialchars($_GET['title']); ?></title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .correct-answer {
            background-color: #d4edda; /* Màu xanh nhạt */
        }
        .wrong-answer {
            background-color: #f8d7da; /* Màu đỏ nhạt */
        }
        .correct-answer-text {
            color: #155724; /* Màu xanh đậm cho văn bản đúng */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Câu Hỏi - <?php echo htmlspecialchars($_GET['title']); ?></h2>
        
        <form method="POST" action="">
            <div class="row">
                <?php

                // Lấy tiêu đề từ URL
                $title = mysqli_real_escape_string($mysqli, $_GET['title']);

                // Truy vấn để lấy các câu hỏi theo tiêu đề
                $sql = "SELECT * FROM quizz WHERE tieude = '$title'";
                $result = mysqli_query($mysqli, $sql);

                // Biến để lưu trữ số câu trả lời đúng
                $correctAnswers = 0;
                $totalQuestions = 0;

                // Lưu đáp án của người dùng
                $userAnswers = [];

                while ($row = mysqli_fetch_assoc($result)): 
                    $totalQuestions++;
                    $correctAnswer = $row['optrue']; // Giả sử có cột này trong bảng
                    $userAnswer = isset($_POST['answers'][$row['idqs']]) ? $_POST['answers'][$row['idqs']] : null;
                ?>
                    <div class="col-12 mb-4" data-aos="flip-up">
                        <div class="card <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if ($userAnswer === $correctAnswer) {
                                echo 'correct-answer';
                                $correctAnswers++;
                            } elseif ($userAnswer !== null) {
                                echo 'wrong-answer';
                            }
                        } ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo nl2br($row['noidung']); ?></h5>
                                <div class="form-check">
                                   
                                    <input class="form-check-input" type="radio" name="answers[<?php echo $row['idqs']; ?>]" value="A" <?php echo ($userAnswer === 'A') ? 'checked' : ''; ?> >
                                    <span class="ml-1">A :</span>
                                    <label class="form-check-label"><?php echo $row['opa']; ?></label>
</div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[<?php echo $row['idqs']; ?>]" value="B" <?php echo ($userAnswer === 'B') ? 'checked' : ''; ?> >
                                    <span class="ml-1">B : </span>
                                    <label class="form-check-label"><?php echo $row['opb']; ?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[<?php echo $row['idqs']; ?>]" value="C" <?php echo ($userAnswer === 'C') ? 'checked' : ''; ?> >
                                    <span class="ml-1">C : </span>
                                    <label class="form-check-label"><?php echo $row['opc']; ?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answers[<?php echo $row['idqs']; ?>]" value="D" <?php echo ($userAnswer === 'D') ? 'checked' : ''; ?> >
                                    <span class="ml-1">D : </span>
                                    <label class="form-check-label"><?php echo $row['opd']; ?></label>
                                </div>
                                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $userAnswer !== $correctAnswer && $userAnswer !== null): ?>
                                    <p class="correct-answer-text mt-2">Đáp án đúng: <?php echo $correctAnswer; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success">Hoàn thành</button>
            </div>
        </form>
        <br>
        <?php
        // Xử lý khi người dùng nhấn nút "Hoàn thành"
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Hiển thị kết quả
            echo '<div class="alert alert-info mt-4">';
            echo '<strong>Kết quả:</strong> Bạn đã trả lời đúng ' . $correctAnswers . ' trên ' . $totalQuestions . ' câu.';
            echo '</div>';
        }
        
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
