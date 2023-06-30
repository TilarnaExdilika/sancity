<?php
// Kết nối tới cơ sở dữ liệu
require_once '../config/db.php';
$db = new connect();
$conn = $db->getConnection();
// Bắt đầu session
session_start();

// Hàm getUrl() di chuyển ra khỏi class connect
function getUrl($params) {
    $baseUrl = "http://localhost/sancity"; // Địa chỉ gốc của trang web của bạn

    $url = $baseUrl . $params;

    return $url;
}

// Xử lý dữ liệu gửi từ biểu mẫu
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['auth'];
    // Lấy thông tin từ biểu mẫu
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $user_address = $_POST['user_address'];
    $state = $_POST['state'];
    $about = $_POST['about'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];

    // Kiểm tra xem người dùng đã chọn tệp ảnh hay chưa
    if (isset($_FILES['avatar_url']) && $_FILES['avatar_url']['error'] === 0) {
        $img_file = $_FILES['avatar_url'];
        $img_name = $img_file['name'];
        $img_size = $img_file['size'];
        $tmp_name = $img_file['tmp_name'];
        $error = $img_file['error'];

        // Kiểm tra kích thước ảnh
        if ($img_size > 2097152) {
            $em = "Vui lòng chọn ảnh nhỏ hơn 2mb";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            // Kiểm tra phần mở rộng của tệp ảnh
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../public/upload/users/' . $new_img_name;

                // Xóa tệp ảnh cũ (nếu tồn tại)
                $old_img_name = '';
                $query = "SELECT avatar_url FROM users WHERE user_id = :user_id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':user_id', $user_id);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result && isset($result['avatar_url'])) {
                    $old_img_name = $result['avatar_url'];
                    $old_img_path = '../public/upload/users/' . $old_img_name;
                    if (file_exists($old_img_path)) {
                        unlink($old_img_path);
                    }
                }

                // Di chuyển tệp ảnh tải lên vào thư mục đích
                if (move_uploaded_file($tmp_name, $img_upload_path)) {
                    // Thực hiện câu truy vấn UPDATE vào bảng "users"
                    $query = "UPDATE users 
                              SET fullname = :fullname, email = :email, phone_number = :phone_number, user_address = :user_address, state = :state, about = :about, facebook = :facebook, linkedin = :linkedin, avatar_url = :avatar_url
                              WHERE user_id = :user_id";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':fullname', $fullname);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':phone_number', $phone_number);
                    $stmt->bindParam(':user_address', $user_address);
                    $stmt->bindParam(':state', $state);
                    $stmt->bindParam(':about', $about);
                    $stmt->bindParam(':facebook', $facebook);
                    $stmt->bindParam(':linkedin', $linkedin);
                    $stmt->bindParam(':avatar_url', $new_img_name);
                    $stmt->bindParam(':user_id', $user_id);
                    $stmt->execute();
                } else {
                    $em = "Đã xảy ra lỗi trong quá trình tải lên tệp";
                }
            } else {
                $em = "Chỉ cho phép tệp JPG, JPEG và PNG";
            }
        }
    } else {
        // Người dùng không chọn tệp ảnh mới, chỉ cập nhật thông tin cá nhân
        $query = "UPDATE users 
                  SET fullname = :fullname, email = :email, phone_number = :phone_number, user_address = :user_address, state = :state, about = :about, facebook = :facebook, linkedin = :linkedin
                  WHERE user_id = :user_id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':user_address', $user_address);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':about', $about);
        $stmt->bindParam(':facebook', $facebook);
        $stmt->bindParam(':linkedin', $linkedin);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
    }

    // Chuyển hướng trở lại trang profile
    $url = getUrl("?controller=DashBoard&action=profile");
    echo "<script>window.location.href = '{$url}';</script>";
    exit();
} else {
    // Nếu không có dữ liệu gửi từ biểu mẫu, chuyển hướng trở lại trang profile
    $url = getUrl("?controller=DashBoard&action=index");
    echo "<script>window.location.href = '{$url}';</script>";
    exit();
}
?>
