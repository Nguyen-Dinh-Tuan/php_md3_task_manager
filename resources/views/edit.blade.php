
<!doctype html>
<html lang="en">
<head>
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Design Order Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- font files -->
    <link href='{{asset('backend///fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
    <!-- /font files -->
    <!-- css files -->
    <link href="{{ asset('backend/css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
    <!-- /css files -->
</head>
<body>
<h1 class="header-w3ls">Edit Task Manager </h1>
<div class="content-w3ls">
    <div class="form-w3ls">
        <form class="container"
                      method="post" action="{{route('customer.update',$customer->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class="grid-agileits1">
                    <div class="form-control">
                        <label class="header">Name <span>*</span></label>
                        <input type="text" id="name" name="name"  value="{{$customer->name}}" placeholder="Name" title="Please enter your Full Name" required="">
                    </div>
                    <div class="form-control">
                        <label class="header">Age :</label>
                        <input type="text" id="name"  name="age" value="{{$customer->age}}" placeholder="Phone" title="Please enter your Phone No" required="">
                    </div>
                    <div class="form-control">
                        <label class="header">Phone :</label>
                        <input type="text" id="name" name="phone" value="{{$customer->phone}}" placeholder="Phone" title="Please enter your Phone No" required="">
                    </div>
                    <div class="form-control">
                        <label class="header">Email :</label>
                        <input type="email" id="email" name="email" value="{{$customer->email}}" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
                    </div>
                    <div class="form-control">
                        <label class="header">Address :</label>
                        <input type="text" id="name" name="address" value="{{$customer->address}}" placeholder="Address" title="Please enter your Address" required="">
                    </div>
                </div>
            <div class="w3ls-btn">
                <div class="wthreesubmitaits">
                    <input type="submit" name="submit" value="Update">
                </div>
            </div>
        </form>
    </div>
</div>
<p class="copyright">© 2020 Edit Task Manager Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>






