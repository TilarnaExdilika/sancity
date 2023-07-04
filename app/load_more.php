<?php
// Include file DBConnection.php hoặc tương tự để kết nối đến cơ sở dữ liệu
include 'config/db.php';

// Xử lý yêu cầu AJAX tại đây và truy vấn cơ sở dữ liệu để lấy các bất động sản tiếp theo

// Lấy giá trị truyền vào từ yêu cầu AJAX (nếu có)
$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

// Số lượng bất động sản muốn hiển thị trong mỗi lần tải thêm
$limit = 6;

// Tính toán offset dựa trên số lượng bất động sản đã hiển thị trước đó
$offset = $offset * $limit;

// Xây dựng truy vấn SQL để lấy các bất động sản tiếp theo
$query = "SELECT p.*, pt.type_name, bd.bedroom_count, ba.bathroom_count, l.city, pi.image_url, p.view_count
        FROM properties p
        INNER JOIN property_types pt ON p.type_id = pt.type_id
        INNER JOIN property_details pd ON p.property_id = pd.property_id
        INNER JOIN bedrooms bd ON pd.bedroom_id = bd.bedroom_id
        INNER JOIN bathrooms ba ON pd.bathroom_id = ba.bathroom_id
        LEFT JOIN locations l ON p.property_id = l.property_id
        LEFT JOIN property_utilities pu ON p.property_id = pu.property_id
        LEFT JOIN utilities u ON pu.utility_id = u.utility_id
        LEFT JOIN (
            SELECT property_id, MIN(image_url) AS image_url
            FROM property_images
            GROUP BY property_id
        ) pi ON p.property_id = pi.property_id";

$conditions = array();
$params = array();

// Thêm các điều kiện tìm kiếm (nếu có)
if (!empty($keyword)) {
    $conditions[] = "p.property_name LIKE ?";
    $params[] = "%$keyword%";
}

if (!empty($city)) {
    $conditions[] = "l.city = ?";
    $params[] = $city;
}

if (!empty($propertyType)) {
    $conditions[] = "p.type_id = ?";
    $params[] = $propertyType;
}

if (!empty($utilities)) {
    $utilityConditions = array();
    foreach ($utilities as $utility) {
        $utilityConditions[] = "pu.utility_id = ?";
        $params[] = $utility;
    }
    $conditions[] = "(" . implode(" OR ", $utilityConditions) . ")";
}

// Thêm điều kiện vào truy vấn SQL (nếu có)
if (!empty($conditions)) {
    $query .= " WHERE " . implode(" AND ", $conditions);
}

// Thêm phần LIMIT để giới hạn số lượng bất động sản trả về
$query .= " ORDER BY p.property_id DESC LIMIT $limit OFFSET $offset";

// Thực hiện truy vấn và lấy danh sách bất động sản
$result = $this->db->getList($query, $params);

// Trả về danh sách bất động sản dưới dạng JSON
header('Content-Type: application/json');
echo json_encode($result);
