<?php
    include '../libs/config.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["fullname"];
        $email = $_POST["email"];
        $telephone = $_POST["phonenumber"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $userId = "TE" . "-" . md5($email);
        $_SESSION["username"] = $username;
        $_SESSION["userId"] = $userId;


        $sql = $conn->prepare("SELECT * FROM account WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();
        if ($result->num_rows > 0) {
            echo "<script>alert('Your account has been taken')</script>";
            header("Location: signupTutor.html");
            exit();
        }
        
        $sql = $conn->prepare("INSERT INTO account (accountId, email, password, userId) VALUES (?, ?, ?, ?)");
        $accountId = "TE";
        $sql->bind_param("ssss", $accountId, $email, $password, $userId);
        $sql->execute();

        $sql = $conn->prepare("INSERT INTO user (userId, fullname, email, phoneNumber) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $userId, $username, $email, $telephone);
        if (!$sql->execute()) {
            echo "<script>alert('Lỗi khi chèn vào bảng user');</script>";
        } else {
            header("Location: signuptecf.html");
        }
    }
?>
