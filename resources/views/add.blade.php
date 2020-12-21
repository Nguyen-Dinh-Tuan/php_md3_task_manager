

<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Add Task Manager</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Classic Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="{{asset('frontend///fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700')}}" rel="stylesheet">
    <link href="{{asset('frontend///fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i')}}" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<!--header-->
<h1>
    <span>A</span>DD
    <span>T</span>ASK
    <span>M</span>ANAGER</h1>
<!--//header-->
<!-- content -->
{{--<form action="{{route('customer.store')}}" method="post">--}}
{{--@csrf--}}
<div class="main-content-agile">
    <div class="sub-main-w3">
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-style-agile">
                <label>Your Name</label>
                <div class="pom-agile">
                    <input placeholder="Your Name" name="name" type="text" required="">
                    <span class="fa fa-user-o" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-style-agile">
                <div class="form-style-agile">
                    <label>Your Age</label>
                    <div class="pom-agile">
                        <input placeholder="Your Age" name="age" type="number" required="">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-style-agile">
                    <div class="form-style-agile">
                        <label>Your Phone</label>
                        <div class="pom-agile">
                            <input placeholder="Your Phone" name="phone" type="text" required="">
                            <span class="fa fa-user-o" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-style-agile">
                <label>Email</label>
                <div class="pom-agile">
                    <input placeholder="Email" name="email" type="email" required="">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-style-agile">
                <label>Your Address</label>
                <div class="pom-agile">
                    <input placeholder="Address" name="address" type="text" required="">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                </div>
            </div>
            <div class="clear"></div>
            <input type="submit" value="Add">
    </div>

</div>
        </form>
</body>
</html>
