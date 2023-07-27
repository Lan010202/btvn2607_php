<?php
$folderPath = 'learn_php';
$filePath = $folderPath . '/data.txt';

// Kiểm tra thư mục tồn tại chưa, nếu chưa thì tạo mới
if (!is_dir($folderPath)) {
    mkdir($folderPath, 0777, true);
}

// Kiểm tra file có cho phép ghi không
if (!is_writable($filePath)) {
    die("Không có quyền ghi vào file.");
}

// Ghi nội dung vào file
$fileContent = "Xin chào";
file_put_contents($filePath, $fileContent);

// Đóng file (mặc dù không cần thiết trong trường hợp này, nhưng nên làm để giải phóng tài nguyên)
fclose($file);

// Xoá file
if (file_exists($filePath)) {
    unlink($filePath);
}
?>
