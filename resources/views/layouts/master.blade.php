<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="/home/">home</a>
    <a href="/about/">about</a>
    <a href="/contact/">contact</a>

    </nav>

    {{-- tempat konten dinasmis --}}
        @yield('konten')
    {{-- akhir konten dinamis     --}}

    <footer>SMK ASSALAAM</footer>

</body>
</html>
