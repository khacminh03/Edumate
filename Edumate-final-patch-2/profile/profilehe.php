<?php
    include '../libs/config.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {        
        $userId = $_SESSION["userId"];
        $email = $_POST["email"];
        $fullname = $_POST["fullname"];
        $telephone = $_POST["telephone"];
        $sql = $conn->prepare("UPDATE user SET email = ?, fullname = ?, phoneNumber = ? WHERE userId = ?");
        $sql->bind_param("ssss", $email, $fullname, $telephone, $userId);
        if (!$sql->execute()) {
            echo "<script>alert('Something went wrong')</script>";
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
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Thông tin cá nhân</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Thay đổi mật khẩu</a>
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

                                    $sql = $conn->prepare("SELECT * FROM user WHERE userId = ?");
                                    $sql->bind_param("s", $_SESSION["userId"]);
                                    $sql->execute();
                                    $result = $sql->get_result();

                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                ?>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control mb-1" value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" name="telephone" class="form-control mb-1" value="<?php echo $row['phoneNumber']; ?>">
                                    </div>
                                    <div class="text-left mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                    </div>
                                <?php 
                                    }
                                ?>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="changePassword.php" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" id="newPassword" name="newPassword" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" id="retypePassword" name="retypePassword" class="form-control">
                                    </div>
                                    <div class="text-left mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                    </div>
                                    <script>
                                        var password = document.getElementById("newPassword");
                                        var confirm_password = document.getElementById("retypePassword");

                                        function validatePassword() {
                                            if (password.value !== confirm_password.value) {
                                                confirm_password.setCustomValidity("Mật khẩu không khớp");
                                            } else {
                                                confirm_password.setCustomValidity('');
                                            }
                                        }

                                        password.onchange = validatePassword;
                                        confirm_password.onkeyup = validatePassword;
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../footer/footer.html'; ?>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>