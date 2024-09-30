<?php
    include '../libs/config.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $telephone = $_POST["phonenumber"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $userId = "HE" . "-" . md5($email);
        
        // Lưu thông tin vào session
        $_SESSION["userId"] = $userId;
        $_SESSION["username"] = $username;

        // Kiểm tra email đã tồn tại chưa
        $sql = $conn->prepare("SELECT * FROM account WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Email has been taken')</script>";
            header("Location: signuphe.html");
            exit();
        }

        // Chèn vào bảng account
        $sql = $conn->prepare("INSERT INTO account (accountId, email, password, userId) VALUES('HE', ?, ?, ?)");
        $sql->bind_param("sss", $email, $password, $userId);
        $sql->execute();

        // Chèn vào bảng user
        $sql = $conn->prepare("INSERT INTO user (userId, fullname, email, phoneNumber) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $userId, $username, $email, $telephone);
        $sql->execute();
        header("Location: ../login/login.html");
    }
?>
