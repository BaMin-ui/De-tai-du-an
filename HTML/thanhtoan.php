<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/css.css">

    <script src="../JS/jquery-3.7.1.min.js"></script>
    <script src="../JS/bootstrap.js"></script>
</head>

<body>
    <div class="container border border-dark p-4  mt-3">
        <div class="row" id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                <a class="navbar-brand text-success fw-bold" href="Home.php">FruitShop</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">



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
                            <a class="nav-link" href="xu_ly_don_hang.php">Quản Lý Đơn Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="thong_ke_don_hang.php">Thống Kê Đơn Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="them_san_pham.php">Thêm sản phẩm</a>
                        </li>



                    </ul>







                </div>

            </nav>
        </div>
        <div class="container mt-5">
            <h3 class="mb-4">Thanh toán đơn hàng</h3>
            <div class="row"> <!-- BÊN TRÁI : THÔNG TIN GIAO HÀNG -->
                <div class="col-md-7">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white"> Thông tin giao hàng </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Nhập họ tên">
                                </div>
                                <div class="mb-3">
                                    <label>Số điện thoại</label>
                                    <input type="tel" class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Nhập email">
                                </div>
                                <div class="mb-3">
                                    <label>Địa chỉ giao hàng</label>
                                    <input type="text" class="form-control" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="mb-3">
                                    <label>Phương thức thanh toán</label>
                                    <select class="form-select">
                                        <option>Chọn phương thức thanh toán</option>
                                        <option>Chuyển khoản qua QR - BIDV</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- BÊN PHẢI : TÓM TẮT ĐƠN HÀNG -->
                <div class="col-md-5">
                    <div class="card shadow-sm mb-3">
                        <div class="card-header bg-success text-white"> Mã khuyến mãi </div>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nhập mã khuyến mãi">
                                <button class="btn btn-success"> Áp dụng </button>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white"> Tóm tắt đơn hàng </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2"> <span>Tạm tính</span>
                                <span>390.000đ</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2"> <span>Phí vận chuyển</span>
                                <span>30.000đ</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3">
                                <strong>Tổng cộng</strong>
                                <strongclass="text-danger">420.000đ</strongclass=>
                            </div>
                            <button class="btn btn-success w-100">Đặt hàng</button>
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

</body>

</html>