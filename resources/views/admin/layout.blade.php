<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
@foreach ($users as $k => $user)
        {{$k}}
        {{$user}} <br/>

@endforeach
</body>
</html>
