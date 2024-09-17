<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Trang Thanh Toán</title>
    <link rel="stylesheet" href="../payment/CSS/payment.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#">
            <img src="../homepage/image/logo.jpg" alt="Logo" />
        </a>
        <a href="../homepage/homepageSigned.php">Trang chủ</a>
        <a href="../tutorpage/tutorpage.php">Gia sư</a>
        <a href="#footer">Liên hệ</a>
        <div class="navbar-right">
            <a>Tài khoản
                <i class="fa fa-user-circle-o" aria-hidden="true" style="color: #1e90ff"></i>
            </a>
        </div>
    </div>

    <!-- Payment content -->
    <div class="container">
        <h2>Thanh Toán Bằng Mã QR</h2>

        <div class="qr-code">
            <!-- Hiển thị ảnh mã QR tĩnh -->
            <img src="../payment/image/qrpay.jpg" alt="Mã QR">
        </div>

        <div class="pdf-section">
            <h3>Hợp Đồng</h3>
            <!-- Đường dẫn đến file PDF -->
            <a href="hopdong.pdf" target="_blank">Tải về Hợp Đồng</a>
        </div>

        <button class="btn">Thanh Toán</button>
    </div>
    <?php include '../footer/footer.html'; ?>
</body>

</html>