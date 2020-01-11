<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('ybox.reset.pass')}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Mã xác nhận</label>
            <input type="text" name="token">
        </div>
        <div>
            <label for="">Mật khẩu mới</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Reset">

        </div>

    </form>
</body>
</html>