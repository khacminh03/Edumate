

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
    <?php include '../navbar/navbar.html'; ?>
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
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Họ và tên</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Số CCCD/CMND</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Môn dạy</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Lớp dạy</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ngày dạy trong tuần</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Giờ dạy trong ngày</label>
                                    <input type="text" class="form-control mb-1" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Ảnh thẻ</label>
                                    <div class="image-container">
                                        <input type="file" id="userimage" accept="image/*" hidden>
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
                                        <input type="file" id="userpersonidimage" accept="image/*" hidden>
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
                                        <input type="file" id="usercertificateimage" accept="image/*" hidden>
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
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
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