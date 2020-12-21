<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
<h1>Danh sach khach hang</h1>
<div class="container-fixed">
    <div class="table">
        <a class="btn btn-success" href="{{route('customer.create')}}">Them moi</a>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>STT</th>
                <th>Ho va Ten</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Thao tac</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $key=>$customer)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->age}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <a href="{{route('customer.edit', $customer->id)}}">Edit</a>
                        <a href="{{route('customer.destroy', $customer->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>STT</th>--}}
{{--                <th>Ho va Ten</th>--}}
{{--                <th>Age</th>--}}
{{--                <th>Phone</th>--}}
{{--                <th>Email</th>--}}
{{--                <th>Address</th>--}}
{{--                <th>Thao tac</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}

        </table>
    </div>
</div>

</body>
</html>
