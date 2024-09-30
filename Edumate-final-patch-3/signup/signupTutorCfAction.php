<?php
include '../libs/config.php';
include '../libs/functions.php';

$targetDir = "../image/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $userPersonIdNumber = $_POST["userpersonid"];
    $subject = $_POST["subject"];
    $classTeach = $_POST["class"];
    $area = $_POST["area"];
    $time = $_POST["time"];
    $day = $_POST["day"];
    $userId = $_SESSION["userId"];
    echo $userId;
    $sql = $conn->prepare("INSERT INTO tutor (tutorid, subject, class, area, time, day) VALUES(?, ?, ?, ?, ?, ?)");
    $sql->bind_param("ssssss", $userId, $subject, $classTeach, $area, $time, $day);
    $sql->execute();

    $pattern = [
        "userpersonimage" => "PIC-",
        "userpersonidimage" => "CCCD-",
        "usercertificate" => "CER-"
    ];

    foreach($pattern as $fileKey => $prefix) {
        if (isset($_FILES[$fileKey]) && $_FILES[$fileKey]["error"] == UPLOAD_ERR_OK) {
            $fileTempPath = $_FILES[$fileKey]["tmp_name"];
            $original = basename($_FILES[$fileKey]["name"]);
            $fileType = pathinfo($original, PATHINFO_EXTENSION);

            if (checkFileType($fileType) === false) {
                die("Error: Invalid file type");
            }

            $newFileName = $prefix . md5($_SESSION["username"]) . ".jpg";

            if (str_starts_with($newFileName, "PIC-")) {
                $sql = $conn->prepare("UPDATE tutor SET tutorImage = ? WHERE tutorid = ?");
                $sql->bind_param("ss", $newFileName, $userId);
                $sql->execute();
            } else if (str_starts_with($newFileName, "CCCD-")) {
                $sql = $conn->prepare("UPDATE tutor SET tutorPersonIdImage = ? WHERE tutorid = ?");
                $sql->bind_param("ss", $newFileName, $userId);
                $sql->execute();
            } else {
                $sql = $conn->prepare("UPDATE tutor SET tutorCertificate = ? WHERE tutorid = ?");
                $sql->bind_param("ss", $newFileName, $userId);
                $sql->execute();
            }
            $sql->execute();

            $targetUpload = $targetDir . $newFileName;
            if (move_uploaded_file($fileTempPath, $targetUpload)) {
                echo "<script>alert('Success upload');</script>";
            } else {
                echo "<script>alert('Failed to upload');</script>";
            }
        }
    }
    header("Location: ../homepage/homepageSigned.php");
}
?>
