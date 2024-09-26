<?php
    include '../libs/config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = $conn->prepare("SELECT * FROM account WHERE username = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $result = $sql->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {

                if (str_starts_with($row["accountId"], "HE")) {
                    header("Location: homepageSigned.html");
                } else if (str_starts_with($row["accountId"], "TE")) {
                    header("Location: homepageSigned.html");
                } else {
                    header("Location: homepageSigned.html");
                }
            } else {
                echo "<script>alert('Wrong password or username')</script>";
            }
        } else {
            echo "<script>alert('Wrong password or username')</script>";
        }
    }
?>
