<?php
    include '../libs/config.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["hefullname"];
        $email = $_POST["heemail"];
        $telephone = $_POST["hephonenumber"];
        $password = password_hash($_POST["hepassword"], PASSWORD_DEFAULT);
        $userId = "HE" . "-" . md5($username);
        $_SESSION["userId"] = $userId;
        $_SESSION["username"] = $username;
        $sql->$conn("SELECT * FROM account WHERE email = ?");
        $sql->bind_param("?", $username);
        $sql->execute();
        if ($result->num_rows > 0) {
            echo "<script>alert('Username has been taken')</script>";
            header("Location: signupParent.html");
            exit();
        }
        $sql->$conn("INSERT INTO account (accountid, email, password, userid) VALUES('HE', ?, ?, ?)");
        $sql->bind_param("???", $username, $password, $userId);
        $sql->execute();
        $sql->$conn("INSERT INTO user (userId, fullname, email, phoneNumber) VALUES (?, ?, ?, ?, ?)");
        $sql->bind_param("????", $userId, $username, $email, $telephone);
        $sql->execute();
        if ($sql === true) {
            header("Location: ../login/login.html");
        } else {
            echo "<script>alert('some thing went wrong')</script>";
        }
    }
?>