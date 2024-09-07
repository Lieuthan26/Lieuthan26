<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Lưu thông tin liên hệ vào cơ sở dữ liệu hoặc tập tin
    // (Chú ý: Đây chỉ là một ví dụ đơn giản, không có kết nối cơ sở dữ liệu thực tế)

    echo "Contact added successfully!";
} else {
    echo "Invalid request.";
}
?>
bai 2



