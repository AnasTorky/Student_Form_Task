<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
<form action="{{route('student')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Enter Your name">
    <input type="text" name="phone" placeholder="Enter Your phone">
    <input type="file" name="img" placeholder="Enter Your image">
    <input type="submit" value="Submit">
</form>
</body>
</html>
