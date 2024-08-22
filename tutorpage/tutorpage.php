<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <title>Trang chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #ffffff;
            overflow: hidden;
        }

        .navbar a, .navbar img {
            float: left;
            display: block;
            text-align: center;
            line-height: 70px;
            padding: 14px 20px;
            text-decoration: none;
            font-size: larger;
        }

        .navbar img {
            height: 70px;
            width: auto;
            padding: 5px 10px;
        }

        .navbar a {
            color: #070707;
            height: 70px;
            width: auto;
            font-size: 24px;
            font-weight: 500;
        }

        .navbar-right {
            float: right;
            justify-self: center;
        }

        .footer {
            width: 100%;
            background-color: #00405e;
            color: white;
            padding: 20px 0;
            display: flex;
            justify-content: center;
        }
        .footer-container {
            width: 80%;
            display: flex;
            justify-content: space-between;
        }
        .footer-column {
            width: 30%;
            padding: 10px;
        }
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 2px solid #555;
            padding-bottom: 5px;
        }
        .footer-column p {
            margin: 5px 0;
        }

        hr.custom-hr {
            border: 0;
            height: 2px;
            background: linear-gradient(to right, #ff6b6b, #f0e130, #1e90ff);
            margin: 20px 0;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .search-container input, .search-container select, .search-container button {
            padding: 10px;
            margin: 0 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-container input {
            flex: 2;
        }
        .search-container select {
            flex: 1;
        }
        .search-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
        }
        .search-container button:hover {
            background-color: #45a049;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .tutor-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .tutor-box {
            display: flex;
            flex-direction: column;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            background-color: #f9f9f9;
        }
        .tutor-info {
            display: flex;
            margin-bottom: 10px;
        }
        .tutor-image {
            width: 100px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 15px;
        }
        .tutor-details p {
            margin: 5px 0;
        }
        .hire-button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            text-align: center;
            margin-top: auto;
        }
        .hire-button:hover {
            background-color: #45a049;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination button {
            padding: 10px;
            margin: 0 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            cursor: pointer;
        }
        .pagination button.active {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }
        .pagination button:hover {
            background-color: #ddd;
        }
        @media (max-width: 768px) {
            .tutor-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 480px) {
            .tutor-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">
        <img src="D:\Learning\Project EXE\image\logo.jpg" alt="Logo">
    </a>
    <a href="#">Trang chủ</a>
    <a href="#">Gia sư</a>
    <a href="#">Học sinh</a>
    <a href="#footer">Liên hệ</a>
    <div class="navbar-right">
        <a>Tài khoản  <i class="fa fa-user-circle-o" aria-hidden="true" style="color: #1e90ff"></i></a>
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

<hr class="custom-hr">
<footer class="footer" id="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Liên hệ</h3>
            <p>Địa chỉ: </p>
            <p>Điện thoại: (0123) 456 789</p>
            <p>Email: info@example.com</p>
        </div>
        <div class="footer-column">
            <h3>Hỗ trợ</h3>
            <p>FAQ</p>
            <p>Chính sách bảo mật</p>
            <p>Điều khoản dịch vụ</p>
        </div>
        <div class="footer-column">
            <h3>Theo dõi chúng tôi</h3>
            <p>Facebook</p>
            <p>Twitter</p>
            <p>Instagram</p>
        </div>
    </div>
</footer>

</body>
</html>
