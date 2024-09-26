<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        .detail-teacher {
            margin: 20px auto;
            max-width: 1200px;
        }

        .box-main {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header-box-main h2 {
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .item-t-pic img {
            max-width: 100%;
            height: auto;
        }

        .profile-section {
            margin-top: 15px;
        }

        .img-large {
            width: 100%;
            height: auto;
        }

        .align-self-stretch {
            align-self: stretch;
        }

        .review-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .stars {
            color: #f39c12;
            /* Gold color for stars */
        }

        .stars i {
            font-size: 24px;
            /* Size of stars */
        }

        .stars .inactive {
            color: #ddd;
            /* Color for inactive stars */
        }

        .btn-book-now {
            margin-top: 20px;
            display: block;
            /* Ensure the button is displayed as a block-level element */
            width: 100%;
            /* Full width on smaller screens */
            text-align: center;
            /* Center the text in the button */
        }

        .profile-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .profile-box p {
            margin: 0;
            padding: 0;
            font-size: 16px;
        }

        .profile-box h4 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include '../navbar/navbar.html'; ?>
    <div class="container mt-4 detail-teacher">
        <div class="box-main">
            <div class="body-box-main">
                <div class="row">
                    <!-- Image and profile section -->
                    <div class="col-12 col-md-3 mb-3 mb-md-0 d-flex flex-column align-items-center align-self-stretch">
                        <div class="item-t-pic mb-3">
                            <img src="../tutordetail/images/ChCKBb0XMoZO6k92SMucsrYnqIZxsOZBV8Y80bBh.jpg" class="lazy img-fluid" alt="Profile Picture" />
                        </div>
                    </div>
                    <!-- Personal details -->
                    <div class="col-12 col-md-7">
                        <p class="mb-1-teacher font-weight-bold">Phạm Quang Hưng</p>
                        <p class="mb-1-teacher"><b>Năm sinh:</b> 2005</p>
                        <p class="mb-1-teacher"><strong>Mã GS:</strong> 06113</p>
                        <p class="mb-1-teacher"><b>Ngày dạy: </b></p>
                        <p class="mb-1-teacher"><b>Giờ dạy: </b></p>
                        <div>
                            <strong class="mb-1-teacher font-w-600">Môn dạy:</strong>
                            <span class="font-w-600">Toán</span>,
                            <span class="font-w-600">Vật Lý</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                        <img src="../tutordetail/images/d05058950a1aad44f40b.jpg" class="img-fluid img-large" alt="About Image" />
                    </div>
                </div>
                <!-- Profile box below the details -->
                <div class="profile-box">
                    <h4>Thông tin thêm về gia sư</h4>
                    <p><strong>Kinh nghiệm:</strong> 3 năm dạy kèm môn Toán và Vật Lý cho học sinh cấp 2 và cấp 3.</p>
                </div>
            </div>
        </div>
        <div class="review-box">
            <h4 class="mb-3">Đánh giá</h4>
            <div id="stars" class="stars"></div>
        </div>
        <button class="btn btn-primary btn-book-now" onclick="window.location.href='../payment/payment.php';">Thuê ngay</button>
    </div>
    <?php include '../footer/footer.html'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const starsContainer = document.getElementById('stars');
            const minRating = 3; // Minimum rating
            const maxRating = 5; // Maximum rating
            const rating = Math.floor(Math.random() * (maxRating - minRating + 1)) + minRating;

            for (let i = 1; i <= maxRating; i++) {
                const star = document.createElement('i');
                star.className = 'fas fa-star';
                if (i > rating) {
                    star.classList.add('inactive');
                }
                starsContainer.appendChild(star);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-4VRCP9F/M9sQ9gJxqQ7fU3OlhJ3S3W2a8zOg0a8eI4VqP+Jq6U4VdxKPzAKsK7lA"
        crossorigin="anonymous"></script>
</body>

</html>
