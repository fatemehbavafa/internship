<!DOCTYPE html>
<html lang="en">
<head>
    <title>صفحه ورود</title>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
        rel="stylesheet"
    />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="{{asset('/login/css/style.css')}}"/>
</head>
<body class="img js-fullheight" style="background-image: url({{asset("login/images/phone.jpg")}})">
<section class="ftco-section">
    <div class="container">

    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
                <h3 class="mb-4 text-center">ورود</h3>
                <form action="#" class="signin-form">
                    <div class="form-group">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="نام کاربری"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <input
                            id="password-field"
                            type="password"
                            class="form-control"
                            placeholder="کلمه عبور"
                            required
                        />
                        <span
                            toggle="#password-field"
                            class="fa fa-fw fa-eye field-icon toggle-password"
                        ></span>
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="form-control btn btn-primary submit px-3"
                        >
                            ورود
                        </button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <label class="checkbox-wrap checkbox-primary"
                            >مرا به خاطر بسپار
                                <input type="checkbox" checked/>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#" style="color: #fff">فراموشی رمز عبور؟</a>
                        </div>
                    </div>
                </form>
                <p class="w-100 text-center">حساب کاربری ندارید؟ ثبت نام کنید</p>
                <div class="social d-flex text-center">
                    <a href="#" class="px-2 py-2 mr-md-1 rounded"
                    ><span class="ion-logo-facebook mr-2"></span> ثبت نام</a
                    >

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script src="{{asset("login/js/jquery.min.js")}}"></script>
<script src="{{asset("login/js/popper.js")}}"></script>
<script src="{{asset("login/js/bootstrap.min.js")}}"></script>
<script src="{{asset("login/js/main.js")}}"></script>
</body>
</html>
