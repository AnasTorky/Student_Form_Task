<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign up Page</title>
</head>
<body>
<form action="{{route('signup')}}"  method="POST">
    @csrf
    <input type="name" name="name" placeholder="Enter Your Name">
    <input type="email" name="email" placeholder="Enter Your Email">
    <input type="password" name="password" placeholder="Enter Your Password">
    <input type="submit" value="Sign up">
</form>
</body>
</html>
