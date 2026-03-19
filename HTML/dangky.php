<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/css.css">

    <script src="../JS/jquery-3.7.1.min.js"></script>
    <script src="../JS/bootstrap.js"></script>
    <style>
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h4 class="mb-0">Đăng ký tài khoản</h4>
                    </div>

                    <div class="card-body p-4">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" name="confirm_password" class="form-control">
                            </div>

                            <a href="">
                                <button class="btn btn-success w-100 mt-2"> Đăng ký</button>
                            </a>
                        </form>
                        <div class="text-center mt-3">Đã có tài khoản?
                            <a href="">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>