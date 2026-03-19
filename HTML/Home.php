<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chu</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/css.css">

    <script src="../JS/jquery-3.7.1.min.js"></script>
    <script src="../JS/bootstrap.js"></script>

</head>

<body>
    <div class="container border border-dark p-4  mt-3">
        <div class="row" id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">


                <a class="navbar-brand text-success fw-bold" href="Home.php">FruitShop</a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">


                    <div class="col-6">
                        <!-- MENU BÊN TRÁI -->
                        <ul class="navbar-nav ">

                            <!-- Dropdown Sản phẩm -->
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#submenuSanPham">

                                    Sản phẩm
                                </a>

                                <div id="submenuSanPham" class="collapse ps-3">

                                    <a class="nav-link" href="trai_cay_viet_nam.php">Trái cây Việt Nam</a>

                                    <a class="nav-link" href="trai_cay_nhap_khau.php">Trái cây nhập khẩu</a>

                                    <a class="nav-link" href="gio_qua_trai_cay.php">Giỏ quà trái cây</a>

                                </div>

                            </li>
                            <!-- Blog -->
                            <li class="nav-item">
                                <a class="nav-link" href="blog_&_bai_viet.php">Blog & Bài viết</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="lien_he.php">Liên hệ</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-6">

                        <!-- BÊN PHẢI MENU -->
                        <div class="d-flex flex-column flex-lg-row align-items-lg-center">

                            <!-- SEARCH -->
                            <form class="d-flex me-lg-3 mb-2 mb-lg-0">
                                <input class="form-control form-control-sm me-2" type="search" placeholder="Tìm...">
                                <button class="btn btn-success btn-sm">Tìm</button>
                            </form>

                            <!-- ĐĂNG NHẬP -->
                            <a href="#" class="nav-link me-lg-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                                <i class="bi bi-person"></i> Đăng nhập
                            </a>

                            <!-- ĐĂNG KÝ -->
                            <a href="#" class="nav-link me-lg-3">
                                <i class="bi bi-person-plus"></i> Đăng ký
                            </a>

                            <!-- GIỎ HÀNG -->
                            <a href="#" class="nav-link position-relative">

                                <i class="bi bi-cart3 fs-5"></i> Giỏ hàng

                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    0
                                </span>

                            </a>

                        </div>
                    </div>



                </div>

            </nav>
        </div>
        <div class="row" id="banner">
            <!-- BANNER -->

            <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf" style="height: 100%; width: 100%;">


        </div>
        <div class="row" id="danhmuc">
            <!-- DANH MỤC -->
            <div class="container mt-0">

                <h3 class="text-center mb-4">Danh mục sản phẩm</h3>

                <div class="row text-center">

                    <!-- TRÁI CÂY VIỆT NAM -->
                    <div class="col-md-4">
                        <a href="trai_cay_viet_nam.php" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <img src="../images/danhmuc/trai_cay_viet_nam.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5>Trái cây Việt Nam</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- TRÁI CÂY NHẬP KHẨU -->
                    <div class="col-md-4">
                        <a href="trai_cay_nhap_khau.php" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <img src="../images/danhmuc/trai_cay_nhap_khau.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5>Trái cây nhập khẩu</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- GIỎ QUÀ TRÁI CÂY -->
                    <div class="col-md-4">
                        <a href="gio_qua_trai_cay.php" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <img src="../images/danhmuc/gio_trai_cay.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5>Giỏ quà trái cây</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" id="san_pham_noi_bat">
            <!-- SẢN PHẨM NỔI BẬT -->
            <div class="container mt-5">

                <h3 class="text-center mb-4">Sản phẩm nổi bật</h3>

                <div class="row">

                    <div class="col-md-3">
                        <div class="card product shadow-sm">
                            <img src="">
                            <div class="card-body text-center">
                                <h6>Táo Envy Mỹ</h6>
                                <p class="text-danger">170.000đ/kg</p>
                                <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card product shadow-sm">
                            <img src="">
                            <div class="card-body text-center">
                                <h6>Nho đen Mỹ</h6>
                                <p class="text-danger">220.000đ/kg</p>
                                <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card product shadow-sm">
                            <img src="">
                            <div class="card-body text-center">
                                <h6>Cherry Canada</h6>
                                <p class="text-danger">450.000đ/kg</p>
                                <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card product shadow-sm">
                            <img src="">
                            <div class="card-body text-center">
                                <h6>Kiwi New Zealand</h6>
                                <p class="text-danger">210.000đ/kg</p>
                                <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="container mt-5">

            <h3 class="text-center mb-4">Sản phẩm bán chạy</h3>

            <div class="row">

                <div class="col-md-3">
                    <div class="card product shadow-sm">
                        <img src="">
                        <div class="card-body text-center">
                            <h6>Táo Envy Mỹ</h6>
                            <p class="text-danger">170.000đ/kg</p>
                            <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card product shadow-sm">
                        <img src="">
                        <div class="card-body text-center">
                            <h6>Nho đen Mỹ</h6>
                            <p class="text-danger">220.000đ/kg</p>
                            <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card product shadow-sm">
                        <img src="">
                        <div class="card-body text-center">
                            <h6>Cherry Canada</h6>
                            <p class="text-danger">450.000đ/kg</p>
                            <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card product shadow-sm">
                        <img src="">
                        <div class="card-body text-center">
                            <h6>Kiwi New Zealand</h6>
                            <p class="text-danger">210.000đ/kg</p>
                            <button class="btn btn-success btn-sm">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="row bg-dark text-white py-4" id="footer">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="fw-bold">Về Name</h3>
                    <p>
                        <strong>Name</strong> là cửa hàng trực tuyến chuyên cung cấp dụng cụ học tập chất lượng, đa
                        dạng và giá cả hợp lý.Chúng tôi mang đến trải nghiệm mua sắm tiện lợi với sản phẩm bền đẹp,
                        đáp ứng mọi nhu cầu học tập của bạn.
                    </p>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">Liên Hệ</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> 12 Nguyễn Văn Bảo, Phường 4, Quận Gò Vấp, TP.HCM
                    </p>
                    <p><i class="fas fa-phone me-2"></i> 0987 123 456</p>
                    <p><i class="fas fa-envelope me-2"></i> support@name.vn</p>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">Hỗ Trợ Khách Hàng</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#"><i class="fas fa-shield-alt me-2"></i> Chính sách
                                bảo
                                hành</a></li>
                        <li><a class="text-white" href="#"><i class="fas fa-exchange-alt me-2"></i> Chính
                                sách đổi
                                trả</a></li>
                        <li><a class="text-white" href="#"><i class="fas fa-shipping-fast me-2"></i> Chính
                                sách vận
                                chuyển</a></li>
                        <li><a class="text-white" href="#"><i class="fas fa-question-circle me-2"></i> Câu
                                hỏi
                                thường
                                gặp</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h3 class="fw-bold">Kết Nối Với Chúng Tôi</h3>
                    <div class="d-flex">
                        <a class="text-white me-3 fs-4" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-white me-3 fs-4" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="text-white me-3 fs-4" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="text-white fs-4" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="border-top pt-2 text-center">
                <p class="mb-0 fst-italic">© 2026 Name. All rights reserved. | Thiết kế bởi Nhóm .. - Bài Tập Lớn Hệ
                    thống Công nghệ Web
                </p>
            </div>
        </div>
    </div>
























</body>
<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title">Đăng nhập</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <div class="modal-body">

                <form action="login.php" method="POST">

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập email">
                    </div>

                    <div class="mb-3">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>

                    <button class="btn btn-success w-100">
                        Đăng nhập
                    </button>

                </form>

                <div class="text-center mt-3">
                    Chưa có tài khoản?
                    <a href="#">Đăng ký</a>
                </div>

            </div>

        </div>
    </div>
</div>

</html>
