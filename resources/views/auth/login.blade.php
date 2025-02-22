<!DOCTYPE html>
<html lang="ar" class="body-full-height" dir="rtl">

<head>
    <!-- META SECTION -->
    <title>تسجيل الدخول</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('asset_back/css/theme-default.css')}}" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>

    <div class="login-container">

        <div class="login-box animated fadeInDown">
            <div style="text-align: center; font-size: large; margin-bottom: 20px; color: #fff;">
                <!-- Add the logo here -->
                <img src="{{asset('asset_back/assets/images/nature.jpg')}}" alt="المعهد التقاني للحاسوب"
                    style="width: 120px; height: auto; margin-bottom: 10px; border-radius: 50%; border: 1px solid #fff;" />
                <br />
                المعهد التقاني للحاسوب
            </div>
            <div class="login-body">
                <div class="login-title"><strong>تسجيل الدخول</strong> إلى حسابك</div>
                <form action="index.html" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="البريد الإلكتروني" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="كلمة المرور" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <button class="btn btn-info btn-block" style="margin-left:52%; ">تسجيل الدخول</button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="login-or">أو</div> --}}

                    <div class="login-subtitle">
                        ليس لديك حساب بعد؟ <a href="#">إنشاء حساب</a>
                    </div>

                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; {{date('Y')}} الجامعة
                </div>
                <div class="pull-right">
                    <a href="#">حول</a> |
                    <a href="#">الخصوصية</a> |
                    <a href="#">اتصل بنا</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
