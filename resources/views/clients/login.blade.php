<!DOCTYPE html> <html lang="en">

<head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Đăng nhập | Công ty nước sạch Hà Nội</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }

        /*------------ Login container ------------*/
        .box-area {
            width: 930px;
        }

        /*------------ Right box ------------*/
        .right-box {
            padding: 40px 30px 40px 40px;
        }

        /*------------ Custom Placeholder ------------*/
        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        /*------------ For small screens------------*/
        @media only screen and (max-width: 768px) {
            .box-area {
                margin: 0 10px;
            }

            .left-box {
                height: 100px;
                overflow: hidden;
            }

            .right-box {
                padding: 20px;
            }
        }
    </style>
    </head>

    <body>
        <!----------------------- Main Container -------------------------->
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <!----------------------- Login Container -------------------------->
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <!--------------------------- Left Box ----------------------------->
                <!-- <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #103cbe;">
                <img
                        class="img-fluid">
            </div> -->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                    <img src="https://storage-vnportal.vnpt.vn/sme-g1/sitefolders/ttvsmt/bai-viet/nuoc.jpg" alt="image"
                        class="img-fluid">
                </div>
                <!-------------------- ------ Right Box ---------------------------->

                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Xin chào</h2>
                            <p>Chúng tôi rất vui khi có bạn trở lại.</p>
                        </div>
                        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Tên đăng nhập/ Email">
                            </div>
                            <div class="input-group mb-1">
                                <input type="password" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Mật khẩu">
                            </div>
                            <div class="input-group mb-5 d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Ghi
                                            nhớ</small></label>
                                </div>
                                <div class="forgot">
                                    <small><a href="#">Quên mật khẩu?</a></small>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <button class="btn btn-lg btn-primary w-100 fs-6">Đăng nhập</button>
                            </div>
                        </form>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img
                                    src="{{ asset('assets/clients/img/icon-google.png') }}" style="width:20px"
                                    class="me-2"><small>Đăng nhập với Google</small></button>
                        </div>
                        <div class="row">
                            <small>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng kí</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
