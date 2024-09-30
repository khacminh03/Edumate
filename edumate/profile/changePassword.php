<?php
    include '../libs/config.php';
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $oldPassword = $_POST["oldPassword"];
        $newPassword = $_POST["newPassword"];
        $userId = $_SESSION["userId"];
        $sql = $conn->prepare("SELECT password FROM account WHERE userId = ?");
        $sql->bind_param("s", $_SESSION["userId"]);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($row["password"], $oldPassword)) {
                $updatePassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = $conn->prepare("UPDATE account SET password = ? WHERE userId = ?");
                $sql->bind_param("ss", $newPassword, $userId);
                if (!$sql->execute()) {
                    echo "<script>alert('something went wrong')</script>";
                } else {
                    header("Location: ../home/homepageSigned.php");
                }
            } else {
                echo "<script>alert('wrong password')</script>";
            }
        }
    }
?>