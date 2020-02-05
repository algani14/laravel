<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
</head>
<body>
    <fieldset>
        <legend>Show Data</legend>
    Nama     : <b>{{$barang->nama}}</b><br>
    Kode : <b>{{$barang->kode}}</b><br>
    Harga : <b>{{$barang->harga}}</b><br>
    Foto :<img src="{{$barang->foto}}" alt="">

    </fieldset>
</body>
</html>
