<?php
// Data for tutors
include '../libs/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $time = $_POST['time-slot'] ;
    $subject = $_POST["subject"];
    $name = $_POST["team-name"];
    $sql = "SELECT * FROM tutor JOIN user ON tutor.tutorId = user.userId WHERE time LIKE '%$time%' AND subject LIKE '%$subject%' AND fullname LIKE '%$name%'";
    $result = $conn->query($sql);
    $tutors = [];
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tutors[] = [
                "name" => $row["fullname"],
                "address" => $row["area"],
                "time" => $row["time"],
                "pic" => $row["tutorImage"],
                "id" => $row["tutorId"]
            ];
        }
    } else if ($result->num_rows === 0) {
        die("No result");
    }

    // Pagination variables
    $itemsPerPage = 9;
    $totalTutors = count($tutors);
    $totalPages = ceil($totalTutors / $itemsPerPage);

    // Current page
    $currentPage = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

    // Calculate the start and end tutor indices
    $start = ($currentPage - 1) * $itemsPerPage;
    $end = min(($start + $itemsPerPage), $totalTutors);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="tutorpage.css">
    <title>Trang chủ</title>
</head>
<body>
<?php include '../navbar/navbar.html'; ?>
<h1>Đội ngũ gia sư</h1>
<div class="search-container">
    <form action="" method="post" style="display: flex; width: 100%; max-width: 1000px;">
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
        </select>

        <button type="submit">Tìm kiếm</button>
    </form>
</div>

<?php if (isset($tutors) && count($tutors) > 0): ?>
    <div class="tutor-container">
        <?php for ($i = $start; $i < $end; $i++): ?>
            <div class="tutor-box">
                <div class="tutor-info">
                    <img src="../image/<?= $tutors[$i]['pic'] ?>" alt="Tutor Image" class="tutor-image">
                    <div class="tutor-details">
                        <p><strong>Tên:</strong> <?= $tutors[$i]['name'] ?></p>
                        <p><strong>Địa chỉ dạy:</strong> <?= $tutors[$i]['address'] ?></p>
                        <p><strong>Giờ dạy:</strong> <?= $tutors[$i]['time'] ?></p>
                    </div>
                </div>
                <a class="hire-button" href="../tutordetail/tutordetail.php?id=<?= $tutors[$i]['id'] ?>">Thuê ngay</a>
            </div>
        <?php endfor; ?>
    </div>
    <div class="pagination">
        <a href="?page=<?= max(1, $currentPage - 1) ?>"><button>Trước</button></a>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>"><button class="<?= $i === $currentPage ? 'active' : '' ?>"><?= $i ?></button></a>
        <?php endfor; ?>
        <a href="?page=<?= min($totalPages, $currentPage + 1) ?>"><button>Sau</button></a>
    </div>
<?php else: ?>
    <p>Không tìm thấy gia sư phù hợp.</p>
<?php endif; ?>

<?php include '../footer/footer.html'; ?>
</body>
</html>
