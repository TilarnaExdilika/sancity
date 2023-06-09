<?php
// Lấy dữ liệu từ bảng "property_types"
$propertyTypesQuery = "SELECT * FROM property_types";
$propertyTypesResult = $conn->query($propertyTypesQuery);

// Lấy dữ liệu từ bảng "areas"
$areasQuery = "SELECT * FROM areas";
$areasResult = $conn->query($areasQuery);

// Lấy dữ liệu từ bảng "bedrooms"
$bedroomsQuery = "SELECT * FROM bedrooms";
$bedroomsResult = $conn->query($bedroomsQuery);

// Lấy dữ liệu từ bảng "bathrooms"
$bathroomsQuery = "SELECT * FROM bathrooms";
$bathroomsResult = $conn->query($bathroomsQuery);

// Lấy dữ liệu từ bảng "utilities"
$utilitiesQuery = "SELECT * FROM utilities";
$utilitiesResult = $conn->query($utilitiesQuery);

// Đóng kết nối
$conn = null;
?>