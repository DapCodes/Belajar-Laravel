<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($post as $tampil)
        <li>
            <p>{{$tampil->id}}</p>
            <p>{{$tampil->title}}</p>
            <p>{{$tampil->content}}</p>
            <hr>
        </li>
    @endforeach
</body>
</html>