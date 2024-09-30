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
                    <form action="signupParentAction.php" class="signup-form" method="post">
                        <h2 class="title">ĐĂNG KÝ PHỤ HUYNH</h2>
                        <div class="input-field">
                            <input type="text" name="username" placeholder="Họ và tên"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Email của bạn"required>
                        </div>
                        <div class="input-field">
                            <input type="text" name="phonenumber" placeholder="Số điện thoại"required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Mật khẩu"required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="cfpassword" placeholder="Xác nhận mật khẩu"required>
                        </div>
                        <script>
                            var password = document.getElementById("hepassword");
                            var confirm_password = document.getElementById("confirm_hepassword");
    
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
                        <input type="submit" id="submit" value="Đăng ký">
                        <div class="hrline">
                            HOẶC
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