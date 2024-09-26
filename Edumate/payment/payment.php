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
    <?php include '../navbar/navbar.php'; ?>
    <!-- Payment content -->
    <div class="container">
        <h2>Thanh Toán Bằng Mã QR</h2>

        <div class="qr-code">
            <!-- Hiển thị ảnh mã QR tĩnh -->
            <img src="../payment/image/qrpay.jpg" alt="Mã QR">
        </div>
        <button class="btn" onclick="window.location.href='../tutordetail/tutordetail.php';">Tôi đã thanh toán thành công</button>
    </div>
    <?php include '../footer/footer.html'; ?>
</body>

</html>