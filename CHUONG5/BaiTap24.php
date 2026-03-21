<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $target_dir = "BoSuuTap/";

    // tạo thư mục nếu chưa có
    if (!file_exists($target_dir)) {
        mkdir($target_dir,0777,true);
    }

    $allowed_types = ["jpg","jpeg","png","gif"];

    $files = $_FILES['files'];

    for ($i = 0; $i < count($files['name']); $i++) {

        $uploadOk = 1;   // reset cho từng file

        $target_file = $target_dir . basename($files["name"][$i]);

        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // kiểm tra file tồn tại
        if (file_exists($target_file)) {
            echo "Tập tin ".htmlspecialchars($files["name"][$i])." đã tồn tại.<br>";
            $uploadOk = 0;
        }

        // kiểm tra dung lượng
        if ($files["size"][$i] > 500000) {
            echo "Tập tin ".htmlspecialchars($files["name"][$i])." quá lớn.<br>";
            $uploadOk = 0;
        }

        // kiểm tra định dạng
        if (!in_array($fileType,$allowed_types)) {
            echo "Tập tin ".htmlspecialchars($files["name"][$i])." không đúng định dạng.<br>";
            $uploadOk = 0;
        }

        // upload file
        if ($uploadOk == 1) {

            if (move_uploaded_file($files["tmp_name"][$i],$target_file)) {

                echo "Upload thành công: "
                . htmlspecialchars($files["name"][$i]) . "<br>";

            } else {

                echo "Lỗi khi upload file "
                . htmlspecialchars($files["name"][$i]) . "<br>";

            }

        }

    }

}

?>