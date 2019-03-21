<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DP Hà Nội</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
        ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <img src="img/logo3.png" width = "108" height="60" >
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">Giới thiệu</a></li>
                <li><a href="#testimonials" class="page-scroll">Thông báo</a></li>
                <li><a href="#services" class="page-scroll">Hoạt động</a></li>
                <li><a href="#portfolio" class="page-scroll">Thư viện ảnh</a></li>
                <li><a href="#contact" class="page-scroll">Liên hệ</a></li>
                <li><a href={{ route('login') }} class="page-scroll">Đăng nhập</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <!-- <img src="img/logo2.png" width = "350" height="200" > -->
                        <h1>DP Hà Nội</h1>
                        <p>Hệ thống thông tin quản lý người khuyết tập TP Hà Nội</p>
                        <a href="#about" class="btn btn-custom btn-lg page-scroll">Xem thêm</a> </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>Giới thiệu chung<br><span>DP Hà Nội</span></h2>
                    <hr>
                    <p>Hội NKT TP. Hà Nội được thành lập theo Quyết định số 266/QĐ-UBND ngày 16/1/2006 của Chủ tịch UBND TP. Hà Nội.</p>
                    <a href="#services" class="btn btn-custom btn-lg page-scroll">Hoạt động của DP Hà Nội</a> </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="about-media"> <img src="img/Dphanoi5.jpg" alt=" "> </div>
                <div class="about-desc">
                    <h3>Tầm nhìn</h3>
                    <p>Trong tương lai không xa người khuyết tật Việt Nam hoà nhập bình đẳng và đầy đủ vào các lĩnh vực của đời sống xã hội.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="about-media"> <img src="img/img_31449807303935-480x320.jpeg" alt=" "> </div>
                <div class="about-desc">
                    <h3>Sứ mệnh</h3>
                    <p>Thúc đẩy thực hiện quyền của người khuyết tật.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title">
                <h2>Thông báo</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="img/TelePro.jpg" class="img-responsive" >
                            <br><br>
                            <p>Thông báo về chương trình tập huấn Việc Làm cho TNKT ngày 05/01/2019</p>
                            <a class="btn btn-custom btn-lg page-scroll">Xem chi tiết</a>
                            <br><br>
                        </div>
                        <div class="item">
                            <img src="img/hoa  nhac.jpg" class="img-responsive">
                            <br><br>
                            <p>Buổi hòa nhạc tại trường Nguyễn Đình Chiếu do UNDP phối hợp với Yamaha tổ chức</p>
                            <a class="btn btn-custom btn-lg page-scroll">Xem chi tiết</a>
                            <br><br>
                        </div>
                        <div class="item">
                            <img src="img/Dphanoi-film.jpg" class="img-responsive" >
                            <br><br>
                            <p>Thể lệ cuộc thi làm Video, Clips, Phim ngắn, Phóng sự nhân kỉ niệm Quốc tế Người khuyết tật 03-12</p>
                            <a class="btn btn-custom btn-lg page-scroll">Xem chi tiết</a>
                            <br><br>
                        </div>
                        <div class="item">
                            <img src="img/tuyen-dung.jpg" class="img-responsive" >
                            <br><br>
                            <p>Công ty cổ phần thiết bị và dịch vụ kỹ thuật Lotus Việt Nam tuyển dụng nhân sự</p>
                            <a class="btn btn-custom btn-lg page-scroll">Xem chi tiết</a>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section -->
<div id="services">
    <div class="container">
        <div class="col-md-10 col-md-offset-1 section-title text-center">
            <h2>Hoạt Động</h2>
            <hr>
            <p>Danh sách những hoạt động mà hội viên DP Hà Nội có thể thực hiện.</p>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="service-media"> <img src="img/A1.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Dự án “chung tay vì cộng đồng” được làm việc là hạnh phúc</h3>
                    <p>Ngày 28/2/2019, tại tòa nhà Format 49 Thái Hà, Đống Đa, Hà Nội, lễ ký thỏa thuận hợp tác lần thứ 2 thực hiện dự án "Chung tay vì cộng đồng"- một dự án tạo việc làm cho người khuyết tật giữa công ty Cổ phần IntelLife và Hội Người khuyết tật (NKT) TP Hà Nội đã diễn ra trong không khí ấm cúng, thân mật và thành công tốt đẹp.</p>
                </div>
                <a class="btn btn-custom btn-lg page-scroll">Chi tiết</a>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-media"> <img src="img/Dphanoi-052.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Dự án “Tăng cường năng lực cho lãnh đạo nữ của Hội Người khuyết tật thành phố Hà Nội”</h3>
                    <p>Ngày 26/02/2019, dự án “Tăng cường năng lực cho lãnh đạo nữ của Hội Người khuyết tật thành phố Hà Nội” do Quỹ Abilis/Phần Lan tài trợ được phê duyệt theo Quyết định số 647/QĐ-UBND ngày 01/02/2019 của Ủy ban nhân dân thành phố Hà Nội; thời gian thực hiện của dự án từ tháng 02-12/2019 với nguồn kinh phí hỗ trợ là 9.911EURO.</p>
                </div>
                <a class="btn btn-custom btn-lg page-scroll">Chi tiết</a>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-media"> <img src="img/Dphanoi-051.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Buổi họp khai xuân mới của Ban Chấp hành Hội Người khuyết tật thành phố Hà Nội nhiệm kỳ IV</h3>
                    <p>Ngày 22/02/2019, tại Cung Trí thức thành phố đã tiến hành kỳ họp thứ 4 Ban Chấp hành Hội Người khuyết tật thành phố Hà Nội nhiệm kỳ IV (2017-2022). Tham gia cuộc họp có các uỷ viên Ban kiểm tra của Hội. Trong không khí phấn khởi chào đón năm mới Kỷ Hợi 2019, bà Dương Thị Vân – Chủ tịch Hội NKT thành phố Hà Nội -  gửi tới toàn thể đại biểu tham gia hội nghị lời chúc sức khoẻ, hạnh phúc và những thành công mới trong hoạt động hội.</p>
                </div>
                <a class="btn btn-custom btn-lg page-scroll">Chi tiết</a>
            </div>
            <div class="col-md-3 text-center">
                <div class="service-media"> <img src="img/Dp-Hanoi-08.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>CLB cha mẹ trẻ khuyết tật quận huyện thứ 10 tại Hà Nội ra đời.</h3>
                    <p>Chiều ngày 18/12/2018, tại phòng Hội đồng của Trường Chuyên biệt Bình Minh, huyện Đông Anh, CLB cha mẹ trẻ khuyết tật huyện Đông Anh đã chính thức ra mắt. Đây là CLB cha mẹ trẻ khuyết tật quận/ huyện thứ 10 tại Hà Nội ra đời và đi vào hoạt động.</p>
                </div>
                <a class="btn btn-custom btn-lg page-scroll">Chi tiết</a>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Thư Viện Ảnh</h2>
            <hr>
            <p>Ảnh của các hoạt động do DP Hà Nội hợp tác tổ chức.</p>
        </div>
        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">Tất cả</a></li>
                        <li><a href="#" data-filter=".lawn">Sự kiện</a></li>
                        <li><a href="#" data-filter=".garden">Hoạt động</a></li>
                        <li><a href="#" data-filter=".planting">Giải trí</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <div class="col-sm-6 col-md-4 lawn">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Lorem Ipsum</h4>
                                </div>
                                <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 planting">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Adipiscing Elit</h4>
                                </div>
                                <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 lawn">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Lorem Ipsum</h4>
                                </div>
                                <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 lawn">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Lorem Ipsum</h4>
                                </div>
                                <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 planting">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Adipiscing Elit</h4>
                                </div>
                                <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 garden">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Dolor Sit</h4>
                                </div>
                                <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 garden">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Dolor Sit</h4>
                                </div>
                                <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 lawn">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Lorem Ipsum</h4>
                                </div>
                                <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 planting">
                    <div class="portfolio-item">
                        <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>Adipiscing Elit</h4>
                                </div>
                                <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title text-center">
            <h2>Thông tin liên hệ</h2>
            <hr>
            <p>Mọi yêu cầu, thắc mắc, đề nghị hợp tác xin vui lòng liên hệ theo thông tin dưới đây hoặc để lại lời nhắn.</p>
        </div>
        <div class="col-md-10 col-md-offset-1 contact-info">
            <div class="col-md-4">
                <h3>Địa chỉ</h3>
                <hr>
                <div class="contact-item">
                    <p>Tầng 5, Cung trí thức Hà Nội,</p>
                    <p>Số 1 Tôn Thất Thuyết phường Dịch Vọng Hậu, Cầu Giấy, Hà Nội</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Giờ làm việc</h3>
                <hr>
                <div class="contact-item">
                    <p>Thứ 2 - Thứ 6: 07:00 - 18:00</p>
                    <p>Thứ 7 - Chủ nhật : Đóng cửa</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Thông tin liên lạc</h3>
                <hr>
                <div class="contact-item">
                    <p>Phone: +84-24-35379257</p>
                    <p>Fax: +84-24-37956649</p>
                    <p>Email: admin@dphanoi.vn, hoinkt@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h3>Để lại cho chúng tôi lời nhắn</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" class="form-control" placeholder="Tên" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Nội dung" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-custom btn-lg">Gửi lời nhắn</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer Section -->
<div id="footer">
    <div class="container text-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <p>&copy; 2019 DP Hà Nội.</p>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
