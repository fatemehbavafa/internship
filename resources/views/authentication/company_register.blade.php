<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ثبت نام شرکت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link
        rel="stylesheet"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset("company_register/css/style.css")}}"/>
</head>

<body>
<div
    class="wrapper"
    style="
        background-image: linear-gradient(
          to right top,
          #cbb3d4,
          #c795db,
          #c175e1,
          #b951e6,
          #af19eb
        );
      "
>
    <div class="inner">

            <div class="image-holder" style="display: grid">
                <img src="{{asset("company_register/images/REG.png")}}" alt=""/>
                <div>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div style="font-family: IRANSans;border: 1px solid #f5c6cb;border-radius: 10px;background-color: #f8d7da;color: #721c24;margin-bottom: 5px;padding: 10px" dir="rtl">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        <form action="{{route('store_company')}}" method="POST">
            {{csrf_field()}}
            <h3>ثبت نام کارفرما</h3>
            <div class="form-wrapper">
                <input type="text" placeholder=" نام شرکت " class="form-control" name="company_name"/>
            </div>
            <div class="form-group">
                <input
                    type="text"
                    placeholder="نام خانوادگی مدیر شرکت"
                    class="form-control"
                    name="last_name"
                />
                <input
                    type="text"
                    placeholder="نام مدیر شرکت"
                    class="form-control"
                    name="first_name"
                />
            </div>
            <div class="form-wrapper">
                <input
                    type="text"
                    placeholder="شماره تماس شرکت"
                    class="form-control"
                    name="phone"
                />
            </div>
            <div class="form-wrapper">
                <input
                    type="text"
                    placeholder="ایمیل کاری شرکت"
                    class="form-control"
                    name="email"
                />
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="آدرس شرکت" class="form-control" name="address"/>
            </div>
            <div class="col-md-9 pe-5">
                <div class="small text-muted mt-2 upload">
                    آپلود اطلاعات قانونی شرکت
                </div>
                <input
                    class="form-control form-control-lg"
                    id="formFileLg"
                    type="file"
                />
            </div>
            <div class="form-wrapper">
                <input
                    type="password"
                    placeholder="کلمه عبور"
                    class="form-control"
                    name="password"
                />
            </div>
            <div class="form-wrapper">
                <input
                    type="password"
                    placeholder="تکرار کلمه عبور"
                    class="form-control"
                    name="password_confirmation"
                />
            </div>
            <button type="submit">
                ثبت نام
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>
</body>
</html>
