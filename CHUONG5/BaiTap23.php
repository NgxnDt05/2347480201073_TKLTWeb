<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "Tailieu/";

    /* nếu chưa có thư mục thì tạo */
    if (!file_exists($target_dir)) {
        mkdir($target_dir,0777,true);
    }

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    $uploadOk = 1;

    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    /* kiểm tra file đã tồn tại */
    if (file_exists($target_file)) {
        echo "Tập tin đã tồn tại.<br>";
        $uploadOk = 0;
    }

    /* kiểm tra dung lượng */
    if ($_FILES["file"]["size"] > 500000) {
        echo "Tập tin quá lớn.<br>";
        $uploadOk = 0;
    }

    /* loại file cho phép */
    $allowed_types = ["jpg","png","jpeg","gif","pdf","doc","docx"];

    if (!in_array($fileType,$allowed_types)) {
        echo "Chỉ cho phép JPG, PNG, GIF, PDF, DOC, DOCX.<br>";
        $uploadOk = 0;
    }

    /* upload file */
    if ($uploadOk == 1) {

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

            echo "Upload thành công: "
            . htmlspecialchars(basename($_FILES["file"]["name"]));

        } else {

            echo "Có lỗi xảy ra khi tải lên tập tin của bạn.";

        }

    } else {

        echo "Upload thất bại.";

    }

}

?>