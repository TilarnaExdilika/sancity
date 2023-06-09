<?php
if(isset($_FILES['file'])){
    $errors = array();

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    // Kiểm tra phần mở rộng của file
    $file_name_parts = explode('.', $_FILES['file']['name']);
    $file_ext = strtolower(end($file_name_parts));

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="Chỉ được phép tải lên file JPEG hoặc PNG.";
    }

    if($file_size > 2097152) {
        $errors[]='Kích thước file không được lớn hơn 2MB';
    }

    if(empty($errors)==true) {
        // Đường dẫn thư mục đích
        $target_dir = "public/img/gallery/";

        // Kiểm tra và tạo thư mục tương ứng nếu chưa tồn tại
        $property_type = $_POST['property_type'];
        $target_dir .= $property_type . "/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Đường dẫn file đích
        $target_file = $target_dir . $file_name;

        move_uploaded_file($file_tmp, $target_file);

        // Lưu tên ảnh vào cơ sở dữ liệu
        require_once 'config/db.php';
        $db = new connect();
        $conn = $db->getConnection();

        $image_url = $target_file;
        $property_name = $_POST['property_name'];

        // Thực hiện truy vấn để lưu thông tin ảnh vào cơ sở dữ liệu
        $query = "INSERT INTO images (image_url, property_name) VALUES ('$image_url', '$property_name')";
        $conn->query($query);

        // Đóng kết nối
        $conn = null;

        echo "Tải ảnh lên thành công.";
    } else {
        print_r($errors);
    }
}
?>
