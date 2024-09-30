<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Sử dụng một phiên bản duy nhất của Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../tutorpage/CSS/tutorpage.css">
    <title>Trang chủ</title>
</head>
<body>
<?php include '../navbar/navbar.php'; ?>
<h1>Đội ngũ gia sư</h1>
<div class="search-container">
    <form action="result.php" method="post" style="display: flex; width: 100%; max-width: 1000px;">
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
include '../libs/config.php';

// Initialize tutors array
$tutors = [];

$sql = $conn->prepare("SELECT * FROM tutor JOIN user ON user.userId = tutor.tutorId");
if (!$sql->execute()) {
    echo "<script>alert('Something went wrong')</script>";
} else {
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $tutors[] = [
                "name" => $row["fullname"],
                "address" => $row["area"],
                "time" => $row["time"],
                "pic" => $row["tutorImage"],
                "id" => $row["tutorId"]
            ];
        }
    } else {
        echo '<p>Không tìm thấy gia sư nào.</p>';
    }
}

// Only proceed if there are tutors
if (count($tutors) > 0) {
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
        $pic = "../image/" . $tutors[$i]["pic"];
        echo '<div class="tutor-box">';
        echo '<div class="tutor-info">';
        echo '<img src="' . $pic . '" alt="Tutor Image" class="tutor-image">';
        echo '<div class="tutor-details">';
        echo '<p><strong>Tên:</strong> ' . $tutors[$i]['name'] . '</p>';
        echo '<p><strong>Địa chỉ dạy:</strong> ' . $tutors[$i]['address'] . '</p>';
        echo '<p><strong>Giờ dạy:</strong> ' . $tutors[$i]['time'] . '</p>';
        echo '</div></div>';
        echo '<a class="hire-button" href="../tutordetail/tutordetail.php?id='. $tutors[$i]['id'] . '">Thuê ngay</a>';
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
}
?>

<?php include '../footer/footer.html'; ?>
</body>
</html>