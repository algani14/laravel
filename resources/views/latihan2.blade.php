<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($pegawai as $data)
        @if ($data['Jabatan']== 'manager')
        @php $jab = 500000; @endphp
        @elseif ($data['Jabatan']=='sekretaris')
        @php $jab = 350000; @endphp
        @elseif($data['Jabatan']=='staff')
        @php $jab = 250000; @endphp
        @endif

        @if ($data['jam_kerja']>250)
            @php
                $bonus = 0.10 * $jab;
            @endphp
            @elseif($data['jam_kerja']>200)
            @php
            $bonus = 0.05 *$jab;
            @endphp
            @else
            @php
                $bonus = 0;
            @endphp
        @endif

        @php
            $ppn = 0.025 *$jab;
        @endphp
        @php
            $gaber = ($jab + $bonus) - $ppn;
        @endphp
        Nama                            :{{$data['nama']}}<br>
        Agama                           :{{$data['agama']}}<br>
        Jabatan                         :{{$data['Jabatan']}}<br>
        jam kerja                       :{{$data['jam_kerja']}}<br>
        Gaji                            :{{ $jab }}<br>
        bonus                           :{{ $bonus}}<br>
        ppn                             :{{ $ppn}}<br>
        gaji bersih                     :{{$gaber}}<br>
        <hr>
    @endforeach
</body>
</html>
