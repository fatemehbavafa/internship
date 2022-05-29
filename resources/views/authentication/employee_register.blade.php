<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ثبت نام کارآموز</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link
        rel="stylesheet"
        href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css"
    />

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset("employee_register/css/style.css")}}"/>
</head>

<body>
<div
    class="wrapper"
    style="
        background-image: linear-gradient(
          to right top,
          #edf5f3,
          #d3f2f8,
          #c6eaff,
          #d8daff,
          #ffc5fb
        );
      "
>
    <div class="inner">
        <div class="image-holder">
            <img src="{{asset("employee_register/images/REG.png")}}" alt=""/>
        </div>
        <form action="{{route('store_employee')}}" method="POST">
            {{csrf_field()}}
            <h3>ثبت نام کارآموز</h3>
            <div class="form-group">
                <input
                    type="text"
                    placeholder=" نام خانوادگی "
                    class="form-control"
                    name="last_name"
                />
                <input type="text" placeholder="نام "
                       class="form-control"
                       name="first_name"/>
            </div>

            <div class="form-wrapper">
                <input type="text" placeholder="آدرس ایمیل"
                       class="form-control"
                       name="email"/>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="محل زندگی"
                       class="form-control"
                       name="province_id"/>
            </div>
            <div class="form-wrapper">
                <input
                    type="text"
                    placeholder="رشته تحصیلی"
                    class="form-control"
                    name="major_id"
                />
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="شماره تماس"
                       class="form-control"
                       name="phone"/>
            </div>
            <div class="form-wrapper">
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
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
                />
            </div>
            <button>
                ثبت نام
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>
</body>
</html>
