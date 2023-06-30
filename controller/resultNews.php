<?php
require_once '../config/db.php';
$db = new connect();
$conn = $db->getConnection();
session_start();

if (isset($_POST['submit'])) {
    // Lấy thông tin từ biểu mẫu
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['news_image']['tmp_name'];
    $tags = isset($_POST['tags']) ? $_POST['tags'] : array();
    
    // Kiểm tra và lấy id của tác giả từ $_SESSION["uauth"]
    $author_id = isset($_SESSION["uauth"]["user_id"]) ? $_SESSION["uauth"]["user_id"] : null;

    // Xử lý upload ảnh
    $target_dir = '../public/upload/news/';
    $image_name = $_FILES['news_image']['name'];
    $target_file = $target_dir . basename($image_name[0]); // Chỉ lấy phần tử đầu tiên của mảng $image_name
    move_uploaded_file($image[0], $target_file); // Chỉ lấy phần tử đầu tiên của mảng $image

    // Lấy chỉ tên tệp tin
    $news_image = basename($target_file);

    // Thêm bài viết vào CSDL
    $query = "INSERT INTO news_blog (title, content, author_id, news_image) VALUES (:title, :content, :author_id, :news_image)";
    $params = array(':title' => $title, ':content' => $content, ':author_id' => $author_id, ':news_image' => $news_image);
    $result = $db->exec($query, $params);

    $news_id = $conn->lastInsertId();

    // Thêm tags của bài viết vào CSDL
    if (!empty($tags)) {
        foreach ($tags as $tag_id) {
            $query = "INSERT INTO news_tags (news_id, tags_id) VALUES (:news_id, :tags_id)";
            $params = array(':news_id' => $news_id, ':tags_id' => $tag_id);
            $db->exec($query, $params);
        }
    }

    // Kiểm tra và hiển thị thông báo thành công hoặc lỗi
    if ($result) {
        echo "Thêm bài viết thành công!";
    } else {
        echo "Thêm bài viết thất bại!";
    }
}
?>
