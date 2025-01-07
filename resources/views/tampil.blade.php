<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($data_siswa as $data)
        <li>
            {{$data}}
        </li>
    @endforeach
</body>
</html>