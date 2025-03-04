<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $language = $_POST['language'];
    $output = '';

    // Tạo tạm file để lưu code người dùng nhập vào (nếu không phải HTML/CSS/JS)
    $filename = tempnam(sys_get_temp_dir(), 'code');

    if ($language !== 'html') {
        switch ($language) {
            case 'php':
                $filename .= '.php';
                file_put_contents($filename, $code);
                $output = shell_exec("php $filename 2>&1");
                break;

            case 'python':
                $filename .= '.py';
                file_put_contents($filename, $code);
                $output = shell_exec("python $filename 2>&1");
                break;


            case 'c':
                $filename .= '.c';
                file_put_contents($filename, $code);
                $compiledFilename = tempnam(sys_get_temp_dir(), 'c_program');
                shell_exec("gcc $filename -o $compiledFilename 2>&1");
                $output = shell_exec("$compiledFilename 2>&1");
                break;

            case 'cpp':
                $filename .= '.cpp';
                file_put_contents($filename, $code);
                $compiledFilename = tempnam(sys_get_temp_dir(), 'cpp_program');
                shell_exec("g++ $filename -o $compiledFilename 2>&1");
                $output = shell_exec("$compiledFilename 2>&1");
                break;

            default:
                $output = "Ngôn ngữ không được hỗ trợ!";
                break;
        }

        // Xóa file tạm sau khi chạy
        unlink($filename);
        if (isset($compiledFilename)) {
            unlink($compiledFilename);
        }
    }
}
?>
<div class="container mt-5">
    <h1 class="text-center">Code Online</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="code" class="form-label">Nhập mã nguồn:</label>
            <textarea class="form-control" id="code" name="code" rows="10" required><?= isset($code) ? htmlspecialchars($code) : '' ?></textarea>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Chọn ngôn ngữ:</label>
            <select class="form-select" id="language" name="language" required>
            <option value="" disabled selected> Ngôn ngữ biên dịch</option>
                <option value="php" <?= isset($language) && $language === 'php' ? 'selected' : '' ?>>PHP</option>
                <option value="python" <?= isset($language) && $language === 'python' ? 'selected' : '' ?>>Python</option>
                <option value="html" <?= isset($language) && $language === 'html' ? 'selected' : '' ?>>HTML/CSS/JavaScript (Client-side)</option>
                <option value="c" <?= isset($language) && $language === 'c' ? 'selected' : '' ?>>C</option>
                <option value="cpp" <?= isset($language) && $language === 'cpp' ? 'selected' : '' ?>>C++</option>
            </select>
        </div>
        <button type="submit" class="btn btn-outline-info">Chạy Code</button>
    </form>

    <?php if (isset($output)): ?>
        <?php if ($language === 'html'): ?>
            <div class="mt-4">
                <h2>Kết Quả:</h2>
                <iframe class="w-100" style="height: 400px;" srcdoc="<?= htmlspecialchars($code) ?>"></iframe>
            </div>
        <?php else: ?>
            <div class="mt-4">
                <h2>Kết Quả:</h2>
                <pre><?= htmlspecialchars($output) ?></pre>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br><br>