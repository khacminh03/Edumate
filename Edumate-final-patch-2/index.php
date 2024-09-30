<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="./homepage/CSS/homepage.css" />
  <title>Trang chủ</title>
  <style>
    .container_2 {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 20px;
    }

    .text-box_2 {
      max-width: 50%;
    }
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

    .navbar-right login_button {
    background-color: #cc5917; 
    color: white; 
    border: none; 
    padding: 20px 20px; 
    border-radius: 5px; 
    cursor: pointer; 
    font-size: 20px; 
    margin-top: 20px; 
    }

    .register_button {
        background-color: #2e7ef5; 
        color: white; 
        border: none; 
        padding: 20px 20px; 
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 20px; 
        margin-top: 20px; 
    }

    .tutor_register_button {
        background-color: #2e7ef5; 
        color: white; 
        border: none; 
        padding: 20px 20px; 
        border-radius: 5px; 
        cursor: pointer; 
        font-size: 20px; 
        margin-top: 20px; 
        margin-right: 20px; 
    }

  </style>
</head>

<body>
  <div class="navbar">
    <a href="#">
      <img src="./homepage/image/logo.jpg" alt="Logo" />
    </a>
    <a href="index.php">Trang chủ</a>
    <a href="./tutorpage/tutorpageUnsign.php">Gia sư</a>
    <a href="#footer">Liên hệ</a>
    <div class="navbar-right">
      <button class="login_button" id="login_button" onclick="window.location.href='./login/login.html';">
        Đăng nhập
      </button>
      <button class="register_button" onclick="window.location.href='./signup/signuphe.php';">Đăng ký</button>
      <button class="tutor_register_button" onclick="window.location.href='./signup/signupte.php';">Đăng ký Gia Sư</button>
    </div>
  </div>

  <div class="container_1">
    <div class="text-box_1">
      <div>
        <a style="font-weight: 600; font-size: 180%">Chào mừng bạn đến với
          EDUMATE</a>
      </div>
      <br />
      <div>
        <a>Bạn muốn con chăm ngoan, học giỏi? Đăng ký ngay! Đội ngũ gia sư
          giỏi của Edumate sẽ giúp con bạn tiến bộ nhanh chóng.</a>
      </div>
      <br />
      <div>
        <button onclick="window.location.href='./signup/signuphe.php';">
          Đăng ký chọn gia sư ngay
        </button>
      </div>
    </div>
  </div>

  <div class="container_2">
    <div class="text-box_2">
      <div>
        <a style="font-weight: 600; font-size: 160%">Bạn cần thuê gia sư?</a>
      </div>
      <br />
      <div>
        <a style="font-weight: 600; font-size: 100%">Trải nghiệm dịch vụ chất lượng và chuyên nghiệp!</a>
      </div>
      <br />
      <div>
        <a>Thật tốn thời gian khi gặp phải gia sư không phù hợp. GrowGreen luôn làm việc chuyên nghiệp và trách nhiệm, bắt đầu từ việc tuyển chọn đến đào tạo gia sư. Đảm bảo gia sư luôn đạt tiêu chuẩn về kiến thức và kỹ năng giảng dạy.</a>
      </div>
      <br />
      <div>
        <button style="background-color: #2e7ef5" onclick="window.location.href='../signup/signuphe.php';">Đăng ký chọn gia sư ngay</button>
      </div>
    </div>
  </div>

  <div class="header">
    <h1>Tại sao chọn trung tâm gia sư Edumate?</h1>
  </div>
  <div class="container_3">
    <div class="column_1">
      <i class="fa fa-check-circle" style="font-size: 300%" aria-hidden="true"></i>
      <h2>Dạy hiệu quả</h2>
      <p>
        Con chỉ có thể học tốt nếu yêu thích việc học. Gia sư tại Edumate luôn
        biết cách tạo động lực cho con, bằng các phương pháp giảng dạy thú vị,
        dễ hiểu và hiệu quả.
      </p>
    </div>
    <div class="column_1">
      <i class="fa fa-line-chart" style="font-size: 300%" aria-hidden="true"></i>
      <h2>Tiến bộ nhanh</h2>
      <p>
        Với gia sư giỏi tại Edumate, con bạn sẽ nhanh chóng học tập tiến bộ,
        có kết quả khác biệt chỉ sau 10 buổi học: Con chăm ngoan, học tốt hơn,
        điểm số cao hơn.
      </p>
    </div>
    <div class="column_1">
      <i class="fa fa-handshake-o" style="font-size: 300%" aria-hidden="true"></i>
      <h2>Học thử 2 buổi</h2>
      <p>
        Sau 2 buổi học thử đầu tiên, nếu không hài lòng về gia sư, bạn không
        cần phải thanh toán học phí. Tất nhiên, Edumate luôn có những gia sư
        khiến bạn hài lòng nhất.
      </p>
    </div>
  </div>
  <div class="button_register" style="margin-bottom: 30px">
    <button onclick="window.location.href='./signup/signuphe.php';">
      Đăng ký chọn gia sư ngay
    </button>
  </div>

  <div class="header" style="background-color: rgb(240, 240, 240)">
    <h1>Những lợi ích mà bạn có được:</h1>
  </div>
  <div class="container_4" style="background-color: rgb(240, 240, 240)">
    <div class="column_2">
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>
          Không phải mất công đi lại, gia sư đến dạy trực tiếp ngay tại nhà
        </h2>
      </div>
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>Biết được tình trạng học tập của con bất cứ khi nào bạn muốn</h2>
      </div>
    </div>
    <div class="column_2">
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>Con được học 1-1, tạo nên chất lượng giảng dạy tốt nhất</h2>
      </div>
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>
          Không còn lo lắng mỗi khi con đối mặt với thi cử, bởi gia sư đã giúp
          con đã nắm vững kiến thức
        </h2>
      </div>
    </div>
    <div class="column_2">
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>
          Dễ dàng quản lý giờ giấc học tập của con, không sợ con ham chơi,
          trốn học
        </h2>
      </div>
      <div class="box">
        <i class="fa fa-check-circle" style="font-size: 300%; color: rgb(0, 177, 118)" aria-hidden="true"></i>
        <h2>
          Việc học tập của con được đảm bảo, trong khi bạn không phải tốn quá
          nhiều công sức và thời gian
        </h2>
      </div>
    </div>
  </div>
  <div class="button_register" style="
        background-color: rgb(240, 240, 240);
        margin-bottom: 30px;
        padding-bottom: 20px;
      ">
    <button style="background-color: #2e7ef5" onclick="window.location.href='./signup/signuphe.php';">
      Đăng ký chọn gia sư ngay
    </button>
  </div>

  <div class="container_5">
    <div class="title">Dịch vụ tại Edumate</div>
    <div class="text-section">
      <div class="text-box_1" style="width: 800px">
        Trung tâm gia sư Edumate luôn nỗ lực để cung cấp cho bạn dịch vụ gia
        sư chất lượng nhất, bao gồm:
      </div>
      <div class="text-box_1" style="width: 800px">
        <i style="color: rgb(0, 146, 97); font-size: 160%" class="fa-solid fa-1"></i>
        <a style="font-weight: 600">Các môn phổ thông</a>
        <br />
        <a>Bao gồm tất cả các môn trong chương trình học phổ thông: gia sư
          Toán, Vật Lý, Hóa Học, Sinh Học, Gia sư Văn, Lịch Sử, Địa Lý, Tiếng
          Anh, Gia sư Tiểu Học, và nhiều môn học khác nữa.</a>
      </div>
      <div class="text-box_1" style="width: 800px">
        <i style="color: rgb(0, 146, 97); font-size: 160%" class="fa-solid fa-2"></i>
        <a style="font-weight: 600">Các môn ngoại ngữ</a>
        <br />
        <a>Chủ yếu dành cho những người đã đi làm, bao gồm gia sư dạy giao
          tiếp các môn: Gia sư Tiếng Anh, Tiếng Nhật, Tiếng Hàn, Tiếng Pháp,
          Tiếng Trung, Tiếng Tây Ban Nha và các môn ngoại ngữ khác.</a>
      </div>
      <div class="text-box_1" style="width: 800px">
        <i style="color: rgb(0, 146, 97); font-size: 160%" class="fa-solid fa-3"></i>
        <a style="font-weight: 600">Các môn năng khiếu</a>
        <br />
        <a>Chủ yếu liên quan đến các môn nghệ thuật như: Piano, Guitar, Organ,
          Mỹ Thuật, Thanh Nhạc. Đối với những môn này, để bạn có được gia sư
          sẽ tốn nhiều thời gian hơn.</a>
      </div>
    </div>
  </div>
  <?php include './footer/footer.html'; ?>
</body>

</html>