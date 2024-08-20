<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
<form action="{{route('login')}}"  method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter Your Email">
    <input type="password" name="password" placeholder="Enter Your Password">
    <input type="submit" value="Login">
</form>
</body>
</html>
