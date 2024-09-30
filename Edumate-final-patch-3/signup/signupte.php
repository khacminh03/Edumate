<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../login/style.css">
    <title>Tutor Login Page</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="signupTutorAction.php" class="signup-form" method="post">
                    <h2 class="title">ĐĂNG KÝ GIA SƯ</h2>
                    <div class="input-field">
                        <input type="text" name="fullname" placeholder="Họ và tên" required>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email của bạn" required>
                    </div>
                    <div class="input-field">
                        <input type="tel" name="phonenumber" placeholder="Số điện thoại" required pattern="[0-9]{10,15}">
                    </div>
                    <div class="input-field">
                        <input type="password" id="tepassword" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <div class="input-field">
                        <input type="password" id="cftepassword" name="cfpassword" placeholder="Xác nhận mật khẩu" required>
                    </div>
                    <script>
                        var password = document.getElementById("tepassword");
                        var confirm_password = document.getElementById("cftepassword");

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
                    <input type="button" id="contract" onclick="window.location.href='contract.pdf';" value="Hiện thông tin hợp đồng">
                    <input type="submit" id="submit" value="Đăng ký thông tin gia sư">
                    <div class="hrline">
                        HOẶC
                    </div>
                    <div>
                        Bạn đã có tài khoản?
                        <a href="../login/login.html">Đăng nhập</a>
                    </div>
                </form>
            </div>   
        </div>
    </div>
</body>
</html>
