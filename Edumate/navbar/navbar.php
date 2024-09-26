<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .navbar {
        background-color: #ffffff;
        overflow: hidden;
      }

      .navbar a,
      .navbar img {
        float: left;
        display: block;
        text-align: center;
        line-height: 70px;
        padding: 14px 20px;
        text-decoration: none;
        font-size: larger;
      }

      .navbar img {
        height: 70px;
        width: auto;
        padding: 5px 10px;
      }

      .navbar a {
        color: #070707;
        height: 70px;
        width: auto;
        font-size: 24px;
        font-weight: 500;
      }

      .navbar-right {
        float: right;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <a href="#">
        <img src="../homepage/image/logo.jpg" alt="Logo" />
      </a>
      <a href="../homepage/homepageSigned.php">Trang chủ</a>
      <a href="../tutorpage/tutorpage.php">Gia sư</a>
      <a href="#footer">Liên hệ</a>
      <div class="navbar-right">
        <?php
        session_start();

        if (isset($_SESSION["userId"])) {
            $hre = "";
            if (str_starts_with($_SESSION["userId"], "HE")) {
                $hre = "../profile/profilehe.php";
            } else if (str_starts_with($_SESSION["userId"], "TE")) {
                $hre = "../profile/profilete.php";
            }
            echo '<a href="' . $hre . '">Tài khoản <i class="fa fa-user-circle-o" aria-hidden="true" style="color: #1e90ff"></i></a>';
        } else {
            echo '<a href="../login/signin.html">Đăng nhập <i class="fa fa-user-circle-o" aria-hidden="true" style="color: #1e90ff"></i></a>';
        }
    ?>
      </div>
    </div>
  </body>
</html>
