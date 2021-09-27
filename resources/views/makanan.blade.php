<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Keterangan</th>           
        </tr>
        @foreach ($makanan as $y)
            <tr>
                <td>1</td>
                <td>{{$y->nama}}</td>
                <td>{{$y->keterangan}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>