<?php
    include '../libs/config.php';
    include '../libs/functions.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Kiểm tra nếu các dữ liệu POST đã được gửi
            $email = $_POST["email"];
            $fullname = $_POST["fullname"];
            $telephone = $_POST["telephone"];
            $area = $_POST["address"];
            $idNumber = $_POST["idNumber"];
            $subject = $_POST["subject"];
            $class = $_POST["class"];
            $teachDay = $_POST["teachDay"];
            $teachTime = $_POST["teachTime"];
            $_SESSION["username"] = $fullname;
            $userId = $_SESSION["userId"];
            $sql = $conn->prepare("UPDATE tutor SET subject = ?, class = ?, area = ?, time = ?, day = ? WHERE tutorId = ?");
            $sql->bind_param("ssssss", $subject, $class, $area, $teachTime, $teachDay, $userId);
            if (!$sql->execute()) {
                echo "<script>alert('some thing went wrong in update')</script>";
            }
            $sql = $conn->prepare("UPDATE account SET email = ? WHERE userId = ?");
            $sql->bind_param("ss", $email, $userId);
            if (!$sql->execute()) {
                echo "<script>alert('some thing went wrong in update')</script>";
            }
            $sql = $conn->prepare("UPDATE user SET email = ?, fullname = ? WHERE userId = ?");
            $sql->bind_param("sss", $email, $fullname, $userId);
            if (!$sql->execute()) {
                echo "<script>alert('some thing went wrong in update')</script>";
            }
            $targetDir = "../image/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            $error = [];
            $pattern = [
                "userpersonimage" => "PIC-",
                "userpersonidimage" => "CCCD-",
                "usercertificate" => "CER-"
            ];
            foreach($pattern as $fileKey => $prefix) {
                if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]["error"] == UPLOAD_ERR_OK) {
                    $fileTempPath = $_FILES[$fileKey]["tmp_name"];
                    $original = basename($_FILES[$fileKey]["name"]);
                    $fileType = pathinfo($original, PATHINFO_EXTENSION);
        
                    if (checkFileType($fileType) === false) {
                        die("Error: Invalid file type");
                    }
        
                    $newFileName = $prefix . md5($_SESSION["username"]) . ".jpg";
        
                    if (str_starts_with($newFileName, "PIC-")) {
                        $sql = $conn->prepare("UPDATE tutor SET tutorImage = ? WHERE tutorId = ?");
                        $sql->bind_param("ss", $newFileName, $userId);
                        $sql->execute();
                    } else if (str_starts_with($newFileName, "CCCD-")) {
                        $sql = $conn->prepare("UPDATE tutor SET tutorPersonIdImage = ? WHERE tutorId = ?");
                        $sql->bind_param("ss", $newFileName, $userId);
                        $sql->execute();
                    } else {
                        $sql = $conn->prepare("UPDATE tutor SET tutorCertificate = ? WHERE tutorId = ?");
                        $sql->bind_param("ss", $newFileName, $userId);
                        $sql->execute();
                    }
                    $sql->execute();
        
                    $targetUpload = $targetDir . $newFileName;
                    if (move_uploaded_file($fileTempPath, $targetUpload)) {
                        echo "<script>alert('Success upload');</script>";
                    } else {
                        echo "<script>alert('Failed to upload');</script>";
                    }
                }
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include '../navbar/navbar.php'; ?>
    <br>
    <hr class="custom-hr" />
    <div class="container light-style flex-grow-1 container-p-y">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Thông tin cá nhân</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Thay đổi mật khẩu</a>
                        <a class="list-group-item list-group-item-action" href="../logout/logout.php">Đăng xuất</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                    include '../libs/config.php';

                                    $sql = $conn->prepare("SELECT tutor.*, user.* FROM tutor INNER JOIN user ON tutor.tutorId = user.userId WHERE tutorId = ?");
                                    $sql->bind_param("s", $_SESSION["userId"]);
                                    if (!$sql->execute()) {
                                        echo "<script>alert('Some thing went wrong')</script>";
                                    }
                                    $result = $sql->get_result();
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                ?>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control mb-1" value="<?php echo $row['email']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Họ và tên</label>
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" name="telephone" class="form-control mb-1" value="<?php echo $row['phoneNumber'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Địa chỉ dạy</label>
                                    <input type="text" name="address" class="form-control" value="<?php echo $row['area'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Môn dạy</label>
                                    <input type="text" name="subject" class="form-control" value="<?php echo $row['subject'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Lớp dạy</label>
                                    <input type="text" name="class" class="form-control mb-1" value="<?php echo $row['class'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ngày dạy trong tuần</label>
                                    <input type="text" name="teachDay" class="form-control" value="<?php echo $row['day'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Giờ dạy trong ngày</label>
                                    <input type="text" name="teachTime" class="form-control mb-1" value="<?php echo $row['time'] ?>" required>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="form-group">
                                    <label class="form-label">Ảnh thẻ</label>
                                    <div class="image-container">
                                        <input type="file" name="userpersonimage" id="userimage" accept="image/*" enctype="multipart/form-data" hidden required>
                                        <div class="img-area" id="userimage-area" data-img="">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            <h3>Upload Image</h3>
                                            <p>Image size must be less than <span>2MB</span></p>
                                        </div>
                                        <button type="button" class="select-user-image">Select Image</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ảnh CCCD/CMND</label>
                                    <div class="image-container">
                                        <input type="file" name="userpersonidimage" id="userpersonidimage" accept="image/*" enctype="multipart/form-data" hidden required>
                                        <div class="img-area" id="userpersonidimage-area" data-img="">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            <h3>Upload Image</h3>
                                            <p>Image size must be less than <span>2MB</span></p>
                                        </div>
                                        <button type="button" class="select-userpersonid-image">Select Image</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ảnh Bằng cấp</label>
                                    <div class="image-container">
                                        <input type="file" name="usercertificate" id="usercertificateimage" accept="image/*" enctype="multipart/form-data" hidden required>
                                        <div class="img-area" id="usercertificateimage-area" data-img="">
                                            <i class="fa-solid fa-cloud-arrow-up"></i>
                                            <h3>Upload Image</h3>
                                            <p>Image size must be less than <span>2MB</span></p>
                                        </div>
                                        <button type="button" class="select-usercertificate-image">Select Image</button>
                                    </div>
                                </div>
                                <div class="text-left mt-3">
                                    <button type="submit" class="btn btn-primary">Save changes</button>;
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="" method="post">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" name="oldPassword" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" name="newPassword" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" name="confirmPassword" class="form-control">
                                </div>
                                <script>
                                    var password = document.getElementById("newPassword")
                                    , confirm_password = document.getElementById("confirmPassword");

                                    function validatePassword(){
                                    if(password.value != confirm_password.value) {
                                        confirm_password.setCustomValidity("Passwords Don't Match");
                                    } else {
                                        confirm_password.setCustomValidity('');
                                    }
                                    }

                                    password.onchange = validatePassword;
                                    confirm_password.onkeyup = validatePassword;
                                </script>
                                <div class="text-left mt-3">
                                    <button type="submit" class="btn btn-primary">Save changes</button>;
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="profile.js"></script>
    <script type="text/javascript">
    </script>
    <?php include '../footer/footer.html'; ?>
</body>

</html>