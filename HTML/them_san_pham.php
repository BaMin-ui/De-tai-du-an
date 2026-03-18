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
                            <a class="nav-link" href="blog_&_bai_viet.php">Blog & Bài viế</a>
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
        <div class="row">
            <div class="container mt-5">

                <!-- TIÊU ĐỀ -->
                <h3 class="text-center text-success mb-4">Đăng sản phẩm mới</h3>

                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <div class="card shadow-sm">
                            <div class="card-body">

                                <form action="xuly_post_sanpham.php" method="POST" enctype="multipart/form-data">

                                    <!-- TÊN SẢN PHẨM -->
                                    <div class="mb-3">
                                        <label class="form-label">Tên sản phẩm</label>
                                        <input type="text" name="ten_sp" class="form-control"
                                            placeholder="Nhập tên sản phẩm" required>
                                    </div>

                                    <!-- DANH MỤC -->
                                    <div class="mb-3">
                                        <label class="form-label">Danh mục</label>
                                        <select name="danhmuc" class="form-control">
                                            <option>Trái cây Việt Nam</option>
                                            <option>Trái cây nhập khẩu</option>
                                            <option>Giỏ quà trái cây</option>
                                        </select>
                                    </div>

                                    <!-- GIÁ -->
                                    <div class="mb-3">
                                        <label class="form-label">Giá (VNĐ)</label>
                                        <input type="number" name="gia" class="form-control" placeholder="Nhập giá"
                                            required>
                                    </div>

                                    <!-- SỐ LƯỢNG -->
                                    <div class="mb-3">
                                        <label class="form-label">Số lượng</label>
                                        <input type="number" name="soluong" class="form-control"
                                            placeholder="Nhập số lượng">
                                    </div>

                                    <!-- HÌNH ẢNH -->
                                    <div class="mb-3">
                                        <label class="form-label">Hình ảnh</label>
                                        <input type="file" name="hinhanh" class="form-control">
                                    </div>

                                    <!-- MÔ TẢ -->
                                    <div class="mb-3">
                                        <label class="form-label">Mô tả sản phẩm</label>
                                        <textarea name="mota" class="form-control" rows="4"
                                            placeholder="Nhập mô tả"></textarea>
                                    </div>

                                    <!-- NÚT -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Đăng sản phẩm</button>
                                        <button type="reset" class="btn btn-secondary">Nhập lại</button>
                                    </div>

                                </form>

                            </div>
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