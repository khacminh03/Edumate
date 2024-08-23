<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../tutorpage/CSS/tutorpageUnsign.css">
    <title>Đội ngũ gia sư</title>
</head>
<body>
<div class="navbar">
    <a href="#">
      <img src="../homepage/image/logo.jpg" alt="Logo" />
    </a>
    <a href="../homepage/homepage.php">Trang chủ</a>
    <a href="../tutorpage/tutorpageUnsign.php">Gia sư</a>
    <a href="#footer">Liên hệ</a>
    <div class="navbar-right">
      <button class="login_button" onclick="window.location.href='login.html';">
        Đăng nhập
      </button>
      <button class="register_button" href="#">Đăng ký</button>
      <button class="tutor_register_button" href="#">Đăng ký Gia Sư</button>
    </div>
  </div>
<h1>Đội ngũ gia sư</h1>
<div class="search-container">
    <form action="#" method="GET" style="display: flex; width: 100%; max-width: 1000px;">
        <input type="text" id="team-name" name="team-name" placeholder="Nhập tên đội ngũ gia sư">
        
        <select id="time-slot" name="time-slot">
            <option value="morning">Buổi sáng</option>
            <option value="afternoon">Buổi chiều</option>
            <option value="evening">Buổi tối</option>
        </select>

        <select id="subject" name="subject">
            <option value="math">Toán</option>
            <option value="english">Tiếng Anh</option>
            <option value="physics">Vật Lý</option>
            <option value="chemistry">Hóa Học</option>
            <option value="biology">Sinh Học</option>
            <!-- Thêm các môn học khác nếu cần -->
        </select>

        <button type="submit">Tìm kiếm</button>
    </form>
</div>
<?php
// Data for tutors
$tutors = [
    ['name' => 'Nguyễn Văn A', 'age' => 25, 'address' => 'Hà Nội', 'time' => 'Buổi sáng'],
    ['name' => 'Trần Thị B', 'age' => 28, 'address' => 'TP. Hồ Chí Minh', 'time' => 'Buổi chiều'],
    ['name' => 'Lê Văn C', 'age' => 30, 'address' => 'Đà Nẵng', 'time' => 'Buổi tối'],
    ['name' => 'Phạm Văn D', 'age' => 26, 'address' => 'Cần Thơ', 'time' => 'Buổi sáng'],
    ['name' => 'Vũ Thị E', 'age' => 29, 'address' => 'Hải Phòng', 'time' => 'Buổi chiều'],
    ['name' => 'Ngô Văn F', 'age' => 31, 'address' => 'Quảng Ninh', 'time' => 'Buổi tối'],
    ['name' => 'Đỗ Thị G', 'age' => 24, 'address' => 'Huế', 'time' => 'Buổi sáng'],
    ['name' => 'Bùi Văn H', 'age' => 27, 'address' => 'Nha Trang', 'time' => 'Buổi chiều'],
    ['name' => 'Nguyễn Thị I', 'age' => 32, 'address' => 'Đồng Nai', 'time' => 'Buổi tối'],
    ['name' => 'Hoàng Văn J', 'age' => 23, 'address' => 'Vũng Tàu', 'time' => 'Buổi sáng'],
    ['name' => 'Phạm Thị K', 'age' => 29, 'address' => 'Biên Hòa', 'time' => 'Buổi chiều'],
    ['name' => 'Lê Thị L', 'age' => 26, 'address' => 'Hà Nội', 'time' => 'Buổi tối']
    // Add more tutors here
];

// Pagination variables
$itemsPerPage = 9;
$totalTutors = count($tutors);
$totalPages = ceil($totalTutors / $itemsPerPage);

// Current page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $currentPage = (int)$_GET['page'];
} else {
    $currentPage = 1;
}

// Calculate the start and end tutor indices
$start = ($currentPage - 1) * $itemsPerPage;
$end = min(($start + $itemsPerPage), $totalTutors);

// Render the tutors for the current page
echo '<div class="tutor-container">';
for ($i = $start; $i < $end; $i++) {
    echo '<div class="tutor-box">';
    echo '<div class="tutor-info">';
    echo '<img src="https://via.placeholder.com/100x150" alt="Tutor Image" class="tutor-image">';
    echo '<div class="tutor-details">';
    echo '<p><strong>Tên:</strong> ' . $tutors[$i]['name'] . '</p>';
    echo '<p><strong>Tuổi:</strong> ' . $tutors[$i]['age'] . '</p>';
    echo '<p><strong>Địa chỉ:</strong> ' . $tutors[$i]['address'] . '</p>';
    echo '<p><strong>Giờ dạy:</strong> ' . $tutors[$i]['time'] . '</p>';
    echo '</div></div>';
    echo '<button class="hire-button">Thuê ngay</button>';
    echo '</div>';
}
echo '</div>';

// Render pagination
echo '<div class="pagination">';
echo '<a href="?page=' . max(1, $currentPage - 1) . '"><button>Trước</button></a>';
for ($i = 1; $i <= $totalPages; $i++) {
    echo '<a href="?page=' . $i . '"><button class="' . ($i === $currentPage ? 'active' : '') . '">' . $i . '</button></a>';
}
echo '<a href="?page=' . min($totalPages, $currentPage + 1) . '"><button>Sau</button></a>';
echo '</div>';
?>
<?php include '../footer/footer.html'; ?>
</body>
</html>
