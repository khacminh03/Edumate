<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href="../login/style.css">
        <title>Tutor login Page</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="signupTutorCfAction.php" class="signup-form" method="post" enctype="multipart/form-data">
                        <h2 class="title">ĐĂNG KÝ THÔNG TIN GIA SƯ</h2>
                        <div class="input-field">
                            <label for="dob">Ngày tháng năm sinh</label>
                            <input type="date" name="dob">
                        </div>
                        <div class="input-field">
                            <input type="text" name="address" placeholder="Địa chỉ hiện tại"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="userpersonid" placeholder="Số CMND/CCCD"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="subject" placeholder="Môn dạy"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="class" placeholder="Lớp dạy"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="area" placeholder="Khu vực dạy"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="time" placeholder="Thời gian dạy trong ngày"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="day" placeholder="Ngày dạy trong tuần"required>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Ảnh thẻ">
                        </div>
                        <input type="file" id="userpersonimage" name="userpersonimage">
                        <div class="input-field">
                            <input type="text" placeholder="Ảnh CMND/CCCD">
                        </div>
                        <input type="file" id="userpersonidimage" name="userpersonidimage">
                        <div class="input-field">
                            <input type="text" placeholder="Ảnh bằng cấp">
                        </div>
                        <input type="file" id="usercertificate" name="usercertificate">
                        <input type="submit" id="submit" value="Đăng ký">
                        <div class="hrline">
                            HOẶC
                        </div>
                        <div>

                        </div>
                        <div>
                            Bạn đã có tài khoản?
                            <a href="../login/signin.html">Đăng nhập</a>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </body>
</html>